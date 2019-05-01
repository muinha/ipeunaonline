@extends('site.template')

@section('title', 'Ipeúna Online')

@section('content')

<?php /** Inicio do carrosel **/ ?>

<div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel">

 	<div class="carousel-inner">

	    <div class="carousel-item active">
	      <img class="d-block w-100" src="{{ asset('site/image/image1.jpg') }}" alt="Primeiro Slide">
	    </div>

	    <div class="carousel-item">
	      <img class="d-block w-100" src="{{ asset('site/image/image1.jpg') }}" alt="Segundo Slide">
	    </div>

	    <div class="carousel-item">
	      <img class="d-block w-100" src="{{ asset('site/image/image1.jpg') }}" alt="Terceiro Slide">
	    </div>

	</div>

	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Anterior</span>
	  </a>

	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Próximo</span>
	  </a>

</div>

<?php /** fim do carrosel **/ ?>



<?php /** Inicio ultimas noticias **/ ?>

<section>

 	<div class="ultimas-noticias bg-success mt-3 mb-3">
		
		<h1 class="text-center"><strong>Ultimas Noticias<strong></h1>

	</div>

	 <div class="container mt-3">

	    <div class="lista-noticias">

			<div class="row col-md-12 justify-content-center">
			@foreach($news as $post)	
				<div class="card mt-3 ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" alt="{{ $post->image_principal }}" src="{{ url("storage/news/{$post->image_principal}") }}">
					 <div class="card-body">
					    <h5 class="card-title text-center">{{ $post->title }}</h5>
					    <p class="card-text">{{ $post->subtitle }}</p>
					    <a href="post/{{ $post->id }}" class="btn btn-primary">Visitar</a>
					</div>
				</div>
			@endforeach
			</div>

		</div>

	</div>

</section>

<?php /** Fim das ultimas noticias **/ ?>


<?php /**Inicio area de turismo **/ ?>

<article>
	
 	<div class="ultimas-noticias bg-success mt-3 mb-3">
		
		<h1 class="text-center"><strong>Turismo Ipeúna<strong></h1>

	</div>

	<div class="container">

		<div class="pagina-inicial-turismo mt-3">
			
			<div class="row col-md-12 justify-content-center">
				
				<div class="card ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" src="{{ asset('site/image/teste.jpg') }}" alt="Imagem de capa do card">
					 <div class="card-body">
					    <h5 class="card-title text-center">Título do card</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					    <a href="#" class="btn btn-primary">Visitar</a>
					</div>
				</div>

				<div class="card ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" src="{{ asset('site/image/teste.jpg') }}" alt="Imagem de capa do card">
					 <div class="card-body">
					    <h5 class="card-title text-center">Título do card</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					    <a href="#" class="btn btn-primary">Visitar</a>
					</div>
				</div>

				<div class="card ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" src="{{ asset('site/image/teste.jpg') }}" alt="Imagem de capa do card">
					 <div class="card-body">
					    <h5 class="card-title text-center">Título do card</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					    <a href="#" class="btn btn-primary">Visitar</a>
					</div>
				</div>

				<div class="card ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" src="{{ asset('site/image/teste.jpg') }}" alt="Imagem de capa do card">
					 <div class="card-body">
					    <h5 class="card-title text-center">Título do card</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					    <a href="#" class="btn btn-primary">Visitar</a>
					</div>
				</div>

				<div class="card ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" src="{{ asset('site/image/teste.jpg') }}" alt="Imagem de capa do card">
					 <div class="card-body">
					    <h5 class="card-title text-center">Título do card</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					    <a href="#" class="btn btn-primary">Visitar</a>
					</div>
				</div>

				<div class="card ml-3 mb-3" style="width: 18rem;">
					 <img class="card-img-top" src="{{ asset('site/image/teste.jpg') }}" alt="Imagem de capa do card">
					 <div class="card-body">
					    <h5 class="card-title text-center">Título do card</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					    <a href="#" class="btn btn-primary">Visitar</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</article>

<?php /** fim da area de turismo **/ ?>



@stop