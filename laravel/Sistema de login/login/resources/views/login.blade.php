@extends('layouts.master_page')

@section('title', 'Login de Usuário')

@section('content')

<h1 class="text-center mt-3 mb-3">Login</h1>
<hr>

@if (isset($errors) && count($errors) > 0)
    <div class="text-center mt-3 mb-3 p-3 alert-danger">
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    </div>    
@endif

@if (session('erro_db'))
    <div class="alert alert-danger">
        <p> {{session('erro_db')}} </p>
    </div>
@endif

@if (session('mensagem'))
    <div class="alert alert-success">
        <p> {{session('mensagem')}} </p>
    </div>
@endif

<hr>
<div class="col-4 m-auto">
    <form name="form_login" id="form_login" method="post" action="{{url('login/efetuaLogin')}}">
        @csrf
        <div class="form-group">
            <label for="">Usuário:</label>
            <input class="form-control" type="email" name="email" 
                id="email" placeholder="Informe o seu E-mail">
        </div>
        <div class="form-group">
            <label for="">Senha:</label>
            <input class="form-control" type="password" name="senha" 
                id="senha" placeholder="Infome sua senha">
        </div>
        <div class="text-center">
            <input class='btn btn-primary' type="submit" value='Logar'>
        </div>
        <div class="text-center m-4">
            <a href="{{url('login/recuperaSenha')}}">Esqueceu a senha?</a>
        </div>
        <div class="text-center">
            <a href="{{url('login/create')}}">Criar nova conta</a>
        </div>
    </form>
</div>

@stop