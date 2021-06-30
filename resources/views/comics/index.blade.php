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
          <th colspan="3">Actions</th>
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
            <td><a href="{{route('comics.edit', $comic)}}">EDIT</a></td>
            <td>
              <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">DELETE</button>
              </form>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
@endsection