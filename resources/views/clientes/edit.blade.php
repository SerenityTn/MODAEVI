@extends('admin.base')
@section('content')
    <div class="col-sm-4 col-sm-offset-4">
        {!! Form::model($cliente, ['route' => ['admin.cliente.update', $cliente->id], 'method' => 'PUT']) !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', "Nom et prénom") !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
            <div class="form-group{{ $errors->has('number1') ? ' has-error' : '' }}">
                {!! Form::label('number1', "Numéro 1") !!}
                {!! Form::text('number1', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
            <div class="form-group">
                {!! Form::label('number2', "Numéro 2") !!}
                {!! Form::text('number2', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address', "Adresse") !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit("Modifier la cliente", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop
