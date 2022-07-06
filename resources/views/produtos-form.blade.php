@extends('layouts.layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cadastro</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if (isset($erro))
            <div class="alert alert-danger" role="alert">
                Ocorreram problemas ao tentar salvar o registro!
            </div>
        @endif

        <form action="/produtos-save/{{$produto->id}}" method="post">
            @csrf
            <div class="mb-3">
                <label>ID</label>
                <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$produto->id}}">
            </div>
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
            </div>
            <div class="mb-3">
                <label>estoque</label>
                <input type="text" class="form-control" id="estoque" name="estoque" value="{{$produto->estoque}}">
            </div>
            <div class="mb-3">
                <label>marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{$produto->marca}}">
            </div>
            <div class="mb-3">
                <label>Categoria</label>
                <select class="form-control" id="categoria_id" name="categoria_id">
                    <option value="">Selecione...</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}" @if ($produto->categoria_id == $categoria->id) selected @endif>{{$categoria->id}} - {{$categoria->nome}}</option>
                    @endforeach
                </select>


            </div>
            <div class="mb-3">
                <label>fornecedor</label>
                <select class="form-control" id="forn_id" name="forn_id">
                    <option value="">Selecione...</option>
                    @foreach ($fornecedores as $fornecedor)
                        <option value="{{$fornecedor->id}}" @if ($fornecedor->forn_id == $fornecedor->id) selected @endif>{{$fornecedor->id}} - {{$fornecedor->nome}} - {{$fornecedor->cnpj}} - {{$fornecedor->telefone}} - {{$fornecedor->email}} -</option>
                    @endforeach
                </select>

            <div class="mb-3">
                <label>Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" value="{{$produto->valor}}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/produtos">
              <button type="button" class="btn btn-default">Voltar</button>
            </a>
        </form>
    </div>
</div>
@stop
