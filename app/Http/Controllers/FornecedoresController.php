<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function lista() {
        $lista = Fornecedores::all();
        return view('fornecedores', ['lista' => $lista]);
    }

    public function add() {
        return view('fornecedores-form', ['fornecedor' => new Fornecedores()]);
    }

    public function edit($id) {
        $fornecedor = Fornecedores::find($id);
        return view('fornecedores-form', ['fornecedor' => $fornecedor]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Fornecedores::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Fornecedores::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('fornecedores-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Fornecedores::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('fornecedores', ['erro' => true]);
    }

}
