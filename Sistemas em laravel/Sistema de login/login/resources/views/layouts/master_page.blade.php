<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets\bootstrap-4-4-1\css\bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body class="bg-info m-auto">
    <main class="container">
        @yield('content')
    </main>    
</body>
</html>