<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atores2.blade</title>

    </head>
    <body>
       {{$atores2->getId() . " " . $atores2->getNomeCompleto()}}

    </body>
</html>