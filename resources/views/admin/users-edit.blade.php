@extends ('adminlte::page')

@section ('title', 'Criar um novo usuario')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">

	<h1>Editar Usuário</h1>

	  <ol class="breadcrumb">

	    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="/admin/users">Usuários</a></li>
	    <li class="active"><a href="/admin/users/create">Cadastrar</a></li>

	</ol>

</section>

<!-- Main content -->
<section class="content">

  	<div class="row">

	  	<div class="col-md-12">

	  		<div class="box box-success">

		        <div class="box-header with-border">
		          <h3 class="box-title">Editar Usuário</h3>
		        </div>
		        <!-- /.box-header -->
		        <!-- form start -->
		        <form role="form" action="/admin/user/update" method="post">

		        	@csrf

		          	<div class="box-body">

			            <div class="form-group">
				            <label for="desperson">Nome</label>
				            <input type="text" value="{{ $user->name }}" class="form-control" id="desperson" name="name" placeholder="Digite o nome">
			            </div>

			            <div class="form-group">
			                <label for="deslogin">Login</label>
			                <input type="text" value="{{ $user->login }}" class="form-control" id="deslogin" name="login" placeholder="Digite o login">
			            </div>

			            <div class="form-group">
			                <label for="desemail">E-mail</label>
			                <input type="email" value="{{ $user->email }}" class="form-control" id="desemail" name="email" placeholder="Digite o e-mail">
			            </div>

			            <div class="form-group">
			                <label for="despassword">Senha</label>
			                <input type="password" value="{{ $user->password }}" class="form-control" id="despassword" name="password" placeholder="Digite a senha">
			            </div>

						<div class="form-group">
						    <label for="hierarquia">Hierarquia</label>
						    <select class="form-control" value="{{ $user->hierarquia }}" name="hierarquia" id="hierarquia">
						    	<option>CEO</option>
						    	<option>Admin Jornal Blog</option>
						    	<option>Admin Turismo Blog</option>
						    	<option>Member</option>
						    </select>
						</div>

		          </div>
		          <!-- /.box-body -->
		          <div class="box-footer">
		            <button type="submit" class="btn btn-success">Cadastrar</button>
		          </div>
		        </form>

	      </div>

  		</div>

  	</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->







@stop