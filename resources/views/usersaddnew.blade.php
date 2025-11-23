@extends('layouts.main')
@section('title', 'Add New User')
@section('content')
  
  <form action="/users/save" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g Rusdi" required>
    </div>

    <div class="form-group">
      <label>E-mail</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="e.g rusdiyesking@gmail.com" required>
    </div>

    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" name="photo" id="photo" accept="image/" class="form-control" required>
    </div>

    <div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/users" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
@endsection