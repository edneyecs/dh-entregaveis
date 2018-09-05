<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenresController extends Controller
{
    public function exibirGenres()
    {
        $generos = Genre::all();
        return view ('exibirgenres')->with('exibirgenres', $generos);
    }
    
    public function show($id)
    {
        $generos = Genre::find($id);
        return view ('genres')->with('genres', $generos);
    }
    
    public function exibirFilmes($id)
    {
        $filmes = Movie::where('genre_id', '=', $id)->paginate(5);
        return view ('exibirfilme')->with('exibirfilmes', $filmes);
    }
}
