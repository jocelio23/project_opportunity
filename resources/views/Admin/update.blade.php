<h1>Atualização</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('vaga.change', $vag->id)}}" method="POST">
@csrf
@method('PUT')
    <input type="text" name='nome' placeholder="Nome da vaga" value="{{$vag->nome}}"><br>
    <input type="text" name='descricao' placeholder="Descrição da vaga" value="{{$vag->descricao}}"><br>
    <input type="text" name='salario' placeholder="salario" value="{{$vag->salario}}"><br>
    <input type="text" name='tipo' placeholder="tipo" value="{{$vag->tipo}}"><br>
    <button type="submit">Salvar mudanças</button>
</form>

<a href="{{route('vaga.ReturnLists')}}"><h1> Ver lista de oportunidades</h1></a>
