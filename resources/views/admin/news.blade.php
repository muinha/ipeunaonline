@extends ('adminlte::page')

@section ('title', 'Todas as Notícias')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
	<section class="content-header">

	  <h1>Lista de Noticias</h1>

		<ol class="breadcrumb">
		    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active"><a href="admin/news">Notícias</a></li>
		</ol>

	</section>

	<!-- Main content -->
	<section class="content">

	  <div class="row">

	  	<div class="col-md-12">

	  		<div class="box box-primary">
	            
	            <div class="box-header">
	              <a href="admin/news/create" class="btn btn-success">Cadastrar Usuário</a>
	            </div>

	            <div class="box-body no-padding">

	              <table class="table table-striped">
	                <thead>
	                  <tr>
	                    <th style="width: 10px">#</th>
	                    <th>Título</th>
	                  </tr>
	                </thead>
	                <tbody>
										@foreach($news as $newss)
		                <tr>
		                    <td>{{ $newss->id }}</td>
		                    <td>{{ $newss->title }}</td>
		                    <td>
		                      <a href="news/{{ $newss->id }}/update" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
		                      <a href="news/{{ $newss->id }}/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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