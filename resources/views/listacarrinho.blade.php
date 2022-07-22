@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Resultado para Produtos</h4>
                <a class="btn btn-success" href="ordernow">Peça agora</a><br><br>
                @foreach ($produtos as $item)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->galeria }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>{{ $item->nome }}</h2>
                                <h5>{{ $item->descricao }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->carrinho_id }}" class="btn btn-warning">Remover para o carrinho</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Peça agora</a><br><br>
        </div>
    </div>
@endsection
