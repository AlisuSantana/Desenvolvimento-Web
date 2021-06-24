@extends('layouts.master_page')

@section('title', 'Nossa página de apricação')

@section('content')

<h1 class="text-center mt-5 mb-5">Área interna Aplicação</h1>
<hr>
<p>Usuário: <strong> {{session('nm_usuarioLogado')}} </strong> </p>
<a href="{{url('logout')}}">Logout</a>

@endsection