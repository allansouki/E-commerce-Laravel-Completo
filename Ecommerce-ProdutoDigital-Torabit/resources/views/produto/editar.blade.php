@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('atualizar.produto', $produto->id) }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }} 
                        <div class="form-group">
                            <label for="endereco">Nome:</label>  
                            <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}"/> 
                        </div> 
                        <div class="form-group">
                            <label for="nome">Descrição:</label>  
                            <input type="text" name="descricao" class="form-control" value="{{ $produto->descricao }}"/>
                        </div> 
                        <div class="form-group">
                            <label for="nome">Preço:</label>  
                            <input type="number" name="preco" class="form-control" value="{{ $produto->preco }}"/>
                        </div>
                        <div class="form-group">
                            <label for="nome">Imagem:</label>  
                            <input type="file" name="imagem" class="form-control" value="{{ $produto->imagem }}"/>
                        </div>   
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
