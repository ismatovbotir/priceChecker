
@extends('layouts.price')
@section('content')

<div class="justify-center">
    <img src="images/logo.jpeg" alt="">
</div>
{{--
<form action="{{route('show')}}" method="POST">
    @csrf
    <label class="form-label" for="default-1-01">Barcode</label>
    <input type="text" class="form-control focus" id="default-1-01" placeholder="" name="barcode" autofocus>
</form>


--}}

<div class="card text-white bg-primary mt-5">
    <div class="card-header">{{$item->barcode}}</div>
    <div class="card-inner">
        <div class="m-5 d-flex justify-center">

            <h2 class="card-title display-1">{{number_format($item->price,0,',',' ')}}</h2>
        </div>
        <h3 class="display-5">{{$item->name}}</h3>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    <script src="{{asset('js/timer.js')}}"></script>
@endsection