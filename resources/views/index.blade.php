@extends('layouts.app')
@section('contentHeader')
@endsection
@section('sidebar')
@endsection
@section('contentBody')
<div class="container justify-center md">
    <img src="images/main.png" class="img-thumbnail"  alt="" style="width:80%;height:80%">
</div>
{{--
<form action="{{route('show')}}" method="POST">
    @csrf
    <label class="form-label" for="default-1-01">Barcode</label>
    <input type="text" class="form-control focus" id="default-1-01" placeholder="" name="barcode" autofocus>
</form>
--}}

@endsection


@section('scripts')
    @parent
    <script src="{{asset('js/barcode.js')}}"></script>
@endsection