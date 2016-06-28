<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
     @for($i = 1; $i <= 3; $i++)
         <div class="item {{ $i == 1 ? 'active' : '' }}">
           <img src="{{ URL::asset("imgs/slider/robe$i.jpg") }}" width="300" style="display:inline">
           <img src="{{ URL::asset("imgs/slider/robe$i.jpg") }}" width="300" style="display:inline">
           <img src="{{ URL::asset("imgs/slider/robe$i.jpg") }}" width="300" style="display:inline">
         </div>
     @endfor
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>