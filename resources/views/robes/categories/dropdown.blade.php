<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'Catégorie') !!}
    {!! Form::select('category', $categories,  isset($robe) ? $robe->category:null , ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Choix']) !!}
    <small class="text-danger">{{ $errors->first('category') }}</small>
</div>
