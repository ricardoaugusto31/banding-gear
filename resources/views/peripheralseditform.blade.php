@extends('layouts.main')
@section('title', 'Edit Peripheral')
@section('content')
  
  <form action="/peripherals/update/{{ $prs->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>BG_ID</label>
      <input type="text" name="bg_id" id="bg_id" class="form-control" value="{{ $prs->bg_id }}" placeholder="e.g PERI9999" required>
    </div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $prs->name }}" placeholder="e.g Razer Viper V2 Pro" required>
    </div>

    <div class="form-group">
      <label>Brand</label>
      <input type="text" name="brand" id="brand" class="form-control" value="{{ $prs->brand }}" placeholder="e.g Razer" required>
    </div>

    <div class="form-group">
      <label>Category</label>
      <select name="category" id="category" class="form-control" required>
        <option value="0" hidden>-- Choose Category --</option>
        <option value="Mouse" {{ ($prs->category) == "Mouse" ? "Selected":"" }}>Mouse</option>
        <option value="Keyboard" {{ ($prs->category) == "Keyboard" ? "Selected":"" }}>Keyboard</option>
        <option value="Headset" {{ ($prs->category) == "Headset" ? "Selected":"" }}>Headset</option>
        <option value="Monitor" {{ ($prs->category) == "Monitor" ? "Selected":"" }}>Monitor</option>
        <option value="Mousepad" {{ ($prs->category) == "Mousepad" ? "Selected":"" }}>Mousepad</option>
        <option value="Microphone" {{ ($prs->category) == "Microphone" ? "Selected":"" }}>Microphone</option>
        <option value="Webcam" {{ ($prs->category) == "Webcam" ? "Selected":"" }}>Webcam</option>
      </select>
    </div>

    <div class="form-group">
      <label>Price (Rp.)</label>
      <input type="number" name="price" id="price" class="form-control" value="{{ $prs->price }}" placeholder="e.g 2500000" required>
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="description" class="form-control" rows="3" required>{{ $prs->description }}</textarea>
    </div>

    <div class="form-group">
      <label for="image_path">Image</label>
      <input type="file" name="image_path" id="image_path" accept="image/" class="form-control">
    </div>
    <div class="form-group">
        @if ($prs -> image_path)
            <img src="{{ asset('/storage/image_path/'.$prs->image_path)}}" alt="$prs->image_path" width="80" height="80">
        @else
            <img src="{{ asset('/storage/image_path/no-image.jpg')}}" alt="No Image" width="80" height="80">
        @endif
            <br><small><i>*previous photo</i></small>
    </div>

    <div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/peripherals" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
@endsection