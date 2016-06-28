<table class="table table-hover">
    <thead>
      <tr>
        <th>Nom et prénom</th>
        <th>Numéro 1</th>
        <th>Numéro 2</th>
        <th>Adresse</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->name }}</td>
                <td>{{ $cliente->number1 }}</td>
                <td>{{ $cliente->number2 }}</td>
                <td>{{ $cliente->address }}</td>
                <td class="control-col">
                    {{ Form::open(['route' => ['admin.cliente.destroy', $cliente->id], 'method' => 'delete', 'class' => 'form-inline']) }}
                    <a href="{{ route('admin.cliente.edit', $cliente->id) }}" class="model-control"><span class="glyphicon glyphicon-pencil"></span></a>
                    <button type="submit" class="model-control"><span class="glyphicon glyphicon-remove"></span></button>
                    <a href="{{ route('admin.location.cliente.create', $cliente->id) }}" class="btn btn-success">Louer une robe</a>
                    {{ Form::close() }}
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-sm-12">
        {{ $clientes->links() }}
    </div>
</div>
