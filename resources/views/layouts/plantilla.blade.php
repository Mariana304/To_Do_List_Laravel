<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
  

    <style>
        .active{
            color: ;
            font-weight: bold;
        }
    </style>
  
</head>
<body class="bg-gray-50">

    @include('layouts.partials.header')
    @yield('contect')
    


    
   
</body>
</html>