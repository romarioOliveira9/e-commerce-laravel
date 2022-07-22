@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="login" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
