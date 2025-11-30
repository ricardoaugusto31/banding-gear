<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">

    
    <title>@yield('title')</title>
  </head>
  <body style="background-color: #f8f9fa;"> <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container"> <a class="navbar-brand" href="/">BandingGear</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('peripherals*') ? 'active' : '' }}" href="/peripherals">Peripherals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="/users">Users</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            @guest
              <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a>
              </li>
            @else
              <li class="nav-item">
                <span class="nav-link text-white">{{ Auth::user()->name }}</span>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/logout">Logout</a>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid mt-4">
      <div class="row">

        <div class="col-lg-2 d-none d-lg-block">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Peripheral 1</h5>
              <p class="card-text"><i>Add Peripheral</i></p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-8">
          <div class="card shadow-sm border-0">
            <div class="card-body p-4 p-md-5">
              
              <h1 class="h2 mb-3">@yield('title')</h1>
              <hr class="mb-4">
              
              @yield('content')

            </div>
          </div>
        </div>

        <div class="col-lg-2 d-none d-lg-block">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Peripheral 2</h5>
              <p class="card-text"><i>Add Peripheral</i></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    
    <script>
      // Inisialisasi DataTables
      new DataTable('#example');
    </script>
  </body>
</html>