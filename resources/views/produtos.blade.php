@extends('layouts.layout' , ['title' => 'Produtos'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Produtos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/produtos-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="produtos" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Estoque</th>
                        <th>Marca</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $produto)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/produtos-edit/{{$produto->id}}">Editar</a>
                                <a class="btn btn-danger" href="/produtos-delete/{{$produto->id}}">Excluir</a>
                            </td>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>{{$produto->marca}}</td>
                            
                
                        </tr>
                    @endforeach




            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop