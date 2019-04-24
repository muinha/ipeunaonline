@extends ('adminlte::page')

@section ('title', 'Criar uma Categoria de Notícias')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Notícias da Categoria {$category.descategory}
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/categories">Categorias</a></li>
    <li><a href="/admin/categories/{$category.idcategory}">{$category.descategory}</a></li>
    <li class="active"><a href="/admin/categories/{$category.idcategory}/products">Notícias</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Todos as Notícias</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome da Notícia</th>
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            {loop="$productsNotRelated"}
                            <tr>
                            <td>{$value.idproduct}</td>
                            <td>{$value.desproduct}</td>
                            <td>
                                <a href="/admin/categories/{$category.idcategory}/products/{$value.idproduct}/add" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-right"></i> Adicionar</a>
                            </td>
                            </tr>
                            {/loop}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title">Notícias na Categoria {$category.descategory}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome do Produto</th>
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            {loop="$productsRelated"}
                            <tr>
                            <td>{$value.idproduct}</td>
                            <td>{$value.desproduct}</td>
                            <td>
                                <a href="/admin/categories/{$category.idcategory}/products/{$value.idproduct}/remove" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-left"></i> Remover</a>
                            </td>
                            </tr>
                            {/loop}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop