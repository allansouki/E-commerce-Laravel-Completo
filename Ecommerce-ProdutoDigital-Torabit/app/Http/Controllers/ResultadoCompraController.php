<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/*use App\Http\Controllers\ResultadoCompraController; */

class ResultadoCompraController extends Controller
{
    public function ResultadoCompra()
    {
        return view('resultadoCompra');
    }
}
