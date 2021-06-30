@extends('layouts.main')

@section('content')

  <section class="container">

    <a class="btn btn-secondary mt-4" href="{{route('comics.index')}}"><-- Back</a>

    <h1 class="py-4">Edit <a href="{{route('comics.show', $comic)}}">{{$comic->title}}</a></h1>

    <form action="{{route('comics.update', $comic)}}" method="post">
    @csrf
    @method('patch')

    <div class="title my-2">
      <label for="title" class="form-label">Title:</label>
      <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}">
    </div>
    <div class="type my-2">
      <label for="type" class="form-label">Type:</label>
      <select  id="type" name="type" class="form-control">
          <option value="comic book" @if ($comic->type === 'comic book') selected @endif>Comic Book</option>
          <option value="graphic novel" @if ($comic->type === 'graphic novel') selected @endif>Graphic Novel</option>
      </select>
  </div>
    <div class="series my-2">
      <label for="series" class="form-label">Series:</label>
      <input type="text" name="series" id="series" class="form-control" value="{{$comic->series}}">
    </div>
    <div class="sale_date my-2">
      <label for="sale_date" class="label-control">Sale date:</label>
      <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{$comic->sale_date}}">
    </div>
    <div class="price my-2">
      <label for="price" class="label-control">Price:</label>
      <input type="number" name="price" id="price" step="0.01" class="form-control" value="{{$comic->price}}">
    </div>
    <div class="description my-2">
      <label for="description" class="form-label">Description:</label>
      <textarea name="description" id="description" cols="30" rows="8" class="form-control">{{$comic->description}}</textarea>
    </div>
    <div class="image my-2">
      <label for="image" class="label-control">Image URL:</label>
      <input type="text" name="image" id="image" class="form-control" value="{{$comic->image}}">
    </div>
    <button type="submit" class="btn btn-primary my-2 mb-5">Submit</button>
    </form>
  </section>
  
@endsection