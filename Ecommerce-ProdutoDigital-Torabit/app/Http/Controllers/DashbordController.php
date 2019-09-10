<?php

namespace App\Http\Controllers;

use App\User;
//use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class DashbordController extends Controller
{

    public function __construct(){

        $this->middleware('auth:admin');
       
    }
      protected $redirectTo = 'admin.login';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       
    public function index(Request $request)
    {
    // $cliente = user::all();
         
    //  return view('/adminconsulta',compact('cliente'));   
    //$cliente = user::all()->where('email', Request::input('email'));

    if ( !empty($request->email)) {
        $cliente = User::where('email', $request->email)->get();// first -> traz um | get -> traz array 
    } else {
        $cliente = null;
    }

    return view('/adminconsulta')->with('cliente', $cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admincadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'cpf' => $request['cpf'],
            'contato' => $request['contato'],
            'cep' => $request['cep'],
            'endereco' => $request['endereco'],
            'numero' => $request['numero'],
            'complemento' => $request['complemento'],
            'cidade' => $request['cidade'],
            'estado' => $request['estado'],
        ]);*/

        $cliente = new User();
        $cliente->name =  $request['name'];
        $cliente->email = $request['email'];
        $cliente->password = $request['password'];
        $cliente->cpf = $request['cpf'];
        $cliente->contato = $request['contato'];
        $cliente->cep = $request['cep'];
        $cliente->endereco = $request['endereco'];
        $cliente->numero = $request['numero'];
        $cliente->complemento = $request['complemento'];
        $cliente->cidade = $request['cidade'];
        $cliente->estado = $request['estado'];

        $cliente->save();
        $mensagem = "Produto inserido com sucesso";

        return view('/admincadastrar')->with('mensagem', $mensagem);

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
        $cliente = User::findOrFail($id);

        return view('/admineditar', compact('cliente'));
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
        $cliente = User::find($id);
        $cliente->name =  $request['name'];
        $cliente->email = $request['email'];
        /*$cliente->password = $request['password'];
        $cliente->cpf = $request['cpf'];
        $cliente->contato = $request['contato'];
        $cliente->cep = $request['cep'];
        $cliente->endereco = $request['endereco'];
        $cliente->numero = $request['numero'];
        $cliente->complemento = $request['complemento'];
        $cliente->cidade = $request['cidade'];
        $cliente->estado = $request['estado'];*/

        $cliente->save();

        $mensagem = "Produto atualizado com sucesso";

        return view('/admineditar')->with('mensagem', $mensagem)->with('cliente', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
