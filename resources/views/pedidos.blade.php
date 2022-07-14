@extends('layouts.layout' , ['title' => 'Pedidos'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Pedidos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/pedidos-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="pedidos" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Forma de pagamento</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $pedido)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/pedidos-edit/{{$pedido->id}}">Editar</a>
                                <a class="btn btn-danger" href="/pedidos-delete/{{$pedido->id}}">Excluir</a>
                            </td>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->valor}}</td>
                            <td>{{$pedido->data}}</td>
                            <td>{{$pedido->forma_pagamento}}</td>
                            
                
                        </tr>
                    @endforeach




            </table>
        </div>
        <!-- /.card-body -->
    </div>

    @stop