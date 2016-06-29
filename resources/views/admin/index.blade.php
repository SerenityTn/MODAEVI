@extends('admin.base')
@section('heading')
    <h1 class="page-header">Accueil
    </h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">Prochaines locations </div>
              <div class="panel-body">
                  @include('locations.days_list')
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">Robes à réparer</div>
              <div class="panel-body">Panel Content</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">Vérifier disponibilité robe</div>
              <div class="panel-body">
                  @include('robes.categories.radio')
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">Panel Heading</div>
              <div class="panel-body">Panel Content</div>
            </div>
        </div>
    </div>
@stop
