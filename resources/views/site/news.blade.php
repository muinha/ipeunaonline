@extends('site.template')

@section('title', 'Noticias')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h1 class="mb-5 mt-2" style="padding: 10px; text-align: center;">Todas as noticias</h1>
			<hr>
		</div>
	</div>
	@foreach($post as $posts)
		<div class="row mb-4 bg-light border" style="padding: 10px;">
			<div class="col-md-4 col-sm-4">
				<img class="img-thumbnail" src="{{ url("storage/news/{$posts->image_principal}") }}">			
			</div>
			<div class="col-md-8 col-sm-8">
				<h3>{{ $posts->title}}</h3>
				<h5>{{ $posts->subtitle}}</h5>
			</div>
			<strong class="ml-3">Author:</strong><span>Samuel</span> <strong class="ml-3">Data:</strong><span>{{$posts->created_at}}</span>
			<a href="post/{{$posts->id}}" class="mt-2 btn btn-success btn-block btn-lg">Clique pra ver mais informações</a>
			<hr>
		</div>
	@endforeach
</div>



@endsection