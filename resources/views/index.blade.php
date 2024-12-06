@extends('layouts.app')
@section('contentHeader')
@endsection
@section('sidebar')
@endsection
@section('contentBody')


<form action="{{route('show')}}" method="POST">
    @csrf
    <label class="form-label" for="default-1-01">Barcode</label>
    <input type="text" class="form-control focus" id="default-1-01" placeholder="" name="barcode" autofocus>
</form>


@endsection