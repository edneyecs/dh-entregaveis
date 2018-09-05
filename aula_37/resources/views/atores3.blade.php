<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atores3.blade</title>

    </head>
    <body>
       <!--{{$atores3}}-->
       @foreach ($atores3 as $ator)
            {{$ator->getId(). " - " . $ator->getNomeCompleto()}}<br>
        @endforeach
    </body>
</html>