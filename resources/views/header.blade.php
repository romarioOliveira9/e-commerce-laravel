<?php

use App\Http\Controllers\ProdutoController;

$total = 0;
if (Session::has('usuario')) {
    $total = ProdutoController::carritnhoItem();
}

?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Alternar de navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">E-Commerce</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class=""><a href="/minhaordens">Ordens</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/listacarrinho">carrinho({{ $total }})</a></li>
                @if (Session::has('usuario'))
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                            href="#">{{ Session::get('usuario')['nome'] }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/registrar">Registrar</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
