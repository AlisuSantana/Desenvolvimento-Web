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
        <div class="container-fluid">
            <div class="row mt-2">
                <h1 class="text-end text-50 mb-4 px-4"> Oii {{ $user->nm_user }}, Sejá Bem Vindo!   </h1> 
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header py-3">Meus lembretes.. </div>
                        <div class="card-body">
                            - Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                            - Incidunt rerum pariatur expedita asperiores ratione itaque. Necessitatibus officiis odit deserunt.                             
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header py-3"> Novidades.. </div>
                        <div class="card-body">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt rerum pariatur expedita asperiores ratione itaque. Necessitatibus officiis odit deserunt ratione iure incidunt maxime voluptates repudiandae sunt? Laudantium voluptatibus ipsum veniam?
                        </div>
                    </div>
                </div>
            </div>
        </div>    
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


