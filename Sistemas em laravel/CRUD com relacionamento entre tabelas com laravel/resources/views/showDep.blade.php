@extends('layouts.master_page')

@section('title', 'visualização')

@section('content')
    <h1 class="text-center mt-3 mb-3">Visualizar Departamento</h1>
    <hr>
    <p><strong> Departamento: </strong> {{$dep->nm_departamento}}</p>
@stop