@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Quantia</td>
                        <td>$ {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Taxa</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Entrega</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Quantia Total</td>
                        <td>$ {{ $total + 10 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/ordemposicao" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="endereco" placeholder="digite seu endereço" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Forma de pagamento</label><br><br>
                        <input type="radio" value="cash" name="pagamento"> <span>pagamento online</span><br><br>
                        <input type="radio" value="cash" name="pagamento"> <span>pagamento IMI</span><br><br>
                        <input type="radio" value="cash" name="pagamento"> <span>Pagamento na Entrega</span><br><br>
                    </div>
                    <button type="submit" class="btn btn-default">Peça já</button>
                </form>
            </div>
        </div>
    </div>
@endsection
