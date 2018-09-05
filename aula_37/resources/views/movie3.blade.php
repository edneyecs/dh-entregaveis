<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie3.blade</title>

    </head>
    <body>
      
       @foreach ($vmovies3 as $title)
            {{$title->getId(). " - " . $title->getTitle()}}<br>
        @endforeach
    </body>
</html>