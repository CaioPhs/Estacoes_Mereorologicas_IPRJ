<h1>Editar Estação</h1>

<form action="{{ route('estacoes.update', $estacao->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $estacao->nome }}">
    </div>
    <div>
        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude" value="{{ $estacao->latitude }}">
    </div>
    <div>
        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude" value="{{ $estacao->longitude }}">
    </div>
    <button type="submit">Atualizar</button>
</form>