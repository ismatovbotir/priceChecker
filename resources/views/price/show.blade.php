@extends('layouts.price')
@section('content')
<div class="container justify-center md align-middle" style="height:100vh">
    <div class="container d-flex justify-center">
        <img src="images/logo.jpeg" alt="" style="width:30%">
    </div>
   
    <div class="card text-white bg-primary mt-1">
        <div class="card-header">{{$item->barcode}}</div>
        <div class="card-inner">
            <div class="m-5 d-flex justify-center">

                <h2 class="card-title display-1">{{number_format($item->price,0,',',' ')}}</h2>
            </div>
            <h3 class="display-5">{{$item->name}}</h3>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script src="{{asset('js/timer.js')}}"></script>
@endsection