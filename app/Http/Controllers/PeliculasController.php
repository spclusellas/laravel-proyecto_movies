<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Pelicula;

class PeliculasController extends Controller
{
    public function buscarPeliculasId($id){

        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
        ];

        $tituloFinal = $peliculas[$id];

        $vac = compact('tituloFinal');

        return view('peliculaId', $vac);
    }

    public function listado(){
      $peliculas = Pelicula::all();

      $vac = compact('peliculas');

      return view('peliculas', $vac);
    }

    public function detalle($id){
      $pelicula = Pelicula::find($id);

      $vac = compact('pelicula');

      return view('detallePelicula', $vac);
    }

    public function lasMejores(){
      $peliculas = Pelicula::where('rating', '>', 8)->get();

      $vac = compact('peliculas');

      return view('peliculas', $vac);
    }

    public function formulario(){
      return view('agregarPelicula');
    }

    public function agregar(Request $form){

      $validaciones = [
        'titulo' => 'required|min:3',
        'rating' => 'numeric|required|max:10',
        'premios' => 'required|integer',
        'duracion' => 'required|integer',
        'dia' => 'required|date',
      ];

      $mensajes = [
        'required' => 'El campo :attribute es obligatorio',
        'min' => 'El campo :attribute debe contener como minimo 3 caracteres',
        'alpha' => 'El campo :attribute solo admite caracteres alfabeticos',
        'unique' => 'Esta pelicula ya se encuentra agregada',
        'numeric' => 'El campo :attribute debe ser de tipo  numerico',
        'integer' => 'El campo :attribute debe ser un numero entero',
        'date' => 'El campo :attribute debe ser una fecha',
        'max' => 'El campo :attribute debe teber como maximo el numero 10'
      ];

      $this->validate($form, $validaciones, $mensajes);

      $nuevaPelicula = new Pelicula();

      $nuevaPelicula->title = $form["titulo"];
      $nuevaPelicula->rating = $form["rating"];
      $nuevaPelicula->awards = $form["premios"];
      $nuevaPelicula->length = $form["duracion"];
      $nuevaPelicula->release_date = $form["dia"];

      $nuevaPelicula->save();
      // INSERT INTO movies VALUES(....)

      return redirect('peliculas');

    }

    public function eliminar($id){
      $peliculaEliminada = Pelicula::find($id);

      $titulo = $peliculaEliminada->title;

      $peliculaEliminada->delete();

      return redirect('peliculas');
    }


}
