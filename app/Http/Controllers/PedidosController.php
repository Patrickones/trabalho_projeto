<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Pedidos;
use App\Models\Vendedores;
use App\Models\StatusPed;
use DateTime;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function lista() {
        $lista = Pedidos::all();
        return view('pedidos', ['lista' => $lista]);
    }

    public function add() {
        $clientes = Clientes::all();
        $vendedores = Vendedores::all();
        $statusped = StatusPed::all();
        return view('pedidos-form', ['pedido' => new Pedidos(), 'clientes' => $clientes, 'vendedores' => $vendedores, 'statusped' => $statusped]);
    }

    public function edit($id) {
        $pedido = Pedidos::find($id);
        $clientes = Clientes::all();
        $vendedores = Vendedores::all();
        $statusped = StatusPed::all();
        return view('pedidos-form', ['pedido' => new Pedidos(), 'clientes' => $clientes, 'vendedores' => $vendedores, 'statusped' => $statusped]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        $clientes = Clientes::all();
        $pedido = new Pedidos();
        $dados = $request->except('_token', '_method');
        $data = DateTime::createFromFormat('d/m/Y', $dados['data']);
        $dados['data'] = $data->format('Y-m-d');
        
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Pedidos::create($dados);
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Pedidos::where('id', $id)->update($dados);
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('Pedidos-form', ['pedido' => $pedido, 'clientes' => $clientes, 'erro' => true]);
    }

    public function delete($id) {
        $excluiu = Pedidos::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('Pedidos', ['erro' => true]);
    }
}
