@extends('site.template')

@section('title', 'Noticias')

@section('content')

<div class="container">
	<div class="row">
		@foreach($post as $posts)
			<div class="text-center mt-3 col-md-12 col-sm-12">
					<h1>{{ $posts->title }}</h1>
					<h3>{{ $posts->subtitle }}</h3>
					<hr>
			</div>
		@endforeach
	</div>
</div>



@endsection