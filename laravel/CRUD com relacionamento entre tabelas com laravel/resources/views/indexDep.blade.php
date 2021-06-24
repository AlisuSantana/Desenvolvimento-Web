@extends('layouts.master_page')

@section('title', 'index Departamento')


@section('content')
    <h1 class="text-center">Departamento</h1>
    <hr>
    @if (session('mensagem'))
        <div class="alert alert-success text-center">
            <p> {{session('mensagem')}} </p>
        </div>        
    @endif
    <hr>

    <div class="text-center mt-3 mb-3">
        <a href="{{url('departamento/create')}}">
            <button class="btn btn-success">Cadastrar departamento</button>
        </a>
    </div>

    <div class="col-10 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">acão</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deps as $dep)
                <tr>
                    <th scope="row">{{$dep->cd_departamento}}</th>
                    <td scope="col">{{$dep->nm_departamento}}</td>
                    <td>
                        <a href="{{url("departamento/$dep->cd_departamento")}}"> 
                            <button class="btn btn-dark">Visualizar</button> 
                        </a>   
                        <a href='{{url("departamento/$dep->cd_departamento/edit")}}'> 
                            <button class="btn btn-primary">Editar</button> 
                        </a>   
                        <a href='{{url("departamento/$dep->cd_departamento")}}' class="js-del-dep"> 
                            <button class="btn btn-danger">Deletar</button> 
                        </a>                            
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop