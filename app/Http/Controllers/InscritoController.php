<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscritoController extends Controller
{
    public function ReturnList(Vaga $vaga)
    {
        $vagas = $vaga->all();
        return view('Site/listaVagas', compact('vagas'));
    }

    public function createList()
    {
        return view('Admin/create');
    }

    public function  insert(VagaRequest $request, Vaga $vaga)
    {
        $data = $request->all();
        $vaga = $vaga::create($data);
        return redirect('/lista')->with('msg', 'vaga inserida com sucesso.');
    }
}