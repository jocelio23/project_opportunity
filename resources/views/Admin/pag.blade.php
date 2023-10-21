<h1>Página individual</h1>


Identificador: {{ $vag->id }}<br>
Nome da vaga: {{ $vag->nome }}<br>
Descrição: {{ $vag->descricao }}<br>
Salário: {{ $vag->tipo}}<br>
<form action="{{route('vaga.destroy', $vag->id)}}" method="POST">
    @csrf
    @method('DELETE')
   <button type="submit">deletar</button>
</form>

<a href="{{route('vaga.ReturnLists')}}"> Retornar</a>



