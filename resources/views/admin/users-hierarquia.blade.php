@extends ('adminlte::page')

@section ('title', 'Criar uma hierarquia do usúario')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Criar uma hierarquia do usúario
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><a href="admin/users/hierarquia/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova Hierarquia</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="" method="post">

          @csrf

          <div class="box-body">
            <div class="form-group">
              <label for="hierarquia">Nome da hierarquia</label>
              <input type="text" class="form-control" id="hierarquia" name="hierarquia" placeholder="Digite o nome da categoria">
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