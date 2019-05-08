@extends ('adminlte::page')

@section ('title', 'Lista de Categorias')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Lista de Categorias</h1>
        <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="admin/news/categories">Categorias</a></li>
        </ol>
    </section>
<!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
  		          <div class="box box-primary">
                    <div class="box-header">
                        <a href="categories/create" class="btn btn-success">Cadastrar Categoria</a>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nome da Categoria</th>
                                    <th style="width: 256px">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $categories)
                                <tr>
                                    <td>{{ $categories->id }}</td>
                                    <td>{{ $categories->category }}</td>
                                    <td>
                                        <a href="/admin/categories/news" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Notícias</a>
                                        <a href="/admin/categories/{{ $categories->id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                                        <a href="/admin/categories/{{ $categories->id }}/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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