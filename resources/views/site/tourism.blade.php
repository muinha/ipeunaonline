@extends('site.template')

@section('title', 'Pontos Turisticos')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h1 class="mb-5 mt-2" style="padding: 10px; text-align: center;">Conheça todos os pontos turístico da cidade de Ipeúna</h1>
			<hr>
		</div>
	</div>
	<div class="row mb-4 bg-light border" style="padding: 10px;">
		<div class="col-md-4 col-sm-4">
			<img class="img-thumbnail" src="{{ asset('/site/image/teste.jpg') }}">			
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>O que é Lorem Ipsum?</h3>
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
		</div>
		<button class="mb-5 btn btn-success btn-block btn-lg">Clique pra ver mais informações</button>
		<hr>
	</div>
	<div class="row mb-4 bg-light border" style="padding: 10px;">
		<div class="col-md-4 col-sm-4">
			<img class="img-thumbnail" src="{{ asset('/site/image/teste.jpg') }}">			
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>O que é Lorem Ipsum?</h3>
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
		</div>
		<button class="mb-2 btn btn-success btn-block btn-lg">Clique pra ver mais informações</button>
		<hr>
	</div>
</div>



@endsection