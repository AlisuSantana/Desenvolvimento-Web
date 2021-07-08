@extends('layouts.master_page')

@if (isset($fun))
    @section('title', 'Atualizar Funcionario')
@else
    @section('title', 'Criar Funcionario')
@endif

@section('content')

    <h1 class="text-center mt-3 mb-3">
        @if (isset($fun))
            Atualização de funcionario   
        @else
            Cadastro de funcionario
        @endif        
    </h1>
    
    <hr>

    <div class="col-6 m-auto"> 
        @if (isset($fun))
            <form name="form_fun_edit" id="form_fun_edit" method="POST" action="{{url("funcionario/$fun->cd_funcionario")}}">
                @method('put')
        @else
            <form name="form_fun_create" id="form_fun_create" method="POST" action="{{url('funcionario')}}">
        @endif
            @csrf
            <input class="form-control" type="text" name="nomeFun" id="nomeFun" 
                    placeholder="Nome do funcionario" value="{{$fun->nm_funcionario ?? ''}}">
            <br>
                <select class="form-control" name="id_dep" id="id_dep">

                    <option value="{{$fun->relDep->cd_departamento ?? ''}}"> 
                            {{$fun->relDep->nm_departamento ?? 'Selecione um departamento'}} 
                    </option>

                    @foreach ($deps as $dep)
                        @if(isset($fun))                         
                            @if ($dep->cd_departamento != $fun->relDep->cd_departamento)
                                <option value="{{$dep->cd_departamento}}"> {{$dep->nm_departamento}} </option>
                            @endif
                        @else
                            <option value="{{$dep->cd_departamento}}"> {{$dep->nm_departamento}} </option>
                        @endif                        
                    @endforeach

                </select><br>
            <input type="submit" class="btn btn-primary" value="@if (isset($fun)) Atualizar funcionario @else Cadastrar funcionario @endif">
        </form>
    </div>
@stop