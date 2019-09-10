<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class viewprodutoController extends Controller
{
    public function exibirIndex(Request $request) {    // Visualização dos produtos na index
        $produtos = Produto::All();
        return view ('index', ['produtos'=>$produtos]);       
    }

    public function infoProduto($id) {    // Visualização dos produtos em página individual
        $produto = \App\Produto::find($id);
        return view('informacao', compact('produto'));       
    }
}
