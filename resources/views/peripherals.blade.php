@extends('layouts.main')
@section('title', 'Peripherals')
@section('content')
  
  <a href="/peripherals/addnew" class="btn btn-primary mb-3 float-right">
    <i class="bi bi-plus-lg"></i>
  </a>

  <div class="table-responsive">
    <table class="display" id="example">
      <thead>
        <tr>
          <th>ID</th>
          <th>BG_ID</th>
          <th>Nama</th>
          <th>Brand</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($prs as $idx => $p)
        <tr>
          <td>{{ $idx +1 }}</td>
          <td>{{ $p -> bg_id }}</td>
          <td>{{ $p -> name }}</td>
          <td>{{ $p -> brand }}</td>
          <td>{{ $p -> category }}</td>
          <td>{{ $p -> price }}</td>
          <td>
            @if ($p->image_path)
                <img src="{{ asset('/storage/image_path/'.$p->image_path)}}" alt="$p->image_path" width="80" height="80">
            @else
                <img src="{{ asset('/storage/image_path/no-image.jpg')}}" alt="No Image" width="80" height="80">
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection