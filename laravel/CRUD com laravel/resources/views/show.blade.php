@extends('layouts.master_page')

@section('title', 'show - {{$aluno->cd_aluno}}')

@section('content')
    <h1 class="text-center"> Visualização do registro de aluno: </h1>
    <hr>
    <div class="m-3">
        <p>Aluno: {{$aluno->nm_aluno}} </p>
        <p>Mãe:   {{$aluno->nm_mae_aluno}} </p>
        <p>Pai:   {{$aluno->nm_pai_aluno}} </p>
    </div>
@stop

@section('footer')
    
@endsection
    