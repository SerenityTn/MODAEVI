@extends('admin.base')
@section('heading')
    <h1 class="page-header">gérer les robes
        <small>vue général sur le boutique</small>
    </h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.robe.create')}}" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus"></span> Ajouter une robe
            </a>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            @include('robes.filters')
        </div>
    </div>
    <hr/>
    <div class="row" id="list">
        <div class="col-md-12">
            @include('robes.list')
        </div>
    </div>
@stop
