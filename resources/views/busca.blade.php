@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-4">
            <a href="#"></a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Resultado para produtos</h4>
                @foreach ($produto as $item)
                    <div class="searched-item">
                        <a href="detalhe/{{ $item['id'] }}"></a>
                        <img class="trending-image" src="{{ $item['galeria'] }}">
                        <div class="">
                            <h2>{{ $item['nome'] }}</h2>
                            <h5>{{ $item['descricao'] }}</h5>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
