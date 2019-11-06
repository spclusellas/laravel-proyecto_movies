@extends('layouts.principal')

@section('contenido')
  <h3>Agregar Pelicula</h3>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
  <form action="/agregarPelicula" id="agregarPelicula" name="agregarPelicula" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
      <div>
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo" value="{{old('titulo')}}" id="titulo"/>
      </div>
      <div>
          <label for="rating">Rating</label>
          <input type="text" name="rating" value="{{old('rating')}}" id="rating"/>
      </div>
      <div>
          <label for="premios">Premios</label>
          <input type="text" name="premios" value="{{old('premios')}}" id="premios"/>
      </div>
      <div>
          <label for="duracion">Duracion</label>
          <input type="text" name="duracion" value="{{old('duracion')}}" id="duracion"/>
      </div>
      <div>
          <label>Fecha de Estreno</label>
          <input type="date" name="dia" value="{{old('dia')}}">
      </div>
      <div class="">
          <label for="">Poster:</label>
          <input type="file" name="poster" value="">
      </div>
      <input type="submit" value="Agregar Pelicula" name="submit"/>
  </form>
@endsection
