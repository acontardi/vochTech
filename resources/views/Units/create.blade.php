@section('content')
    <div class="container">
        <h2>Criar Nova Unidade</h2>
        <form action="{{ route('units.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome_fantasia">Nome Fantasia:</label>
                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" required>
            </div>
            <div class="form-group">
                <label for="razao_social">Razão Social:</label>
                <input type="text" class="form-control" id="razao_social" name="razao_social" required>
            </div>
            <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection