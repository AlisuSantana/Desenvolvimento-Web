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

 
    <main class="container-fluid mt-4">
        @yield('content')
    </main>

    <footer>
        @section('footer')
        @show
    </footer>

    <script src="{{url('assets/js/javascript.js')}}"></script>

</body>
</html>