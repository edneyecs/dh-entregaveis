<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        @foreach ($vmovies as $nome)
        {{$nome->getId(). " - " . $nome->getTitle()}}<br>
        @endforeach
        <br>
       
               
       <form action="atores/store" method="post">
            
           {{csrf_field()}}
            <br>
            Buscar por title:
            <input type="text" name="text_buscarnome"><br>
            <br>
            <input type ="submit" value="Buscar">
        </form>
    </body>
</html>