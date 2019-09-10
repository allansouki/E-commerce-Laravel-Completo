@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="endereco">Nome:</label>
                        <input class="form-control" name="nome" type="text" value="{{ $produto->nome }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nome">Descrição:</label>
                        <input class="form-control" name="descricao" value="{{ $produto->descricao }}" type="text" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nome">Preço:</label>
                        <input class="form-control" name="preco" value="{{ $produto->preco }}" type="number" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nome">Imagem:</label>
                        <img width="125" src="/{{ $produto->imagem }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection