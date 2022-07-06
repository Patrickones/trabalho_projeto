<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Fornecedores;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function lista() {
        $lista = Produtos::all();
        return view('Produtos', ['lista' => $lista]);
    }

    public function add() {
        $categorias = Categorias::all();
        $fornecedores = Fornecedores::all();
        return view('produtos-form', ['produto' => new Produtos(), 'categorias' => $categorias, 'fornecedores' => $fornecedores]);
    }

    public function edit($id) {
        $Produto = Produtos::find($id);
        $categorias = Categorias::all();
        $fornecedores = Fornecedores::all();
        return view('Produtos-form', ['Produto' => $Produto, 'categorias' => $categorias, 'fornecedores' => $fornecedores]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        $categorias = Categorias::all();
        $produto = new Produtos();
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Produtos::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Produtos::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('Produtos-form', ['produto' => $produto, 'categorias' => $categorias, 'erro' => true]);
    }

    public function delete($id) {
        $excluiu = Produtos::where('id', $id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('Produtos', ['erro' => true]);
    }
}
