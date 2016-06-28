@extends('base')
@section('menu')
    @include('partials/menu')
@stop
@section('slider')
    @include('partials/slider')
@stop
@section('content')

  <hr>
  <!-- Pagination -->
  <div class="row text-center">
      <div class="col-lg-12">
          <ul class="pagination">
              <li>
                  <a href="#">&laquo;</a>
              </li>
              <li class="active">
                  <a href="#">1</a>
              </li>
              <li>
                  <a href="#">&raquo;</a>
              </li>
          </ul>
      </div>
  </div>
  <!-- /.row -->
@stop
