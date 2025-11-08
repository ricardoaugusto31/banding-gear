@extends('layouts.main')
@section('title', 'Add New Peripheral')
@section('content')
  
  <form action="/peripherals/save" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label>BG_ID</label>
      <input type="text" name="bg_id" id="bg_id" class="form-control" placeholder="e.g PERI9999" required>
    </div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g Razer Viper V2 Pro" required>
    </div>

    <div class="form-group">
      <label>Brand</label>
      <input type="text" name="brand" id="brand" class="form-control" placeholder="e.g Razer" required>
    </div>

    <div class="form-group">
      <label>Category</label>
      <select name="category" id="category" class="form-control" required>
        <option value="" hidden>-- Choose Category --</option>
        <option value="Mouse">Mouse</option>
        <option value="Keyboard">Keyboard</option>
        <option value="Headset">Headset</option>
        <option value="Monitor">Monitor</option>
        <option value="Mousepad">Mousepad</option>
        <option value="Microphone">Microphone</option>
        <option value="Webcam">Webcam</option>
      </select>
    </div>

    <div class="form-group">
      <label>Price (Rp.)</label>
      <input type="number" name="price" id="price" class="form-control" placeholder="e.g 2500000" required>
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
    </div>

    <div class="form-group">
      <label for="image_path">Image</label>
      <input type="file" name="image_path" id="image_path" accept="image/" class="form-control" required>
    </div>

    <div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/peripherals" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
@endsection