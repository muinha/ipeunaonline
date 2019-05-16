@extends ('adminlte::page')

@section ('title', 'Criar um novo usuario')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Criar um novo Usuário</h1>
		@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		  	<ol class="breadcrumb">
		    	<li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    	<li><a href="admin/users">Usuário</a></li>
		    	<li class="active"><a href="admin/users/create">Cadastrar</a></li>
			</ol>
	</section>
<!-- Main content -->
	<section class="content">
	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-success">
			        <div class="box-header with-border">
			          <h3 class="box-title">Novo Usuário</h3>
			        </div>
			        <!-- /.box-header -->
			        <!-- form start -->
			        <form role="form" action="create" method="post">
			        	@csrf
			          	<div class="box-body">
				            <div class="form-group">
					            <label for="desperson">Nome</label>
					            <input type="text" class="form-control" id="desperson" name="name" placeholder="Digite o nome">
				            </div>
				            <div class="form-group">
				                <label for="deslogin">Login</label>
				                <input type="text" class="form-control" id="deslogin" name="login" placeholder="Digite o login">
				            </div>
				            <div class="form-group">
				                <label for="desemail">E-mail</label>
				                <input type="email" class="form-control" id="desemail" name="email" placeholder="Digite o e-mail">
				            </div>
				            <div class="form-group">
				                <label for="despassword">Senha</label>
				                <input type="password" class="form-control" id="despassword" name="password" placeholder="Digite a senha">
				            </div>
							<div class="form-group">
							    <label for="hierarquia">Hierarquia</label>
							    <select class="form-control" name="hierarquia" id="hierarquia">
								@foreach($hierarquia as $hierarquias)
							    	<option>{{ $hierarquias->hierarquia }}</option>
							    @endforeach
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