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
                        <th>Codigo</th>
                        <th>Descrição</th>
                        <th>Código interno</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                   




            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop