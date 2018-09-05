<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class MovieController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    
    public function exibirform()
    {
        $generos = Genre::all();
        return view ('form')->with('generos', $generos);
    }

    public function cadastrar(Request $addDados)
    {
        $this->validate($addDados, [
            'titulo' => 'required',
            'classificacao' => 'numeric|min:0|max:10',
            'premios' => 'numeric',
            'duracao' => 'numeric',
            'genero' => 'numeric',
            ]);
        
        $dados = Movie::create(['title' => $addDados->input('titulo'),
            'rating' => $addDados->input('classificacao'),
            'awards' => $addDados->input('premios'),
            'length' => $addDados->input('duracao'),
            'release_date'=> $addDados->input('date'),
            'genre_id' => $addDados->input('genero') ]);
        $sucesso = $dados->save();
        $genero = Genre::all();
        if ($sucesso)
        {
            return view ('form')->with('sucesso', true)
                                ->with('generos', $genero);
        }else
        {
            return view ('form')->with('ocorreuErro', true)
                                ->with('generos', $genero);
        }
    }

    public function exibirFilmes()
    {
        //$filmes = Movie::all();
        $filmes = Movie::paginate(10);

        //$filmes = Movie::orderBy('title')->paginate(10); //ordenar por title
        //$filmes = Movie::inRandomOrder()->paginate(10); //aleatorio 

        return view('exibirfilme')->with('exibirfilmes', $filmes);
    }

    public function delete($id)
    {
        $filme = Movie::find($id);
        $resultado = $filme->delete();
        $todosfilmes = Movie::paginate(10);

        if ($resultado)
        {
            return view ('exibirfilme')
                    ->with('delete', true)
                    ->with('exibirfilmes', $todosfilmes);
        }else
            {
                return view ('todosFilmes')
                        ->with('ocorreuErro', true)
                        ->with('exibirfilmes', $todosFilmes);
        }
    }

    public function editForm($id)
    {
        $filme = Movie::find($id);
        return view ('edit_form')->with('filme', $filme);
    }


    public function update (Request $dados, $id)
    {
        $filme = Movie::find($id);

        $filme->title = $dados->input('titulo');
        $filme->rating = $dados->input('classificacao');
        $filme->awards = $dados->input('premios');
        $filme->length = $dados->input('duracao');
        $filme->genre_id = $dados->input('genero');
        $sucesso = $filme->save();
        $todosFilmes = Movie::paginate(10);

        if ($sucesso)
        {
            return view ('exibirfilme')
                    ->with('updateSucesso', true)
                    ->with('exibirfilmes', $todosFilmes);
        }else
            {
                return view ('todosFilmes')
                        ->with('ocorreuErro', true)
                        ->with('exibirfilmes', $todosFilmes);
        }
    }
    
   
}
