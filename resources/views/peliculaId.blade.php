@extends('layouts.principal')

@section('contenido')
  <section>
    <article class="">
      <h3 class="text-center">La Pelicula elegida es:</h3>

        <h4 class="text-center">{{ $pelicula->title }}</h4>

        <img src="/storage/{{$pelicula->poster}}" width="200px" alt="">

        <ul>
          <li>Premios: {{$pelicula->awards}}</li>
          <li>Rating: {{$pelicula->rating}} / 10</li>
          <li>Duracion: {{$pelicula->length}}</li>
          <li>Estreno: {{$pelicula->release_date}}</li>
        </ul>

        <p>Actores > 7</p>
        <ul>

          @foreach ($actoresBuenos as $actor)
            <li>{{$actor->last_name}}</li>
          @endforeach
        </ul>



    </article>
  </section>
@endsection
