@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro</h3>
        </div>
        
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif
            <form action="/clientes-save/{{$clientes->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>Codigo</label>
                    <input type="name" class="form-control" id="id" disabled="true" value="{{$clientes->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="Nome" name="nome" value="{{$clientes->nome}}">
                </div>
                <div class="mb-3">
<<<<<<< HEAD
                    <label>CPF</label>
                    <input type="text" class="form-control"  id="cpf" name="cpf" value="{{$clientes->cpf}}">
                </div>
                <div class="mb-3">
                    <label>CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{$clientes->cep}}">
=======
                    <label>CPF/CNPJ</label>
                    <input type="text" class="form-control" id="cpf/cnpj" value="{{$clientes->nome}}">
                </div>
                <div class="mb-3">
                    <label>CEP</label>
                    <input type="text" class="form-control" id="cep" value="{{$clientes->nome}}"> 
>>>>>>> 0837897812d7c639567d064d7f456e1020fdfb75
                </div>
                <div class="mb-3">
                  <label>Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" value="{{$clientes->cidade}}">
              </div>
              <div class="mb-3">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="{{$clientes->bairro}}">
            </div>
            <div class="mb-3">
                <label>Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" value="{{$clientes->rua}}">
            </div> 
            <div class="mb-3">
                <label>endereco</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{$clientes->endereco}}">
            </div>
            <div class="mb-3">
                <label>telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{$clientes->telefone}}">
            </div>
            <div class="mb-3">
                <label>uf</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$clientes->uf}}">
            </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/clientes">
                <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>


@stop