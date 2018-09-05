@if (isset($edicaoSucesso) && $edicaoSucesso)
    Filme atualizado com sucesso!
@endif

@if (isset($updateSucesso) && $updateSucesso)
    Filme atualizado com sucesso!
@endif

@if (isset($delete) && $delete)
    Filme excluido com sucesso!
@endif

<hmtl>
    <head>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
    <br>
        <h3> LISTAR FILMES </h3>
        <br>
        @foreach ($exibirfilmes as $filmes)
            {{ $filmes->title }} -
            <a href = "/filmes/edit/{{ $filmes->id }}"> Editar</a> | 
            <a href = "/filmes/delete/{{ $filmes->id }}"> Remover</a>
            <br>
        @endforeach

    {{ $exibirfilmes->links() }}
    </body>
<html>


