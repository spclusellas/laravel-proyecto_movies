@extends('layouts.principal')

@section('contenido')
  <section>
    <article class="">
      <h3 class="text-center">Tus Peliculas son:</h3>

        @foreach ($peliculas as $pelicula)
          <h4 class="text-center">{{$pelicula->title}}</h4>
          @if ($pelicula->genero)
              <p class="text-center">{{$pelicula->genero->name}}</p>
          @endif
          @if ($pelicula->actores)
            <p class="text-center"><strong>Actores:</strong></p>
            @foreach ($pelicula->actores as $actor)
              <p class="text-center">{{$actor->last_name}}</p>
            @endforeach
          @endif
          <p class="text-center"><a href="/detallePelicula/{{$pelicula->id}}">Ver mas</a></p>
          <p class="text-center"> <a href="/eliminarPelicula/{{$pelicula->id}}"> Eliminar Pelicula </a> </p>
        @endforeach

        {{-- {{$peliculas->links()}} --}}

      </article>
    </section>
@endsection
