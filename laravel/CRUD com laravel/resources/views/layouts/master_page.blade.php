<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/bootstrap_4-4-1/css/bootstrap.min.css')}}">
    <title>Laravel @yield('title') </title>
</head>
<body>

    <head>
        @section('head')
        
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand mr-5" href="#">Laravel</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                  <a class="nav-link mr-3" href="/aluno">HomePage inicial <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-3" href="#">Apenas Exemplo1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-3" href="#">Apenas Exemplo2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-3" href="#">Apenas Exemplo3</a>
                </li>

              </ul>
            </div>
          </nav>

        @show
    </head>

    <main class="container-fluid">
        @yield('content')
    </main>

    <footer>
        @section('footer')
        @show
    </footer>

    <script src="{{url('assets/js/javascript.js')}}"></script>

</body>
</html>