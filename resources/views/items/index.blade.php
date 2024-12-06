@extends('layouts.app')

@section('contentBody')


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Producer</th>
        <th scope="col">Barcode</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->producer}}</td>
        <td>{{$item->barcode}}</td>
        <td>{{$item->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 
  {{$items->links()}}

@endsectio