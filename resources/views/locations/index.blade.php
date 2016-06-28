@extends('admin.base')
@section('heading')
    <h1 class="page-header">gérer les locations
        <small>vue général sur le boutique</small>
    </h1>
@stop
@section('content')
    <a href="{{ route('admin.location.create')}}" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span> Louer une robe
    </a>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            @include('locations.filters')
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            @include('locations.list')
        </div>
    </div>
@stop
