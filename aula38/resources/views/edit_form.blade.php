<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
        
        @if (isset($sucesso) && $sucesso)
            Filme cadastrado com sucesso
        @endif
        
        @if (isset($ocorreuErro) && $ocorreuErro)
            Ocorreu erro
        @endif


        <h1 align="center">Formulário Update</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/filmes/edit/{{ $filme->id }}">
            
            {{ csrf_field() }}
            {{ method_field('put') }}

            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" value="{{ $filme->title }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="classificacao"  value="{{ $filme->rating }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="premios" value="{{ $filme->awards }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="duracao"  value="{{ $filme->length }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="data" value="{ $filmes->release_date }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Genero</label>
                <select name="genero" class="form-control">
                    <option value=""></option>
                    @for ($i=1; $i < 12; $i++)
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    @endfor
                </select>

            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Atualizar" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
