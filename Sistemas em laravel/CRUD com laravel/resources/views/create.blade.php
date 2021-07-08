@extends('layouts.master_page')

@section('title', 'Cadastro de aluno')


@section('content')

    <h1 class="text-center"> 
        @if ( isset($aluno) )
            Editar
        @else
            Cadastrar
        @endif
    </h1>

    <hr>
    <div class="col-6 m-auto">

        @if (isset($errors) && count($errors) > 0) 
        <div class="text-center mt-3 mb-3 p-2 alert-danger">
            @foreach ($errors->all() as $erro)
                {{$erro}} <br>
            @endforeach
        </div>            
        @endif

        @if(isset($aluno))  
        <form id="form_editAluno" name="form_editAluno" method="post" action='{{url("aluno/$aluno->cd_aluno")}}'>    
        @method('put')  
        @else
        <form id="form_cadastroAluno" name="form_cadastroAluno" method="post" action="{{url('aluno')}}">
        @endif
            @csrf
                <p> <input class="form-control" type="text" name="nmAluno" id="nmAluno" 
                        placeholder="Nome do aluno: " value="{{$aluno->nm_aluno ?? ''}}"> </p>
                <p> <input class="form-control" type="text" name="nmMae" id="nmMae" 
                        placeholder='Nome da mãe: ' value="{{$aluno->nm_mae_aluno ?? ''}}"> </p>
                <p> <input class="form-control" type="text" name="nmPai" id="nmPai" 
                    placeholder='Nome do pai: ' value="{{$aluno->nm_pai_aluno ?? ''}}"> </p>
                <input class="btn btn-primary" type="submit" value="@if(isset($aluno)) Atualizar aluno @else Cadastrar aluno @endif">
        </form>
        <br>

    </div>

@stop

@section('footer')
    @parent
@stop