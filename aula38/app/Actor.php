<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors'; 
    protected $fillable = ['first_name', 'last_name', 'rating', 'favorite_movie_id'];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'favorite_movie_id', 'id');
    }


    public function getNomeCompleto()
    {
        return $this->first_name . " " . $this->last_name;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }


   
}
