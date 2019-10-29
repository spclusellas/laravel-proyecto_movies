@extends('layouts.principal')

@section('contenido')
  <section>
    <article class="">
      <h3 class="text-center">Tus Peliculas son:</h3>

        {{-- @dd($peliculas) --}}
        @foreach ($peliculas as $pelicula)
          <p class="text-center">{{$pelicula->title}}</p>
          <p class="text-center"> <a href="/eliminarPelicula/{{$pelicula->id}}"> Eliminar Pelicula </a> </p>
        @endforeach
      </article>
    </section>
@endsection
