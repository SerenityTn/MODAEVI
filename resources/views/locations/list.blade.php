<table class="table table-hover" id="locationTable">
    <thead>
      <tr>
        <th>Nom Cliente</th>
        <th>Réference robe</th>
        <th>Avance payée</th>
        <th>Montant Restant</th>
        <th>Date de location</th>
        <th>Assurance</th>
        <th>Notes</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        @foreach($locations as $location)
            <tr>
                <td>{{ $location->cliente->name }}</td>
                <td>{{ $location->robe->getCategoryName() }} - {{ $location->robe->ref }}</td>
                <td>{{ $location->avance }}</td>
                <td>{{ $location->reste }}</td>
                <td>{{ $location->date_location }}</td>
                <td>{{ $location->assurance }}</td>
                <td>{{ $location->notes }}</td>
                <td>
                    {{ Form::open(['route' => ['admin.location.destroy', $location->id], 'method' => 'delete', 'class' => 'form-inline']) }}
                    <a href="{{ route('admin.location.edit', $location->id) }}" class="model-control"><span class="glyphicon glyphicon-pencil"></a>
                    <button type="submit" class="model-control"><span class="glyphicon glyphicon-remove"></span></button>
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@section('scripts')
    @parent
    <script type="text/javascript">
        var locationTable;
        var dateColIndex = 4;
        $(document).ready(function(){
            locationTable = $('#locationTable').DataTable({
                "columnDefs": [
                    { "searchable": false, "targets": $('th').length-1 }
                ]
            });
        });

        $.fn.dataTable.ext.search.push(function( settings, data, dataIndex ) {
            var begin_date = new Date( $('#begin_date').val());
            var end_date = new Date($('#end_date').val());
            var date = Date.parse( data[dateColIndex] )|| 0; // use data for the age column
            var isValidBegin = Date.parse($('#begin_date').val());
            var isValidEnd = Date.parse($('#end_date').val());

            if  (isNaN(isValidBegin) && isNaN(isValidEnd) ||
                (isNaN(isValidBegin) && date <= end_date) ||
                (begin_date <= date && isNaN(isValidEnd)) ||
                (begin_date <= date && date <= end_date)){
                    return true;
            }
            return false;
        });

        $('#begin_picker, #end_picker').on('dp.change', function(ev){
            locationTable.draw();
        });

    </script>
@stop
