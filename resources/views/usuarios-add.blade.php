@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro usuarios</h3>
        </div>
        
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif
            <form action="/usuario-save/{{$usuario->id}}" method="post">
                <div class="mb-3">
                    <label>ID</label>
                    <input type="name" class="form-control" id="id" disabled="true" value="{{$usuario->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="Name" value="{{$usuario->nome}}">
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" class="form-control" id="email" value="{{$usuario->email}}">
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="password" value="{{$usuario->password}}">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/usuarios">
                <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>


@stop
