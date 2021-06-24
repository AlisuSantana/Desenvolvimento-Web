@extends('layouts.master_page')

@section('title', 'aluno')

@section('head')
    @parent    
@stop

@section('content')
    
    <h1 class="text-center">CRUD COM LARAVEL</h1>
    <hr>
    @if (session('mensagem'))
        <div class="alert alert-success">
            <p> {{session('mensagem')}} </p>
        </div>        
    @endif
    <hr>

    <div class="col-10 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Aluno</th>
                    <th scope="col">Mãe</th>
                    <th scope="col">Pai</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registroAluno as $alunos)
                    <tr>
                        <th scope="row">{{$alunos->cd_aluno}}</th>
                        <td>{{$alunos->nm_aluno}}</td>
                        <td>{{$alunos->nm_mae_aluno}}</td>
                        <td>{{$alunos->nm_pai_aluno}}</td>
                        <td>
                            <a href="{{url("aluno/$alunos->cd_aluno")}}"> 
                                <button class="btn btn-dark">Visualizar</button> 
                            </a>   
                            <a href='{{url("aluno/$alunos->cd_aluno/edit")}}'> 
                                <button class="btn btn-primary">Editar</button> 
                            </a>   
                            <a href='{{url("aluno/$alunos->cd_aluno")}}' class="js-del"> 
                                <button class="btn btn-danger">Deletar</button> 
                            </a>                            
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>        
    </div>

    <div class="text-center mt-3 mb-3">
        <a href="{{url('aluno/create')}}"> <button class="btn btn-primary">Cadastrar aluno</button> </a>
    </div>
    
    <br><hr>

@stop

@section('footer')
    @parent
@stop


