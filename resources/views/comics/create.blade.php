@extends('layouts.main')

@section('content')

  <section class="container">
    <h1 class="py-4">Insert a new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    
    </form>
  </section>
  
@endsection