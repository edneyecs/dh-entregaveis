<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class ActorController extends Controller
{
    public function exibirform()
    {
        $filmes = Movie::all();
        return view ('ator_form')->with('listarfilmes', $filmes);
        
    }

    public function directory()
    {
        $listarAtores = Actor::orderby('first_name')->paginate(15);
        return view ('atores')->with('vatores', $listarAtores);
    }

    public function formbuscar()
    {
        return view ('ator_buscar');
    }

    public function show($id)
    {
        $atornome = Actor::find($id);
        return view ('atores2')->with('atores2', $atornome);
    }

    public function search(Request $request)
    {
        $nome = $request->nome;
        $buscar = Actor::where('first_name', 'like', '%'. $nome .'%')
                ->orwhere('last_name', 'like', '%'. $nome .'%')->paginate(15);
        return view ('atores')->with('vatores', $buscar);
    }
    
    public function store(Request $dados)
    {
        $buscar = $dados->text_buscarnome;
         return $this->search($buscar);        
    }

    public function cadastrar(Request $addDados)
    {
        $this->validate($addDados,[
            'nome'=> 'required',
            'sobrenome' => 'required',
            'rating' => 'numeric',
            'idfilmes' => 'numeric',
        ]);

        $dados = Actor::create(['first_name' => $addDados-> input('nome'),
            'last_name' => $addDados-> input('sobrenome'),
            'rating' => $addDados-> input('rating'),
            'favorite_movie_id' => $addDados-> input('idfilmes') ]);
    
        $sucesso = $dados->save();
              
        $filmes = Movie::all();
        
        if ($sucesso)
        {
            return view ('ator_form')->with('sucesso', true)
                                     ->with('listarfilmes', $filmes);
        }else
            {
                return view ('ator_form')->with('ocorreuErro', true)
                                         ->with('listarfilmes', $filmes);
            }
    }

    public function delete($id)
    {
        $ator = Actor::find($id);
        $resultado = $ator->delete();
        $todosatores = Actor::all();
        return 'registro apagado';
 
        if ($resultado)
        {
            return view ('atores')
                ->with('delete', true)
                ->with('exibiratores', $todosatores);
        }else 
            {
                return view ('atores')
                    ->with('ocorreuErro', true)
                    ->with('exibiratores', $todosatores);
            } 
    }

    public function update (Request $dados, $id)
    {
        $ator = Actor::find($id);
        $ator->first_name = $dados->input('nome');
        $ator->last_name = $dados->input('sobrenome');
        $ator->rating = $dados->input('rating');
        $ator->favorite_movie_id = $dados->input('filmes');
        $sucesso = $ator->save();
        $todosatores = Actor::paginate(15);
             
        if ($sucesso)
        {
            return view ('atores')
                ->with('sucesso', true)
                ->with('vatores', $todosatores);
        }else
            {
                return view ('atores')
                    ->with('ocorreuErro', true)
                    ->with('vatores', $todosatores);
            }

    }

    public function editform($id)
    {
        $ator = Actor::find($id);
        return view ('ator_edit_form')->with('ator', $ator);
    }

    public function filmes($id)
    {
        $filmes = Movie::where('genre_id', '=', $id)->paginate(5);
        return view ('exibirfilme')->with('exibirfilmes', $filmes);
    }

}

