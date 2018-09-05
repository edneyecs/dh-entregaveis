<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
        
        @if (count($errors) > 0)
             <div class="alert alert-danger">
             <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
             </ul>
             </div>
        @endif
        
        @if (isset($sucesso) && $sucesso)
            Filme cadastrado com sucesso
        @endif
        
        @if (isset($ocorreuErro) && $ocorreuErro)
            Ocorreu erro
        @endif


        <h1 align="center">Adicionar Filme</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/filmes/cadastrar">
            
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo"  value="{{ old('titulo')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="classificacao"  value="{{ old('classificaçao')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="premios" value="{{ old('premios')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="duracao"  value="{{ old('duracao')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="data" value="{{ old('date') }}" />
            </div>
            <div class="form-group col-6 m-auto">
                <label>Genero</label>
                <select name="genero" class="form-control">
                    <option value="">genero</option>
                        @foreach ( $generos as $genero)
                            <option value="{{ $genero->id }}">{{ $genero->name }}</option>
                        @endforeach
                </select>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
