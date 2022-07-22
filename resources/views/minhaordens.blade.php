@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>minhas orders</h4>
                @foreach ($orders as $item)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detalhe/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->galeria }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>Nome : {{ $item->nome }}</h2>
                                <h5>Status de entrega : {{ $item->status }}</h5>
                                <h5>Endereço : {{ $item->endereco }}</h5>
                                <h5>Status de Pagamento : {{ $item->status_pagamento }}</h5>
                                <h5>Metodo de Pagamento : {{ $item->metodo_pagamento }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
