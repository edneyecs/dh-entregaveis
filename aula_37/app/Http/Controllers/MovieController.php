<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function directory()
    {
        $listarMovies = Movie::orderby('title')->get(); 
        return view ('movies')->with('vmovies', $listarMovies);
    }

    public function show($id)
    {
        $idmovie = Movie::find($id);
        return view ('movie2')->with('vmovies2', $idmovie);
    }

    public function search($title)
    {
        $buscar = Movie::where('title', 'like', '%'.$title.'%')->get();
        return view ('movie3')->with('vmovies3', $buscar);
    }
    
    public function store(Request $dados)
    {
        $buscar = $dados->text_buscarnome;
         return $this->search($buscar);
        
    
    }
}
