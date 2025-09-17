<h1>Adicionar Nova Estação</h1>

<form action="{{ route('estacoes.store') }}" method="POST">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude">
    </div>
    <div>
        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude">
    </div>
    <button type="submit">Salvar</button>
</form>