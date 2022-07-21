<?php

namespace App\Http\Controllers;

use App\Models\StatusPed;
use Illuminate\Http\Request;

class StatusPedController extends Controller
{
    public function lista() {
        $lista = StatusPed::all();
        return view('statusped', ['lista' => $lista]);
    }

    public function add() {
        return view('statusped-form', ['statusped' => new StatusPed()]);
    }

    public function edit($id) {
        $statusped = StatusPed::find($id);
        return view('statusped-form', ['statusped' => $statusped]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = StatusPed::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = StatusPed::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('statusped-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = StatusPed::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('statusped', ['erro' => true]);
    }
}
