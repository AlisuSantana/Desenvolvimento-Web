@extends('layouts.master_page')

@section('title', 'Página de recuperação de senha')

@section('content')

<h2 class="text-center" 
    style="color: rgba(216, 7, 104, 0.842)"> 
    Geração de nova senha 
</h2>
<p>Nova senha: <strong> {{$novaSenha}} </strong> </p>

@stop