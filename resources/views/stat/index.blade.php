@extends('layouts.app')

@section('contentBody')
<div clas="card card-preview">
  
<div class="card-inner">
                                                <ul class="preview-list">
                                                    <li class="preview-item">
                                                        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"> Tooltip on top </button>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        
</div>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Локация</th>
        <th scope="col">Статус</th>
        <th scope="col">ШК</th>
        <th scope="col">Товар</th>
        <th scope="col">Дата</th>
      </tr>
    </thead>
    <tbody>
      @foreach($stats as $stat)
        <tr>
        <th scope="row">{{$stat->name}}</th>
       
        @if($stat->found)
                    <td><span class="badge badge-dot badge-dot-xs badge-success">Yes</span></td>
                    
                    @else
                      <td><span class="badge badge-dot badge-dot-xs badge-danger">No</span></td>
                    
                    @endif
        <td>{{$stat->barcode}}</td>
        @if($stat->found)
        <td>{{$stat->item->name}}</td>
        @else
        <td>Товар не найден</td>
        @endif
        <td>{{$stat->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 
  {{$stats->links()}}

@endsection



         