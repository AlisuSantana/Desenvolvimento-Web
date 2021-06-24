@extends('layouts.master_page')

@section('title', 'Cadastro')

@section('content')

<h1 class="text-center mt-3 mb-3">Criar usuário</h1>
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

<hr>
<div class="col-4 m-auto">
    <form name="form_createUsuario" id="form_createUsuario" method="post" action="{{url('login')}}">
        @csrf

        <div class="form-group">
            <label for="">Nome de Usuário:</label>
            <input class="form-control" type="text" name="usuario" 
                id="usuario" placeholder="Nome">
        </div>

        <div class="form-group">
            <label for="">E-mail de Usuário:</label>
            <input class="form-control" type="email" name="email" 
                id="email" placeholder="E-mail">
        </div>

        <div class="form-group">
            <label for="">Senha de usuário:</label>
            <input class="form-control" type="password" name="senha" 
                id="senha" placeholder="Senha">
        </div>

        <div class="form-group">
            <label for="">Confirme senha de usuário:</label>
            <input class="form-control" type="password" name="confirmaSenha" 
                id="confirmaSenha" placeholder="Confimação de senha">
        </div> 
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="termos" id="termos" value="1">
            <label class="form-check-label" for="">Li e concordo com os termos condições</label>
        </div>

        <div class="text-center mt-3 mb-3">
            <input class='btn btn-primary' type="submit" value='Criar nova conta'>
        </div>
        <div>
            <a href="{{url('login')}}">Voltar</a>
        </div>
    </form>
</div>

@stop
