<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $tables = 'genres';
    protected $fillable = ['name', 'ranking', 'active'];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'genre_id', 'id');
    }
    
}
