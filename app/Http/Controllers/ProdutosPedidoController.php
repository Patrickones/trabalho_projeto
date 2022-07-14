<?php

namespace App\Http\Controllers;

use App\Models\Produtos_pedido;
use Illuminate\Http\Request;

class ProdutosPedidoController extends Controller
{
    public function lista() {
        $lista = Produtos_pedido::all();
        return view('ProdutosPedido', ['lista' => $lista]);
    }

    public function add() {
        return view('ProdutosPedido-form', ['ProdutosPedido' => new Produtos_pedido()]);
    }

    public function edit($id) {
        $ProdutosPedido = Produtos_pedido::find($id);
        return view('ProdutosPedido-form', ['ProdutosPedido' => $ProdutosPedido]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Produtos_pedido::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Produtos_pedido::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('ProdutosPedido-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Produtos_pedido::where('id', $id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('categorias', ['erro' => true]);
    }
}
