<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Learning Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-md">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/mahasiswa')}}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/students')}}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand ms-3" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Learn Laravel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="container-md">
            
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    {{-- <a class="nav-item nav-link disabled" href="{{url('/mahasiswa')}}">Mahasiswa</a> --}}
                    <a class="nav-item nav-link" href="{{url('/students')}}">Students</a>
                    <a class="nav-item nav-link " href="{{url('/about')}}">About</a>
                </div>
            </div>
        </div>
      </nav>

    <div class="container">
        @yield('container')
    </div>

</body>
</html>