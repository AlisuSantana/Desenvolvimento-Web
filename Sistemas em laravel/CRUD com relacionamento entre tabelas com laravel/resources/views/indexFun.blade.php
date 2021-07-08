@extends('layouts.master_page')

@section('title', 'index Funcionario') 


@section('content')
    <h1 class="text-center">Funcionario</h1>
    <hr>
    @if (session('mensagem'))
        <div class="alert alert-success text-center">
         <p> {{session('mensagem')}} </p>
        </div>        
    @endif
    <hr>
    
    <div class="text-center mt-3 mb-3">
        <a href="{{url('funcionario/create')}}">
            <button class="btn btn-success">Cadastrar funcionario</button>
        </a>
    </div>
    
    <div class="col-10 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">funcionario</th>                    
                    <th scope="col">Departamento</th>
                    <th scope="col">Ação</th>
                    {{-- <th scope="col">Nome do departamento</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($funs as $fun)
                
                @php
                $dep = $fun->find($fun->cd_funcionario)->relDep;
                @endphp
                
                <tr>
                    <th scope="row">{{$fun->cd_funcionario}}</th>
                    <td scope="col">{{$fun->nm_funcionario}}</td>
                    <th scope="col">{{$dep->nm_departamento}}</th>
                    <td>
                        <a href="{{url("funcionario/$fun->cd_funcionario")}}"> 
                            <button class="btn btn-dark">Visualizar</button> 
                        </a>   
                        <a href='{{url("funcionario/$fun->cd_funcionario/edit")}}'> 
                            <button class="btn btn-primary">Editar</button> 
                        </a>   
                        <a href='{{url("funcionario/$fun->cd_funcionario")}}' class="js-del-fun"> 
                            <button class="btn btn-danger">Deletar</button> 
                        </a>                            
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@stop