@extends('admin.layout.main')
@section('content')

<div class="container">
    <form method="POST" action="/update/{{$type->id}}" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label class="form-label"><b>Enter Product Name</b></label>
    <input type="text" class="form-control" name="name" value="{{$type->name}}">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
@endsection