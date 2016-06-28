@extends('admin.base')
@section('heading')
    <h1 class="page-header">gérer les clientes
        <small>vue général sur le boutique</small>
    </h1>
@stop
@section('content')
    <a href="{{ route('admin.cliente.create')}}" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span> Ajouter une cliente
    </a>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            @include('clientes.filters')
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            @include('clientes.list')
        </div>
    </div>
@stop
