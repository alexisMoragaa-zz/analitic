@extends('app')

@section('content')
<!--Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
	 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 </ol>
 <div class="carousel-inner" role="listbox">
	 <div class="carousel-item active">
		 <img class="d-block img-fluid" src="http://placeimg.com/1420/538/tech/1" alt="First slide">
		 <div class="carousel-caption d-none d-md-block">
				 <h3>Imagen numero Uno</h3>
				 <p>Un apuesto ojo en blanco y negro que te cautibara</p>
			 </div>
	 </div>
	 <div class="carousel-item">
		 <img class="d-block img-fluid" src="http://placeimg.com/1420/538/tech/3" alt="Second slide">
		 <div class="carousel-caption d-none d-md-block">
			 <h3>Imagen numero Dos</h3>
			 <p>Una hermosos hojos azules que te robaran el aliento</p>
			 </div>
	 </div>
	 <div class="carousel-item">
		 <img class="d-block img-fluid" src="http://placeimg.com/1420/538/tech/4" alt="Third slide">
		 <div class="carousel-caption d-none d-md-block">
				 <h3>Imagen numero Tres</h3>
				 <p>El rostro de un hombre que ha visto lo peor del mundo</p>
			 </div>
	 </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	 <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	 <span class="carousel-control-next-icon" aria-hidden="true"></span>
	 <span class="sr-only">Next</span>
 </a>
</div>
<!--/Carousel-->
@endsection
