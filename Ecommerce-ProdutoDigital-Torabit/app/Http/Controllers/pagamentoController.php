<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Pagamento;
use App\Produto;
use Illuminate\Http\Request;

class pagamentoController extends Controller
{

    public function pagamento(Request $request, $id)
    {
        $carrinho = session()->get('carrinho');


        $produto = Produto::find($id);
        $carrinho[$produto->id] = $produto;

        session()->put('carrinho', $carrinho);

        return view('pagamento', ["produtos" =>  $carrinho]);
    }

    public function exibirCarrinho(Request $request)
    {
        $carrinho = session()->get('carrinho');

        return view('pagamento', ["produtos" =>  $carrinho]);
    }

  /*  public function excluirProduto($id)
    {
        $carrinho = session()->get('carrinho');
        $carrinho = Produto::find($id);
        $carrinho[$excluir->id]->delete();

        return view('pagamento', ["produtos" =>  $carrinho]);
    }  */


    public function createPagamento(Request $request)
    {

        $novaCompra = new Pagamento();
        // $novaCompra->tipo_compra = $request->Anual;
        // $novaCompra->tipo_compra = $request->Mensal;
        // $novaCompra->produto = $request-> //tipoproduto;
        //     $novaCompra->plano = $request-> //tipo de plano;
        // $novaCompra->pagamento_id = $primaryKey;
        $resultado = $novaCompra->save();
        return view('resultadoCompra', ["resultado" => $resultado]);
    }
}
