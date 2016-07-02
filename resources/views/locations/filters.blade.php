<div class="col-md-4 form-group">
        <input type="text" class="form-control" id="name"  placeholder="Nom et/ou Prénom"/>
</div>
<div class="col-md-3 form-group">
    <div class='input-group' id="begin_picker">
        <input type='text' id='begin_date' class="form-control" name="date_location" placeholder="Date de location initiale"/>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    <div class='input-group' id="end_picker">
        <input type='text' id='end_date' class="form-control" name="date_location" placeholder="Date de location finale"/>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>

<div class="col-md-4 form-group">
    @include('robes.categories.checkbox')
</div>

@section('scripts')
    @parent
    <script type="text/javascript">
        $("#begin_picker").datetimepicker({
            format: "YYYY-MM-DD HH:mm"
        });
        $("#end_picker").datetimepicker({
            format: "YYYY-MM-DD HH:mm"
        });

        $("#begin_picker").on("dp.change", function (e) {
            $('#end_picker').data("DateTimePicker").minDate(e.date);
        });

        $("#end_picker").on("dp.change", function (e) {
            $('#begin_picker').data("DateTimePicker").maxDate(e.date);
        });
    </script>
@stop
