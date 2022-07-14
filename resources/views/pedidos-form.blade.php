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

        <form action="/pedidos-save/{{$pedido->id}}" method="post">
            @csrf
            <div class="mb-3">
                <label>ID</label>
                <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$pedido->id}}">
            </div>
            <div class="mb-3">
                <label>Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" value="{{$pedido->valor}}">
            </div>
            <div class="mb-3">
                <label>Data</label>
                <input type="text" class="form-control" id="data" name="data" value="{{$pedido->data}}">
            </div>
            <div class="mb-3">
                <label>Forma de pagamento</label>
                <input type="text" class="form-control" id="forma_pagamento" name="forma_pagamento" value="{{$pedido->forma_pagamento}}">
            </div>
            <div class="mb-3">
                <label>Cliente</label>
                <select class="form-control" id="cliente_id" name="cliente_id" required="true">
                    <option value="">Selecione...</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{$cliente->id}}" @if ($pedido->cliente_id == $cliente->id) selected @endif>{{$cliente->id}} - {{$cliente->nome}}</option>
                    @endforeach
                </select>


            </div>
            <div class="mb-3">
                <label>Vendedor</label>
                <select class="form-control" id="vendedor_id" name="vendedor_id" required="true">
                    <option value="">Selecione...</option>
                    @foreach ($vendedores as $vendedor)
                        <option value="{{$vendedor->id}}" @if ($vendedor->vendedor_id == $vendedor->id) selected @endif>{{$vendedor->id}} - {{$vendedor->nome}} -</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Status do pedido</label>
                <select class="form-control" id="status_ped_id" name="status_ped_id" required="true">
                    <option value="">Selecione...</option>
                     @foreach ($statusped as $statusped)
                        <option value="{{$statusped->id}}" @if ($pedido->statusped_id == $statusped->id) selected @endif>{{$statusped->id}} - {{$statusped->descricao}}</option>
                     @endforeach
                </select>
    
    
            </div>   


            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/pedidos">
              <button type="button" class="btn btn-default">Voltar</button>
            </a>
        </form>
    </div>
</div>
@stop
