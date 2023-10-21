<h1>Listagem de candidatos</h1> <h5><a href="/"> Painel</a></h5>

<a href="{{ route('candidato.createList') }}">
    <h1> Cadastar novo candidato</h1>
</a>


<table>
    <thead>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Salário</th>
        <th>Tipo</th>
    </thead>
    <tbody>
        @foreach ($candidato as $candidato)
            <tr>
                <td>{{ $candidato->nome }}</td>
                <td>{{ $candidato->formacao }}</td>
                <td>{{ $candidato->pretensao }}</td>
                <td>{{ $candidato->email }}</td>
                <td>
                    <a href="{{route('candidato.show', $candidato->id)}}"> Ver candidato</a> &nbsp &nbsp &nbsp
                    <a href="{{route('candidato.edit', $candidato->id)}}"> atualizar</a>&nbsp &nbsp &nbsp
                    
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>







