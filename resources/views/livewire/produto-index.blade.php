<div class="mt-5">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Cor</th>
                <th>Textura</th>
                <th>Peso</th>
                <th>Data de validade</th>
                <th>Aplicação</th>                
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->categoria }}</td>
                <td>{{ $p->cor }}</td>
                <td>{{ $p->textura }}</td>
                <td>{{ $p->peso }}</td>
                <td>{{ $p->data_validade }}</td>
                <td>{{ $p->aplicacao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
