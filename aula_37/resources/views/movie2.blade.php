<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies2.blade</title>

    </head>
    <body>
       {{$vmovies2->getId() . " " . $vmovies2->getTitle()}}

    </body>
</html>