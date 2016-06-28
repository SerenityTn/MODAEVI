@extends('admin.base')
@section('content')
    <div class="col-sm-4 col-sm-offset-4">
        {!! Form::open(['method' => 'POST', 'route' => 'admin.location.store', 'class' => 'form-horizontal', 'files' => 'true']) !!}
            <div class="form-group{{ $errors->has('cliente_id') ? ' has-error' : '' }}">
                {!! Form::label('cliente_id', 'Cliente') !!}
                {!! Form::select('cliente_id', $clientes_list, $cliente_id, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('cliente_id') }}</small>
            </div>
            @include('robes.categories')
            @include('partials.forms.addons')
            <div class="form-group{{ $errors->has('avance') ? ' has-error' : '' }}">
                {!! Form::label('avance', "Avance payée") !!}
                {!! Form::text('avance', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('avance') }}</small>
            </div>
            <div class="form-group{{ $errors->has('reste') ? ' has-error' : '' }}">
                {!! Form::label('reste', "Montant restant") !!}
                {!! Form::text('reste', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('reste') }}</small>
            </div>

            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date_location" required="required"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

             <div class="form-group">
                 {!! Form::label('assurance', "Assurance") !!}
                 {!! Form::text('assurance', null, ['class' => 'form-control']) !!}
             </div>
            <div class="form-group">
                {!! Form::label('notes', "Remarques") !!}
                {!! Form::text('notes', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit("Confirmer la location", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop
@section('scripts')
    @parent
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
        });
    </script>
@stop
