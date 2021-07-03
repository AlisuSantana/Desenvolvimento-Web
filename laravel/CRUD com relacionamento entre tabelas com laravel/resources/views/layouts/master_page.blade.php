<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title> @yield('title') </title>
</head>
<body>

    <head>
        @yield('head')
    </head>

    <main>
        @section('content')

            <div class="d-flex justify-content-center aligh-items-center">
                <div class="text-center mt-2 mb-2 p-5">
                    <a href="{{url('departamento')}}">
                        <button class="btn btn-success">Departamento</button>
                    </a>
                </div>
                <div class="text-center mt-2 mb-2 p-5">
                    <a href="{{url('funcionario')}}">
                        <button class="btn btn-primary">Funcionário</button>
                    </a>
                </div>
            </div>

        @show
    </main>

    <footer>
        @yield('footer')
    </footer>
    
    <script src="{{url('assets/js/javascript.js')}}"></script>
</body>
</html>