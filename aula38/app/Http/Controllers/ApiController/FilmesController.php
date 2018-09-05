<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class FilmesController extends Controller
{

    public function index()
    {
        $filmes = Movie::all();
        return $filmes->toJson(); //->toJson() nao e necessario colocar
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $filmes = Movie::find($id);
        $filmes->title = $request->input('title');
        $filmes->save();

       
    }

    
    public function destroy($id)
    {
        //
    }
}
