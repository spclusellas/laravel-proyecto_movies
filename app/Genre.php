<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $guarded = [];

    public function peliculas(){
      return $this->hasMany('App\Pelicula', 'genre_id');
    }
}
