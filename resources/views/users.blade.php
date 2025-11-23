@extends('layouts.main')
@section('title', 'Users')
@section('content')
  
  <a href="/users/addnew" class="btn btn-primary mb-3 float-right">
    <i class="bi bi-plus-lg"></i>
  </a>
    <!-- POP UP -->
      @if (session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ session('alert') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
  <div class="table-responsive">
    <table class="display" id="example">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>E-Mail</th>
          <th>Photo</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $idx => $u)
        <tr>
          <td>{{ $idx +1 }}</td>
          <td>{{ $u -> name }}</td>
          <td>{{ $u -> email }}</td>
          <td>
            @if ($u->photo)
                <img src="{{ asset('/storage/photo/'.$u->photo)}}" alt="$u->photo" width="80" height="80">
            @else
                <img src="{{ asset('/storage/photo/no-image.jpg')}}" alt="No Image" width="80" height="80">
            @endif
          </td>
          <td>
              <a href="/users/delete/{{ $u->id }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection