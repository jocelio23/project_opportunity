<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Candidato;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CandidatoController extends Controller
{
    public function ReturnList(User $candidato)
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

    public function  insert(CandidatoRequest $request, User $candidato)
    {
        $data = $request->all();
        $candidato = $candidato::create($data);
        return redirect()->route('candidato.login');
        
    }

    public function candidate(string|int $id)
    {
        if (!$cand = User::find($id)) {
            return back();
        }

        return view('Candidato/pag', compact('cand'));
    }

    public function edit(User $candidato, string|int $id)
    {
        if (!$cand = $candidato->where('id', $id)->first()) {
            return back();
        }
        return view('Candidato/update', compact('cand'));
    }


    public function update(CandidatoRequest $request, User $candidato, string|int $id)
    {
        if (!$cand = $candidato->find($id)) {
            return back();
        }

        $cand->update($request->only([
            'nome', 'formacao', 'pretensao', 'email'
        ]));
        return redirect()->route('candidato.ReturnLists');
    }

    public function del(User $candidato, string|int $id){
        if (!$cand = $candidato->find($id)) {
            return back();
        }

        $cand->delete();

        return redirect()->route('candidato.ReturnLists');
    }

   /*  public function destroy()
    {
        Auth::logout();
        return redirect()->route('vaga.padrao');
    }  */

}
