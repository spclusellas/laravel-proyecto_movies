<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    // public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded = [];

    public function presentacion(){
      return $this->title . " tiene " . $this->awards . " premios y dura " . $this->length . " minutos.";
    }

    public function genero(){
      return $this->belongsTo('App\Genre', 'genre_id');
    }

    public function actores(){
    return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id');
    }

}
