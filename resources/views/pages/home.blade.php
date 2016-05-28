@extends('app')

@section('content')
<section id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    	<ol class="carousel-indicators">
     		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      		<li data-target="#myCarousel" data-slide-to="1"></li>
      		<li data-target="#myCarousel" data-slide-to="2"></li>
    	</ol>

    <!-- Wrapper for slides -->
    	<div class="carousel-inner" role="listbox">
      		<div class="item active">
        		<div class="carousel-caption">
          			<h3>Cool News!</h3>
          			<p>Be the first who find out!</p>
        		</div>      
      		</div>

      		<div class="item">
        		<div class="carousel-caption">
          			<h3>Learn fast</h3>
          			<p>Grow your talent</p>
        		</div>      
      		</div>
    
     		<div class="item">
        		<div class="carousel-caption">
          			<h3>And don't forget</h3>
          			<p>Join us!</p>
        		</div>      
      		</div>
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
	</section> 
<!--carousel-->

<section>	
<!-- body section-->

<!--grid container-->
<section class="grid-container"> 
  
  <section class="content">
  @foreach ($videos as $video)
	<div class="cart-item">
      <div class="cart-header">
        <a href="/video/{{ $video['id'] }}"<p class="text-center">{{ $video['name'] }}</p></a>
      </div>
      <div class="cart-body">  
        <div class="cart-picture">
          {!! $video['embed'] !!}
        </div>
      </div>
      <div class="cart-footer">
        <div class="option">
          <button class="animated-like"><span data-id="{{ $video['id'] }}">Like</span></button>
        </div>
    </div>
  </div>
  @endforeach
  <div class="clearfloat"></div>
  </section>
  
  <footer id="grid-footer">
  </footer>

</section>
<!--grid container-->


@endsection