
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="css/app.css">

        <title>LISTAR ATORES</title>

    </head>
    <body>
        <h3>LISTAR ATORES</h3>
        <br>
        @foreach ($vatores as $ator)
            {{$ator->getNomeCompleto()}} - 
            <a href = "/atores/edit/{{ $ator->id }}"> Editar</a> | 
            <a href = "/atores/delete/{{ $ator->id }}"> Remover</a> |
            <a href = "/atores/filmes/{{ $ator->id }}"> Filmes</a>
            <br>
        @endforeach
        <br>
        {{ $vatores->links() }}
    </body>
</html>

