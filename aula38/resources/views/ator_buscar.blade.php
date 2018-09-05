<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Buscar Atores</title>
    </head>
    <body>
        
 
        <h1 align="center">Buscar Atores</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/atores/buscar">
            
            {{ csrf_field() }}
            {{ method_field('put') }}

            <div class="form-group col-6 m-auto">
                <label for="titulo">Digite o nome:</label>
                <input type="text" class="form-control" name="nome" value=""/>
            </div>
            
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Buscar" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>