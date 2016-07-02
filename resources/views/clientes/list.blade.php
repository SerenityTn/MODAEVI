<table class="table table-hover" id="clientesTable">
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
                    @include('control', ['model' => $cliente])
                    <a href="{{ route('admin.location.cliente.create', $cliente->id) }}" class="btn btn-success">Louer une robe</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@section('scripts')
    @parent
    <script type="text/javascript">
        var locationTable;
        $(document).ready(function(){
            locationTable = $('#clientesTable').DataTable({
                "columnDefs": [
                    { "searchable": false, "targets": $('th').length-1 }
                ]
            });
        });
    </script>
@stop
