@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $produto['galeria'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Volte</a>
                <h2>{{ $produto['nome'] }}</h2>
                <h3>Preço : {{ $produto['preco'] }}</h3>
                <h4>Detalhes : {{ $produto['descricao'] }}</h4>
                <h4>Categoria : {{ $produto['categoria'] }}</h4>
                <br><br>
                <form action="/adicionar_ao_carrinho" method="POST">
                    @csrf
                    <input type="hidden" name="produto_id" value="{{ $produto['id'] }}">
                    <button class="btn btn-primary">Adicionar ao carrinho</button>
                </form>
                <br><br>
                <button class="btn btn-success">Compre Agora</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection
