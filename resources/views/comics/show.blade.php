@extends('layouts.main')

@section('content')

  <section class="container py-4">

    <a class="btn btn-secondary mb-4" href="{{route('comics.index')}}"><-- Back</a>

    <h1 class="mb-5">{{$comic->title}}</h1>

    <div class="info d-flex justify-content-between">

      <img src="{{$comic->image}}" alt="{{$comic->title}}">

      <div class="desc ms-5">

        <p><span class="fw-bold">Description:</span> {{$comic->description}}</p>
        <p><span class="fw-bold">Series:</span> {{$comic->series}}</p>
        <p><span class="fw-bold">Sale date:</span> {{$comic->sale_date}}</p>
        <p><span class="fw-bold">Price:</span> ${{$comic->price}}</p>

      </div>
      
    </div>

  </section>
@endsection