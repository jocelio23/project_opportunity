<h1>Listagem de vagas</h1>

{{-- <a href="{{ route('vaga.createList') }}">
    <h1> Cadastar nova oportunidade</h1>
</a>
 --}}

<table>
    <thead>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Salário</th>
        <th>Tipo</th>
    </thead>
    <tbody>
        @foreach ($vagas as $vaga)
            <tr>
                <td>{{ $vaga->nome }}</td>
                <td>{{ $vaga->Descricao }}</td>
                <td>{{ $vaga->salario }}</td>
                <td>{{ $vaga->tipo }}</td>
                <td>
                    <a href="{{route('vaga.show', $vaga->id)}}"> Me candidatar</a> &nbsp &nbsp &nbsp
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
