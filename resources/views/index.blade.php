@extends('layout/templete')

@section('title','Learn-Laravel')
   
@section('container')

        <h1 class="mt-3">This is HOME page</h1>
        <h2>Welcome "{{$data->name}}"</h2>
@endsection    
