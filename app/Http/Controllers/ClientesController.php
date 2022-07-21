<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function lista() {
        $lista = Clientes::all();
        return view('clientes', ['lista' => $lista]);
    }

    public function add() {
        return view('clientes-add', ['clientes' => new Clientes()]);
    }

    public function edit($id) {
        $clientes = Clientes::find($id);
        return view('clientes-add', ['clientes' => $clientes]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Clientes::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Clientes::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('clientes-add', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = clientes::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('clientes', ['erro' => true]);
    }
}


