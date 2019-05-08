@extends('site.template')

@section('title', 'Login')

@section('content')

<div class="container mt-3 mb-3">
	<form class="border" style="width: 350px; margin: 0px auto; padding: 10px">
		<h2 class="text-center">Faça o login</h2>
		<div class="form-group">
			<label for="inputLogin">Login</label>
			<input class="form-control" type="text" name="login" id="inputLogin" placeholder="Digite seu login">
		</div>
		<div class="form-group">
			<label for="inputPassword">Senha</label>
			<input class="form-control" type="password" name="password" id="inputPassword" placeholder="Digite sua senha">
		</div>
		<div class="form-group">
			<button class="btn btn-success btn-block">Entrar</button>
			<button class="btn btn-facebook btn-block">Entra com Facebook</button>
			<button class="btn btn-google btn-block">Entra com Google+</button>
		</div>
		<div class="text-center form-group">
			<a href="">Esqueceu a senha?</a>
			<a href="/cadastro">Não é cadastrado?</a>
		</div>

	</form>
</div>




@endsection