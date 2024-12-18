
@extends('layouts.price')
@section('content')


    <div class="container justify-center md align-middle" style="height:100vh">
        <img src="images/main.png" class="img-thumbnail mt-5"  alt="" style="width:100%;height:auto">
    </div>



@endsection


@section('scripts')
    @parent
    <script src="{{asset('js/barcode.js')}}"></script>
@endsection