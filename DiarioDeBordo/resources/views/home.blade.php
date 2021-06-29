{{-- extendendo o layout padrão --}}
@extends('layouts.master_page')

{{-- title page --}}
@section('title', 'Home')


{{-- wrapper page start --}}
@section('wrapper-start')
    @parent
@stop

{{-- sidebar page start --}}
    @section('nav-menu')
        @php $home = 'nav-active' @endphp        
        @parent
    @stop    
{{-- sidebar page end --}}

    {{-- wrapper main page start --}}
    @section('main_content-start')
        @parent
    @stop
    
        
       {{-- main page start --}}
        @section('content')
            Home

            {{ Session::get( 'login' ) }} 
            
            {{ Session::get( 'id' ) }}
        @stop
        {{-- main page end --}}


    {{-- wrapper main page end --}}
    @section('main_content-end')
        @parent
    @stop

{{-- wrapper page end --}}
@section('wrapper-end')
    @parent
@stop


