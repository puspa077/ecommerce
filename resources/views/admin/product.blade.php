@extends('admin.layout.pro')
@section('product')

<div class="container">
  <form method="POST" action="/pro-save" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label"><b>Product Name</b></label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label class="form-label"><b>Image</b></label>
      <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
      <label class="form-label"><b>Description</b></label>
      <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
      <label class="form-label"><b>Price</b></label>
      <input type="text" class="form-control" name="price">
    </div>

    <label class="form-label"><b>Select Category</b></label>
    <select name="category" class="form-select" aria-label="Default select example">
      @foreach($category as $cat)
      <option value="{{$cat->id}}">{{$cat->name}}</option>
      @endforeach
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/show"><button type="button" class="btn btn-secondary">Check</button></a>
    <a href="/category"><button type="button" class="btn btn-danger">Back</button></a>
  </form>
</div>
<br>
@endsection