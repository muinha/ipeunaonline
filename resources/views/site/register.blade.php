@extends('site.template')

@section('title', 'Pagina de registro');

@section('content')

<div class="container mt-3">
	<h2 class="mb-3 text-center"><strong>Formulario de cadastro</strong></h2>
	<form class="border" style="padding: 10px;" action="register" method="post">
		<div class="form-group">
			<label for="inputName">Nome</label>
			<input class="form-control" type="text" name="name" id="inputName" placeholder="Digite seu nome">
		</div>
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input class="form-control" type="email" name="email" id="inputEmail" placeholder="Digite seu email">
		</div>
		<div class="form-group">
			<label for="inputLogin">Login</label>
			<input class="form-control" type="text" name="login" id="inputLogin" placeholder="Digite seu login">
		</div>
		<div class="form-group">
			<label for="inputPassword">Password</label>
			<input class="form-control" type="password" name="password" id="inputPassword" placeholder="Digite seu password">
		</div>
		<div class="form-group">
			<button class="btn btn-primary">Cadastrar</button>
		</div>
	</form>
</div>



@endsection