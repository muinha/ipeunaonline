@extends ('adminlte::page')

@section ('title', 'Atualizar local turismo')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Atualizar locarl de turismo</h1>
		  <ol class="breadcrumb">
		    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li><a href="admin/tourism">Turismo</a></li>
		    <li class="active"><a href="admin/tourism/update">Update</a></li>
		</ol>
	</section>
<!-- Main content -->
	<section class="content">
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-success">
			        <div class="box-header with-border">
			          <h3 class="box-title">Atualizar local de turismo</h3>
			        </div>
			        <!-- /.box-header -->
			        <!-- form start -->
			        <form role="form" action="update" method="post" enctype="multipart/form-data">
			        	@csrf
			          	<div class="box-body">
				            <div class="form-group">
				              	<label for="image_principal">Foto</label>
				              	<input type="file" class="form-control" id="image_principal" name="image_principal">
				            </div>
				            <div class="form-group">
					            <label for="name">Name:</label>
					            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o título">
				            </div>
				            <div class="form-group">
				            	<label for="description"></label>
				            	<textarea class="form-control" name="description" id="description" rows="15"></textarea>
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