
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
            <a class="nav-link active" href="{{route('admin.dashboard')}}">
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
          <li class="nav-item">
            <a class="nav-link" href="{{('/welcome')}}">
              <span data-feather="shopping-cart"></span>
              Cadastrar Produtos
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          
        </h6>
        <ul class="nav flex-column mb-2">
          
          </li>
          
          </li>
          
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

      {{('adminconsulta')}}

      <h1 class="mt-2">Pesquisa de cliente</h1>
        <form action="{{('adminconsulta')}}" method="get" class="form-inline mt-2">
            <input type="hidden" name="_token" value="{ { { csrf_token() } } }">
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <input type="text" id="descricao" name="email" class="form-control ml-2">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
        </form>
<h2>Consulta</h2>
<div class="table-responsive .table-sm" >
  <table class="table table-striped table-sm">
    <thead>
    
      <tr>
        <th >id</th>
        <th >Nome</th>
        <th>Email</th>
        
        <th>cpf</th>
        <th>Contato</th>
        <th>Cep</th>
        <th>Endereco</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($cliente))
    @if(count($cliente) > 0 ) 
    
    @foreach($cliente as $value)
      <tr>
      
      
      
      <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        
        <td>{{$value->cpf}}</td>
        <td>{{$value->contato}}</td>
        <td>{{$value->cep}}</td>
        <td>{{$value->endereco}}</td>
        <td>{{$value->numero}}</td>
        <td>{{$value->complemento}}</td>
        <td>{{$value->cidade}}</td>
        <td>{{$value->estado}}</td>
        <td><a href="{{ route('admin.editar', ['id' => $value->id ]) }}">Editar</a></td>
      </tr>
    
      
    @endforeach
    
    @endif
    @endif
    </tbody>
  </table>
</div>
</main>
</div>
</div>
     





















      




</body>
@endsection 
</html>




























