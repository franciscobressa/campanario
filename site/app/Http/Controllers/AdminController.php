<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

   public function admin(){
        return view('pages.admin.admin');
    }
    
    public function adminProdutos(){
        return view('pages.admin.produtos');
    }
}
