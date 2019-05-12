@extends ('adminlte::page')

@section ('title', 'Todos os locais de turismo')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>Todos os locais de turismo</h1>
		<ol class="breadcrumb">
		    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active"><a href="admin/tourism">turismo</a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
	  	<div class="row">
	  		<div class="col-md-12">
	  			<div class="box box-primary">
	            	<div class="box-header">
	              		<a href="tourism/create" class="btn btn-success">Cadastrar nova área de turismo</a>
	            	</div>
	            	<div class="box-body no-padding">
	              		<table class="table table-striped">
	                		<thead>
	                  			<tr>
	                    			<th style="width: 10px">#</th>
	                    			<th>Nome</th>
	                  			</tr>
	                		</thead>
	                		<tbody>
								@foreach($tourisms as $tourism)
			                	<tr>
			                    	<td>{{ $tourism->id }}</td>
			                    	<td>{{ $tourism->name }}</td>
			                    	<td>
			                      		<a href="tourism/{{ $tourism->id }}/update" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
			                      		<a href="tourism/{{ $tourism->id }}/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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