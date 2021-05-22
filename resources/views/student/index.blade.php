@extends('layout/templete')

@section('title','Daftar Mahasiswa')

@section('container')    
    <h1 class="my-3">Daftar mahasiswa</h1>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-success" href="students/create">Tambah Mahasiswa baru</a>
    </div>
    @if (session('status'))
        <div class="alert alert-success my-3">
            {{ session('status') }}
        </div>
    @endif

    <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
        @foreach ($students as $student)
            <div class="col">
                <div class="card">
                    <img src="{{$student->foto}}" class="card-img-top" alt="{{$student->foto}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <p class="card-text">{{$student->jurusan}}</p>
                    </div>
                    <a href="students/{{$student->id}}" class="btn btn-primary">See Details</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection    
