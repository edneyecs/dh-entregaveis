<br>
<h3> Lista de Generos / Filmes </h3>
<br>
@foreach ($exibirgenres as $genre)
    <a href= "/genres/listarfilmes/{{ $genre->id }}">{{ $genre->name }}</a> 
    <br>
    @foreach ($genre->movies as $movie)
        {{ $movie->title }}
        <br>
    @endforeach
    <hr>
    
@endforeach