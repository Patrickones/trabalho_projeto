<?php

namespace App\Http\Controllers;

use App\Models\Vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    public function lista() {
        $lista = Vendedores::all();
        return view('vendedores', ['lista' => $lista]);
    }

    public function add() {
        return view('vendedores-form', ['vendedor' => new Vendedores()]);
    }

    public function edit($id) {
        $vendedor = Vendedores::find($id);
        return view('vendedores-form', ['vendedor' => $vendedor]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Vendedores::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Vendedores::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('vendedores-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Vendedores::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('vendedores', ['erro' => true]);
    }
}
