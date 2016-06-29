@extends('admin.base')
@section('content')
    <?php
        $color_selected = 'Blanc';
        $category_selected = '0';
    ?>
    <div class="col-sm-4 col-sm-offset-3">
        {!! Form::open(['method' => 'POST', 'route' => 'admin.robe.store', 'class' => 'form-horizontal', 'files' => 'true']) !!}
            <div class="form-group{{ $errors->has('ref') ? ' has-error' : '' }}">
                {!! Form::label('ref', 'Référence') !!}
                {!! Form::text('ref', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('Numéro') }}</small>
            </div>
            @include('robes.categories.dropdown')
            <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                {!! Form::label('color', 'Couleur') !!}
                {!! Form::select('color', $color_options, $color_selected, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('color') }}</small>
            </div>
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                {!! Form::label('price', 'Prix') !!}
                {!! Form::text('price', '150', ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('price') }}</small>
            </div>
            <div class="form-group{{ $errors->has('min_price') ? ' has-error' : '' }}">
                {!! Form::label('min_price', 'Prix minimum') !!}
                {!! Form::text('min_price', '100', ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('min_price') }}</small>
            </div>
            <div class="form-group{{ $errors->has('robe_img') ? ' has-error' : '' }}">
                {!! Form::label('robe_img', 'Sélectionner une image') !!}
                <input type='file' name="robe_img" onchange="readURL(this);" />
                <small class="text-danger">{{ $errors->first('robe_img') }}</small>
            </div>
            <div class="form-group">
                {!! Form::submit("Ajouter la robe", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
    @include('robes/robe_preview')
@stop
