@extends('layouts.layout' , ['title' => 'Clientes'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Clientes</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/clientes-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>CPF/CNPJ</th>
                        <th>CEP</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Fone Residencial</th>
                        <th>Fone Celular</th>
                        <th>E-mail</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($lista as $clientes)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/clientes-edit/{{$clientes->id}}">Editar</a>
                                <a class="btn btn-danger" href="/clientes-delete/{{$clientes->id}}">Excluir</a>
                            </td>
                            <td>{{$clientes->id}}</td>
                            <td>{{$clientes->nome}}</td>
                            <td>{{$clientes->cpf}}</td>
                            <td>{{$clientes->uf}}</td>
                            <td>{{$clientes->cidade}}</td>
                            <td>{{$clientes->bairro}}</td>
                            <td>{{$clientes->cep}}</td>
                            <td>{{$clientes->rua}}</td>
                            <td>{{$clientes->endereco}}</td>
                            <td>{{$clientes->telefone}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


@stop