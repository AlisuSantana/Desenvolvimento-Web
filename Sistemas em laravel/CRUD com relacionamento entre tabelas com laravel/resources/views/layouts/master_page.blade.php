<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="{{url('assets/js/javascript.js')}}"></script>
</body>
</html>