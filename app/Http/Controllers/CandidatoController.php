<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    public function ReturnList(Candidato $candidato)
    {
        $candidato = $candidato->all();
        return view('Candidato/listagem', compact('candidato'));
    }

    public  function registro(){
        return view('Candidato/registro');
    }

    public  function login(){
        return view('Candidato/loginCandidato');
    }

    public function createList()
    {
        return view('Candidato/create');
    }

    public function  insert(CandidatoRequest $request, Candidato $candidato)
    {
        $data = $request->all();
        $candidato = $candidato::create($data);
        return redirect()->route('candidato.login');
        
    }

    public function candidate(string|int $id)
    {
        if (!$cand = Candidato::find($id)) {
            return back();
        }

        return view('Candidato/pag', compact('cand'));
    }

    public function edit(Candidato $candidato, string|int $id)
    {
        if (!$cand = $candidato->where('id', $id)->first()) {
            return back();
        }
        return view('Candidato/update', compact('cand'));
    }


    public function update(CandidatoRequest $request, Candidato $candidato, string|int $id)
    {
        if (!$cand = $candidato->find($id)) {
            return back();
        }

        $cand->update($request->only([
            'nome', 'formacao', 'pretensao', 'email'
        ]));
        return redirect()->route('candidato.ReturnLists');
    }

    public function del(Candidato $candidato, string|int $id){
        if (!$cand = $candidato->find($id)) {
            return back();
        }

        $cand->delete();

        return redirect()->route('candidato.ReturnLists');
    }


    public function logCandidato(){
        if (auth()->attempt(request(['email', 'senha'])) == false) 
        {
            return back()->withErrors([
                'message' => 'Email ou senha está incorreta'
            ]);
        }
        return view('/');
    }


}
