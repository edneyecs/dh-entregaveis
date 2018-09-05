<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Atores</title>
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
            Ator cadastrado com sucesso.
        @endif
        
        @if (isset($ocorreuErro) && $ocorreuErro)
            Ocorreu erro!
        @endif


        <h1 align="center">Adicionar Atores</h1>
        <form id="adicionarAtor" name="adicionarAtor" method="post" action="/atores/cadastrar">
            
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group col-6 m-auto">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{ old('nome')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome"  value="{{ old('sobrenome')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" name="rating" value="{{ old('rating')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Filmes</label>
                <select name="idfilmes" class="form-control">
                    @foreach ( $listarfilmes as $filmes)
                        <option value="{{ $filmes->id }}">{{ $filmes->title }}</option>
                    @endforeach
                </select>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
