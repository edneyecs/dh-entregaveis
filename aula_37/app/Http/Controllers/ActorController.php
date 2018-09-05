<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function directory()
    {
        //$listarAtores = Actor::all(); 
        $listarAtores = Actor::orderby('first_name')->get(); 
        return view ('atores')->with('vatores', $listarAtores);
    }

    public function show($id)
    {
        $atornome = Actor::find($id);
        return view ('atores2')->with('atores2', $atornome);
    }

    public function search($nome)
    {
        $buscar = Actor::where('first_name', 'like', '%'. $nome .'%')
                ->orwhere('last_name', 'like', '%'. $nome .'%')->get();
        return view ('atores3')->with('atores3', $buscar);
    }
    
    public function store(Request $dados)
    {
        //text_usuario - nome do campo do formulario
        $buscar = $dados->text_buscarnome;
         return $this->search($buscar);
        
    
    }
}
