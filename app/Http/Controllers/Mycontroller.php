<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function index()
    {
        return view('my_view');
    }
    
        public function store(Request $request)
    {
        return response ()->json(['mensagem' => 'Dados salvos com sucesso!']);
    }
}
