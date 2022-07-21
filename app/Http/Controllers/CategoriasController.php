<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function lista() {
        $lista = Categorias::all();
        return view('categorias', ['lista' => $lista]);
    }

    public function add() {
        return view('categorias-form', ['categoria' => new Categorias()]);
    }

    public function edit($id) {
        $categoria = Categorias::find($id);
        return view('categorias-form', ['categoria' => $categoria]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Categorias::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Categorias::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('categorias-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Categorias::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('categorias', ['erro' => true]);
    }
}
