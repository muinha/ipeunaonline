@extends ('adminlte::page')

@section ('title', 'Criar uma nova Notícia')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">

	<h1>Criar uma nova Notícia</h1>

	  <ol class="breadcrumb">

	    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="/admin/news">Notícias</a></li>
	    <li class="active"><a href="/admin/news/create">Cadastrar</a></li>

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
		          <h3 class="box-title">Nova Notícia</h3>
		        </div>
		        <!-- /.box-header -->
		        <!-- form start -->
		        <form role="form" action="create" method="post" enctype="multipart/form-data">

		        	@csrf

		          	<div class="box-body">

			            <div class="form-group">
			              	<label for="image_principal">Foto</label>
			              	<input type="file" class="form-control" id="image_principal" name="image_principal" value="{$product.vlweight}">
			            </div>


			            <div class="form-group">
				            <label for="title">Title</label>
				            <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título">
			            </div>

			            <div class="form-group">
			                <label for="subtitle">Subtitle</label>
			                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Digite o Subtitle">
			            </div>

						<div class="form-group">
						    <label for="category">categorias</label>
						    <select class="form-control" name="category" id="category">
								@foreach($categories as $category)
						    	<option>{{ $category->category }}</option>
								@endforeach
						    </select>
						</div>

						<div class="form-group">
						  <label for="post_1">Paragrafo 1 da noticia:</label>
						  <textarea class="form-control" name="post_1" rows="5" id="post_1"></textarea>
						</div>

						<div class="form-group">
						  <label for="post_2">Paragrafo 2 da noticia:</label>
						  <textarea class="form-control" name="post_2" rows="5" id="post_2"></textarea>
						</div>

						<div class="form-group">
						  <label for="post_3">Paragrafo 3 da noticia:</label>
						  <textarea class="form-control" name="post_3" rows="5" id="post_3"></textarea>
						</div>

						<div class="form-group">
						  <label for="post_4">Paragrafo 4 da noticia:</label>
						  <textarea class="form-control" name="post_4" rows="5" id="post_4"></textarea>
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