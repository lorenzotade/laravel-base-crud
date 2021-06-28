@extends('layouts.main')

@section('content')
  <section class="container">
    <h1 class="py-4">Our Comic Selection</h1>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Series</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>$ {{$comic->price}}</td>
            <td><a href="{{route('comics.show', $comic)}}">SHOW</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
@endsection