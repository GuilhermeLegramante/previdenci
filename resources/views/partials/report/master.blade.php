<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <link rel="icon" href="{{ asset('img/logo-nova.png') }}" type="image/x-icon" />
    <title>@yield('titulo')</title>
</head>

@yield('body')

    <style>
        @page {
            margin: 5mm 5mm 5mm 5mm;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 50%;
        }

        body {

        }
    </style>

</html>
