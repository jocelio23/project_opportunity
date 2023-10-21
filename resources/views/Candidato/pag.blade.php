<h1>Página individual</h1>


Identificador: {{ $cand->id }}<br>
Nome da candidato: {{ $cand->nome }}<br>
Formação: {{ $cand->formacao }}<br>
Pretensão: {{ $cand->pretensao}}<br>
Email: {{ $cand->email}}<br>
<form action="{{route('candidato.destroy', $cand->id)}}" method="POST">
    @csrf
    @method('DELETE')
   <button type="submit">deletar</button>
</form>

<a href="{{route('candidato.ReturnLists')}}"> Retornar</a>

