<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        @foreach ($vatores as $ator)
        {{$ator->getId(). " - " . $ator->getNomeCompleto()}}<br>
            <!-- <a href="atores/<?php echo $ator->id; ?>" title="Editar">Editar</a><br> -->
        @endforeach
        <br>
       
               
       <form action="atores/store" method="post">
            
           {{csrf_field()}}
            <br>
            Buscar por nome:
            <input type="text" name="text_buscarnome"><br>
            <br>
            <input type ="submit" value="Buscar">
        </form>
    </body>
</html>