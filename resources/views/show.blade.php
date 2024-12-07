@extends('layouts.app')
@section('contentHeader')
@endsection
@section('sidebar')
@endsection
@section('contentBody')
<div class="justify-center">
    <img src="images/logo.jpeg" alt="">
</div>

<form action="{{route('show')}}" method="POST">
    @csrf
    <label class="form-label" for="default-1-01">Barcode</label>
    <input type="text" class="form-control focus" id="default-1-01" placeholder="" name="barcode" autofocus>
</form>
<div class="card text-white bg-primary mt-5">
    <div class="card-header">{{$item->barcode}}</div>
    <div class="card-inner">
        <div class="m-5 d-flex justify-center">

            <h2 class="card-title">{{number_format($item->price,0,',',' ')}}</h2>
        </div>
        <p class="card-text">{{$item->name}}</p>
    </div>
</div>

@endsection