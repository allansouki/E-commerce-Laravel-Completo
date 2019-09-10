
<!DOCTYPE html>
<html lang="en">
<head>
@extends('layouts.app')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{('adminconsulta')}}">
              <span data-feather="home"></span>
              Consulta <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('admincadastrar')}}">
              <span data-feather="file"></span>
              Cadastrar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Atualizar
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
         
        </h6>
        <ul class="nav flex-column mb-2">
          
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br><br><div class="card">
                <div class="card-header p-3 mb-2 bg-primary text-white">{{ __('Cadastrar Cliente') }}</div >

                

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            
                            
                        </div>


       
                        <div class="container">
        <h1 class="mt-2">Inserir produto</h1>
        @if(!empty($mensagem))
            <div class="alert alert-success">Produto inserido com sucesso!</div>
            
        @endif
        <form action="{{route('admin.store')}}" method="post" class="mt-2">
            @csrf
            <div class="form-group">
                <label for="name">name: <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control" autofocus required>
            </div>

            <div class="form-group">
                <label for="email">Email: <span class="text-danger">*</span></label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password: <span class="text-danger">*</span></label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF: </label>
                <input type="number" id="cpf" name="cpf" class="form-control">
            </div>


            <div class="form-group">
                <label for="contato">Contato: <span class="text-danger">*</span></label>
                <input type="number" id="contato" name="contato" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cep">CEP: <span class="text-danger">*</span></label>
                <input type="number" id="cep" name="cep" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereco: <span class="text-danger">*</span></label>
                <input type="text" id="endereco" name="endereco" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="numero">Numero: <span class="text-danger">*</span></label>
                <input type="text" id="numero" name="numero" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="complemento">Complemento: <span class="text-danger">*</span></label>
                <input type="text" id="complemento" name="complemento" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cidade">cidade: <span class="text-danger">*</span></label>
                <input type="text" id="cidade" name="cidade" class="form-control" required>
            </div>
            

            <div class="form-group">
                <label for="estado">Estado: <span class="text-danger">*</span></label>
                <input type="text" id="estado" name="estado" class="form-control" required>
            </div>

            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Inserir">
        </form>
    </div>
       
        </div>
    </div>
</div>
                  
        
        
        




















      




</body>
@endsection 
</html>




























