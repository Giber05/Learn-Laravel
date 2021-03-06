@extends('layout/templete')

@section('title','Tambah Mahasiswa Baru')

@section('container')    
  <h1 class="mt-3">Form Tambah mahasiswa baru</h1>
  <form action="/students" method="post">
    @csrf
    <div class="form-floating mb-3 col-sm-5">
      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="floatingInput"  value="{{old('nama')}}">
      <label for="floatingInput">Nama</label>
      @error('nama')  
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="row g-3">

      <div class="form-floating mb-3 col">
        <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{old('nim')}}" aria-label="First name">
        <label for="floatingInput">NIM</label>
        @error('nim')  
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
      </div>

      <div class="form-floating col">
        <select id="inputState" name="jurusan" class="form-select @error('jurusan') is-invalid @enderror">
          <option selected>{{old('jurusan')}}</option>
          <option>Teknik Informatika</option>
          <option>Teknik Mesin</option>
          <option>Teknik Industri</option>
          <option>Teknik Biogas</option>
        </select>
        <label for="floatingInput">Jurusan</label>
        @error('jurusan')  
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
      </div>

    </div>

    <div class="form-floating mb-3 col-sm-5">
      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"  value="{{old('email')}}">
      <label for="floatingInput">Email address</label>
      @error('email')  
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="form-floating mb-3 col-sm-5">
      <input type="text" name="notelp" class="form-control @error('notelp') is-invalid @enderror" id="floatingInput" value="{{old('notelp')}}">
      <label for="floatingInput">Nomor Telepon</label>
      @error('notelp')  
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    
    <div class="form-floating mb-3 col-sm-5">
      <input type="text" name="foto" class="form-control @error('foto') is-invalid @enderror" id="floatingInput" value="{{old('foto')}}">
      <label for="floatingInput">Foto</label>
      @error('foto')  
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <input type="submit" name="add" class="btn btn-primary" value="Tambah Data">

  </form>
@endsection    
