<h1>Lista de Estações Meteorológicas</h1>

<a href="{{ route('estacoes.create') }}">Adicionar Nova Estação</a>

@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estacoes as $estacao)
        <tr>
            <td>{{ $estacao->nome }}</td>
            <td>{{ $estacao->latitude }}</td>
            <td>{{ $estacao->longitude }}</td>
            <td>
                <a href="{{ route('estacoes.edit', $estacao->id) }}">Editar</a>
                <form action="{{ route('estacoes.destroy', $estacao->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>