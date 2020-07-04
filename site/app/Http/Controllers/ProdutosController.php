<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('pages.admin.produtos', ['produtos'=>$produtos], ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('pages.admin.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
            'foto' => 'required|image|max:1999',
            'categoria' => 'required'
        ]);

        // Handling image name
        $fileNameExt = $request->file('foto')->getClientOriginalName();
        $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
        $ext = $request->file('foto')->getClientOriginalExtension();
        
        $finalFileName = $fileName.'_'.time().'.'.$ext;

        // Upload image
        $path = $request->file('foto')->storeAs('public/produtos', $finalFileName);


        // Saving product
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->descricao = $request->input('descricao');
        $produto->foto = $finalFileName;
        $produto->id_categoria = $request->input('categoria');
        $produto->save();

        return redirect('/admin/produtos')->with('success', 'Item adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getProdutos()
    {
        $produtos = Produto::all();

        return json_encode($produtos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        $produtoCat = Categoria::find($produto->id_categoria);

        return view('pages.admin.edit', ['produto' => $produto],['categorias' => $categorias])->with('produtoCat', $produtoCat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
            'foto' => 'image|max:1999',
            'categoria' => 'required'
        ]);
        

        $produto = Produto::find($id);

        if($request->hasFile('foto')){
        //Delete the old image from directory
        Storage::delete('public/produtos/'.$produto->foto);

        // Handling image name
        $fileNameExt = $request->file('foto')->getClientOriginalName();
        $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
        $ext = $request->file('foto')->getClientOriginalExtension();
        
        $finalFileName = $fileName.'_'.time().'.'.$ext;

        // Upload image
        $path = $request->file('foto')->storeAs('public/produtos', $finalFileName);
        $produto->foto = $finalFileName;
        }
        
        // Saving product
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->descricao = $request->input('descricao');
        $produto->id_categoria = $request->input('categoria');
        $produto->save();

        return redirect('/admin/produtos')->with('success', 'Item alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        Storage::delete('public/produtos/'.$produto->foto);
        $produto->delete();
        return redirect('/admin/produtos')->with('success', 'Item excluído com sucesso!');   
    }
}
