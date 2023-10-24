<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscritoController extends Controller
{
    public function  insert(Request $request, Inscricao $inscricao)
    {
        $data = $request->all();
        $inscricao = $inscricao::create($data);
        return redirect('/')->with('msg', 'Inscrição inserida com sucesso.');


        return redirect('/')->with('msg', 'Inscrição inserida com sucesso.');
    }

    public function desistir(Inscricao $inscricao, string|int $id){
        if (!$insc = $inscricao->find($id)) {
            return back();
        }

        $insc->delete();

        return redirect()->route('vaga.padrao');
    }
}
