<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>ASMA MODAEVI</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">
    </head>
    <body>
        @yield('menu')

      <!-- Page Content -->
      <div class="container">
          @yield('slider')
            <div class="row">
                <div class="col-lg-12">
                    @yield('heading')
                </div>
            </div>

            @yield('content')

            <hr>
            @include('partials/footer')
        </div>
      <script src="{{ URL::asset('js/all.js') }}"></script>      
      @yield('scripts')
</html>
