@extends('site.template')

@section('title', 'Notícia')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 mx-auto">
        @foreach($post as $posts)
            <h1 class="mt-3 text-center"><strong>{{$posts->title}}</strong></h1>
            <hr>

            <h3 class="mt-3 text-center">{{$posts->subtitle}}</h3>
            <hr>

            <img class="mt-2 img-fluid" alt="{{ $posts->image_principal }}" src="{{ url("storage/news/{$posts->image_principal}") }}">
            <hr>

            <p>{{ $posts->post_1 }}</p>

            <p>{{ $posts->post_2 }}</p>

            <p>{{ $posts->post_3 }}</p>

            <p>{{ $posts->post_4 }}</p>
        @endforeach    
        </div>
    </div>
</div>



@endsection

