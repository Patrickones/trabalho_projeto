@extends('layouts.layout' , ['title' => 'Usuarios'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de usuarios</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/usuarios-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo usuario</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Data criação</th>
                        <th>Data ultima alteração</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop
