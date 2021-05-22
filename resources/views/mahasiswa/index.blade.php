@extends('layout/templete')

@section('title','Daftar Mahasiswa')

@section('container')    
    <h1 class="mt-3">Daftar mahasiswa</h1>
    <div class="table-responsive-sm">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$mhs->foto}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nim}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection    
