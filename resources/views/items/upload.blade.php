@extends('layouts.app')

@section('contentBody')
<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="form-label" for="customFileLabel">Default File Upload</label>
        <div class="form-control-wrap">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="file">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-control-wrap mt-3">
        <button type="submit" class="btn btn-info">Load xls</a>
        </div>
    </div>
    
</form>

@endsection