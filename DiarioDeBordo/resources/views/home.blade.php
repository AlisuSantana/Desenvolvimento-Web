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
                <h2 class="text-end text-50 mb-4 px-4"> Oii {{ $user->nm_user }}, Sejá Bem Vindo!   </h2> 
                <div class="col-lg-9 col-md-12">
                    <div class="card mb-3">
                        <div class="card-header py-3">Meus lembretes.. </div>
                        <div id="reminders" class="card-body">
                           @if ($reminders)
                            @foreach ($reminders as $reminder)
                                <div id="reminder{{ $reminder->cd_reminder }}" class='p-1 m-0'>
                                    - {{ $reminder->ds_reminder }} 
                                    <button id="{{$reminder->cd_reminder}}" type="submit" class='del-reminder ps-1 text-decoration-none border-0 rounded'> Excluir </button>
                                </div>                                                            
                            @endforeach       
                           @endif 
                        </div>
                        <div class="card-footer">
                           <form id="form-reminder" name="form-reminder">
                            @csrf
                                <div class="input-group">
                                    <input type="text" class="form form-control p-2" name="reminder" id="reminder" placeholder="Adicionar Lembrete...">
                                    <button class="btn btn-primary" type="submit"> salvar </button>
                                </div>
                           </form>
                           <div id="errorReminder" class="alert alert-danger d-none mt-3" role="alert">  </div>
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



{{-- wrapper ajax start --}}
@section('scripts-ajax')
<script>
  $("#form-reminder").bind('submit',function(event){
    event.preventDefault();
    $.ajax({
        url: "{{ route('reminder.store') }}"  ,
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(response){
            if(response.success === true){
                $('#reminders').append(
                    "<div id='reminder"+response.reminder_id+"' class='p-1 m-0'>" +
                        "- " + response.reminder +
                        "<a id="+ response.reminder_id +" href='{{ route('reminder.destroy',['id'=>"+response.reminder_id+"]) }}' class='del-reminder ps-1 text-decoration-none'> Excluir </a>" +
                    "</div>"  
                );
            }else{                
                $('#errorReminder').removeClass('d-none').html('Ops: cientifique-se se informou um lembrete');
                setTimeout(() => {
                    $('#errorReminder').empty()
                    $('#errorReminder').addClass('d-none');
                }, 3000);
            }            
        },
        error: function(response){
            console.log("Erro na conexão \n");
            console.log(response);
        }
    });
  });

$(".del-reminder").on('click',function(){
    let reminder_id = $(this).attr('id');
    $("#reminder"+reminder_id).empty();
})
</script>
@stop
{{-- wrapper ajax end --}}

