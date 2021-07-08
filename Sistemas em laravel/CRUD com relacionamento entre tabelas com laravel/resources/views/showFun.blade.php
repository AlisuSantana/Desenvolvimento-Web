@extends('layouts.master_page')

@section('title', 'visualização')

@section('content')
    <h1 class="text-center mt-3 mb-3">Visualizar Funcionario</h1>
    <hr>

    @php
        $dep = $fun->find($fun->cd_funcionario)->relDep;   
    @endphp

    <p> <strong> Funcionario: </strong>{{$fun->nm_funcionario}}</p>
    <p> <strong> Departamento: </strong> {{$dep->nm_departamento}}</p>
@stop