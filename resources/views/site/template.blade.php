<!doctype html>
<html lang="utf-8">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="site/css/style.css">
        <link href="site/css/app.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="site/css/bootstrap-social.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

<body style="background:  #90ee90;">

    <!-- Inicio menu de naveção 13/03/2019 -->

    <header>

        <div class="menu-topo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand navbar-light ml-1">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active mr-2">
                                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Minha Conta</a>
                                </li>
                                <li class="nav-item mr-2">
                                    <a class="nav-link" href="/cadastro"><i class="fa fa-user-plus"></i> cadatrar</a>
                                </li>
                                <li class="nav-item mr-2">
                                    <a class="nav-link" href="/login"><i class="fa fa-lock"></i> Login</a>
                                </li>
                           </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> <!-- End header area -->
            
        <div class="menu-topo">

            <nav class="navbar navbar-expand-lg navbar-light ml-1">

                <a class="navbar-brand h1" href="/">IPEÚNA online</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse ml-5" id="conteudoNavbarSuportado">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link mr-3" href="/">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mr-3" href="#">Sobre o site</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mr-3" href="news">Notícias</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mr-3" href="tourism">Turismo</a>
                        </li>

                    </ul>

                    <form class="form-inline my-2 my-lg-0">

                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">

                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>

                    </form>

                </div>

            </nav>

        </div>

    </header>

            <!-- Fim do menu de naveção -->
    <section>
            @yield('content')
    </section>
            <!-- Inicio do Rodapé -->

    <rodape>

        <div class="bg-dark text-light">

            <div class="container">

                <div class="row text-center">
            
                    <div class="col-md-4 col-sm-12 mt-5">

                        <h5>Rede Sociais</h5>
                        
                        <a class="btn btn-social-icon btn-facebook">
                            <span class="fa fa-facebook"></span>
                        </a>

                        <a class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-twitter"></span>
                        </a>

                        <a class="btn btn-social-icon btn-google">
                            <span class="fa fa-google"></span>
                        </a>

                        <hr>            

                    </div>

                    <div class="col-md-4 col-sm-12 mt-5">

                        <p>&reg; copyright 2019 By <a class="nav-link text-info" href="">Samuel Sanches</a> </p>        
                        <hr>    

                    </div>

                    <div class="col-md-4 col-sm-12 mt-3 mb-3">
                            
                            <ul class="list-group">
                                    
                                <a class="text-info" href=""><li class="list-group-item bg-secondary">Categoria 1</li></a>
                                <a class="text-info" href=""><li class="list-group-item bg-secondary">Categoria 2</li></a>
                                <a class="text-info" href=""><li class="list-group-item bg-secondary">Categoria 3</li></a>
                                <a class="text-info" href=""><li class="list-group-item bg-secondary">Categoria 4</li></a>
                                <a class="text-info" href=""><li class="list-group-item bg-secondary">Categoria 5</li></a>

                            </ul>           

                    </div>

                </div>

            </div>

        </div>

    </rodape>

        <!-- Fim do rodapé -->        


        <!-- Javascript -->
        <script href="site/js/app.js"></script>
        <script href="site/js/bootstrap.js"></script>
        <script href="site/js/bootstrap.min.js"></script>
        <script href="site/js/bootstrap.bundle.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</html>
