@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="registrar" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome usuario</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
