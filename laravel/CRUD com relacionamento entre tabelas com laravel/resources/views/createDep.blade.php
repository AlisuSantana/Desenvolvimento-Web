@extends('layouts.master_page')

@if (isset($dep))
    @section('title', 'Atualizar meu departamento')
@else
    @section('title', 'criar departamento')
@endif

@section('content')

    <h1 class="text-center mt-3 mb-3">
        @if (isset($dep))
                Atualização de departamento
            @else
                Cadastro de departamento
        @endif
    </h1>

    <hr>
    <div class="col-6 m-auto">
        @if (isset($dep))
            <form name="form_dep_edit" id="form_dep_edit" method="POST" action="{{url("departamento/$dep->cd_departamento")}}">
                @method('put')
        @else
            <form name="form_dep_create" id="form_dep_crate" method="POST" action="{{url('departamento')}}">            
        @endif

            @csrf
            <input class="form-control" type="text" name="nomeDep" id="nomeDep" 
                    placeholder="Nome do Departamento" value="{{$dep->nm_departamento ?? ''}}">
            <br>
            <input type="submit" class="btn btn-primary" value="@if (isset($dep)) Atualizar departamento @else Cadastrar meu departamento @endif">
        </form>
    </div>
@stop