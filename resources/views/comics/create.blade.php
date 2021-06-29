@extends('layouts.main')

@section('content')

  <section class="container">
    <h1 class="py-4">Insert a new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')

    <div class="title my-2">
      <label for="title" class="form-label">Title:</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="type my-2">
      <label for="type" class="form-label" class="form-label">Type:</label>
      <select name="type" id="type" class="form-control">
        <option value="">Select a type</option>
        <option value="comic book">Comic Book</option>
        <option value="graphic novel">Graphic Novel</option>
      </select>
    </div>
    <div class="series my-2">
      <label for="series" class="form-label">Series:</label>
      <input type="text" name="series" id="series" class="form-control">
    </div>
    <div class="sale-date my-2">
      <label for="sale-date" class="label-control">Sale date:</label>
      <input type="text" name="sale-date" id="sale-date" class="form-control">
    </div>
    <div class="price my-2">
      <label for="price" class="label-control">Price:</label>
      <input type="number" name="price" id="price" step="0.01" class="form-control">
    </div>
    <div class="description my-2">
      <label for="description" class="form-label">Description:</label>
      <textarea name="description" id="description" cols="30" rows="8" class="form-control"></textarea>
    </div>
    <div class="image my-2">
      <label for="image" class="label-control">Image URL:</label>
      <input type="text" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary my-2 mb-5">Submit</button>
    <button type="reset" class="btn btn-danger my-2 mb-5">Reset</button>
    </form>
  </section>
  
@endsection