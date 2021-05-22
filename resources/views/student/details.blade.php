@extends('layout/templete')

@section('title','Detail Mahasiswa')

@section('container')    
    <h1 class="mt-3">Details mahasiswa</h1>
    <div class="card mb-3" style="width: 70%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$student->nama}}</h5>
              <p class="card-text">{{$student->nim}}</p>
              <p class="card-text">{{$student->jurusan}}</p>
              <p class="card-text">{{$student->email}}</p>
              <p class="card-text">{{$student->notelp}}</p>
              <p class="card-text"><small class="text-muted">created at {{$student->created_at}}</small></p>

              <button type="submit" class="btn btn-success">Edit</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
    </div>
    <a href="/students" class="btn btn-primary btn-lg">Back</a>
@endsection    
