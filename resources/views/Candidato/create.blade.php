<h1>Cadastrar candidato</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('candidato.insert')}}" method="POST">
@csrf
    <input type="text" name='nome' placeholder="Nome da candidato" value="{{old('nome')}}"><br>
    <input type="text" name='formacao' placeholder="Formação" value="{{old('formacao')}}"><br>
    <input type="text" name='pretensao' placeholder="pretensao" value="{{old('pretensao')}}"><br>
    <input type="email" name='email' placeholder="E-mail" value="{{old('email')}}"><br>
    <button type="submit">Enviar</button>
</form>

<a href="{{route('candidato.ReturnLists')}}"><h1> Ver lista de candidatos</h1></a>







