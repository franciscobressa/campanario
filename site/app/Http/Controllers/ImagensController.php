<?php

namespace App\Http\Controllers;
use App\Imagens;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ImagensController extends Controller
{

    public function index()
    {
        $imagens = Imagens::all();
        return view('pages.admin.imagens', ['imagens'=>$imagens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img = Imagens::find($id);
        return view('pages.admin.imagens', ['imagens' => $img]);


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
        $img = Imagens::find($id);

        Storage::delete('public/imagens/'.$img->foto);

        $fileNameExt = $request->file('foto')->getClientOriginalName();
        $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
        $ext = $request->file('foto')->getClientOriginalExtension();
        
        $finalFileName = $fileName.'_'.time().'.'.$ext;
        $path = $request->file('foto')->storeAs('public/imagens', $finalFileName);
        $img->foto = $finalFileName;
        $img->save();
        return redirect('/admin/imagens')->with('success', 'Item alterado com sucesso!');


    }
}