<?php

namespace App\Http\Controllers;

use App\Http\Requests\VagaRequest;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagaController extends Controller
{
    public function ReturnList(Vaga $vaga)
    {
        $vagas = $vaga->all();
        return view('Admin/listagem', compact('vagas'));
    }

   /*  public function indexList(Vaga $vaga)
    {
        $vagas = $vaga->all();
        return view('welcome', compact('vagas'));
    } */


    public function padrao(Vaga $vaga){
        $vagas = $vaga->all();
        return view('welcome', compact('vagas'));
    }
    
    public function ListVaga(Vaga $vaga)
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
     /*    dd($request); */
        $vaga = $vaga::create($data);
        return redirect('/lista')->with('msg', 'vaga inserida com sucesso.');
    }

    public function opportunity(string|int $id)
    {
        if (!$vag = Vaga::find($id)) {
            return back();
        }

        return view('Admin/pagina', compact('vag'));
    }

    public function edit(Vaga $vaga, string|int $id)
    {
        if (!$vag = $vaga->where('id', $id)->first()) {
            return back();
        }
        return view('Admin/update', compact('vag'));
    }

    public function update(VagaRequest $request, Vaga $vaga, string|int $id)
    {
        if (!$vag = $vaga->find($id)) {
            return back();
        }

        $vag->update($request->only([
            'nome', 'descricao', 'salario', 'tipo'
        ]));
        return redirect()->route('vaga.ReturnLists');
    }

    public function del(vaga $vaga, string|int $id){
        if (!$vag = $vaga->find($id)) {
            return back();
        }

        $vag->delete();

        return redirect()->route('vaga.ReturnLists');
    }

    public function pause($id){
        if (!$vag = Vaga::find($id)) {
            return back();
        }

       Vaga::where('id', $id)->update(['flag' => '-10']);
        return redirect()->route('vaga.ReturnLists');
    }

    public function reactive($id){
        if (!$vag = Vaga::find($id)) {
            return back();
        }

       Vaga::where('id', $id)->update(['flag' => '10']);
        return redirect()->route('vaga.ReturnLists');
    }

}
