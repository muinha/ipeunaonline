@extends ('adminlte::page')

@section ('title', 'Criar um novo Usuário')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  	<h1>Lista de Usuários</h1>
		<ol class="breadcrumb">
		    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active"><a href="/admin/users">Usuários</a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
	  	<div class="row">
	  		<div class="col-md-12">
	  			<div class="box box-primary">
	            	<div class="box-header">
	              		<a href="users/create" class="btn btn-success">Cadastrar Usuário</a>
	            	</div>
	            	<div class="box-body no-padding">
	              		<table class="table table-striped">
	                		<thead>
	                  			<tr>
	                    			<th style="width: 10px">#</th>
	                    			<th>Nome</th>
	                    			<th>E-mail</th>
	                    			<th>Login</th>
	                    			<th style="width: 100px">Admin</th>
	                    			<th style="width: 140px">&nbsp;</th>
	                  			</tr>
	                		</thead>
	                		<tbody>
	                			@foreach($users as $user)
		                		<tr>
		                    		<td>{{ $user->id }}</td>
		                    		<td>{{ $user->name }}</td>
		                    		<td>{{ $user->email }}</td>
		                    		<td>{{ $user->login }}</td>
		                    		<td>{{ $user->hierarquia }}</td>
		                    		<td>
		                      		<a href="users/{{ $user->id }}/update" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
		                      		<a href="users/{{ $user->id }}/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
		                    		</td>
		                		</tr>
	                    		@endforeach
	                		</tbody>
	              		</table>
	            	</div>
	            	<!-- /.box-body -->
	        	</div>
	  		</div>
	  	</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->








@stop