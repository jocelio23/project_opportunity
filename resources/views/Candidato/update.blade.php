<h1>Atualização</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('candidato.change', $cand->id)}}" method="POST">
@csrf
@method('PUT')
<input type="text" name='nome' placeholder="Nome da candidato" value="{{$cand->nome}}"><br>
<input type="text" name='formacao' placeholder="Formação" value="{{$cand->formacao}}"><br>
<input type="text" name='pretensao' placeholder="pretensao" value="{{$cand->pretensao}}"><br>
<input type="email" name='email' placeholder="E-mail" value="{{$cand->email}}"><br>
    <button type="submit">Salvar mudanças</button>
</form>

<a href="{{route('candidato.ReturnLists')}}"><h1> Ver lista de candidatos</h1></a>
