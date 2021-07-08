    @extends('layouts.master_page')

@section('title', 'recupera senha')

@section('content')

<h2 class='text-center mt-4 mb-3 text-white text-uppercase font-weight-bold '>Recuperação de senha</h2>
<hr>

@if (isset($errors) && count($errors) > 0)
    <div class="text-center mt-3 mb-3 p-3 alert-danger text-white">
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    </div>    
@endif

@if (session('erro_db'))
    <div class="text-center mt-2 mb-2 alert-danger text-white">
        <p> {{session('erro_db')}} </p>
    </div>
@endif

<div class="col-4 mt-5 mx-auto bg-light p-3 rounded shadow-lg ">
    <form  name="form_recuperaSenha" id="form_recuperaSenha"  method="post" action="{{url('login/recuperaSenha')}}">
        @csrf
        <div class="form-group">
            <label for="">E-mail</label>
            <input class="form-control" type="email" name="email" 
                id="email" placeholder="Infome seu E-mail">
        </div>
        <div class="text-center mt-3">
            <input class="btn btn-primary" type="submit" value="Recupera senha">
        </div>
        <div class="text-center mt-3">
            <a href="{{url('login')}}">Voltar</a>
        </div>
    </form>
</div>

@stop
