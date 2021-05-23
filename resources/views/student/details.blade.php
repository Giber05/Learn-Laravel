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
              <h4 class="card-title ms-2">{{$student->nama}}</h4>
              
              <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight fw-bold">NIM</div>
                <div class="p-2 bd-highlight " >:</div>
                <div class="p-2 flex-fill bd-highlight ">{{$student->nim}}</div>
              </div>
              <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight fw-bold">Jurusan</div>
                <div class="p-2 bd-highlight " >:</div>
                <div class="p-2 flex-fill bd-highlight ">{{$student->jurusan}}</div>
              </div>
              <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight fw-bold">Email</div>
                <div class="p-2 bd-highlight " >:</div>
                <div class="p-2 flex-fill bd-highlight ">{{$student->email}}</div>
              </div>
              <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight fw-bold">No. Telepon</div>
                <div class="p-2 bd-highlight " >:</div>
                <div class="p-2 flex-fill bd-highlight ">{{$student->notelp}}</div>
              </div>

              <p class="card-text"><small class="text-muted ms-2">created at {{$student->created_at}}</small></p>

              <a href="{{$student->id}}/edit" type="submit" class="btn btn-success">Edit</a>

              <form action="/students/{{$student->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    <a href="/students" class="btn btn-primary btn-lg">Back</a>
@endsection    
