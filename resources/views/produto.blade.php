@extends('master')
@section('content')
    <div class="custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($produtos as $item)
                    <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detalhe/{{ $item['id'] }}">
                            <img class="slider-img" src="{{ $item['galeria'] }}">
                            <div class="carousel-caption slider-text">
                                <h3>{{ $item['nome'] }}</h3>
                                <p>{{ $item['descricao'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Próxima</span>
            </a>
        </div>
        <div class="trending-wrapper">
            <h3>Produtos em alta</h3>
            @foreach ($produtos as $item)
                <div class="trending-item">
                    <a href="detalhe/{{ $item['id'] }}">
                        <img class="trending-image" src="{{ $item['galeria'] }}">
                        <div class="">
                            <h3>{{ $item['nome'] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
