@extends('admin.layout.main')
@section('content')

    <div class="container">
    <form method="post" action="/save" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label class="form-label"><b>Enter Product Name</b></label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($type as $v)
    <tr>
      <td>{{$v->id}}</td>
      <td>{{$v->name}}</td>
      <td><a href="/edithana/{{$v->id}}"><button class="btn btn-warning" type="submit">Edit</button></a>
      <a href="/ca-delete/{{$v->id}}"><button class="btn btn-danger" type="button">Delete</button></a></td>
    </tr>
  @endforeach
    </tr>
  </tbody>
</table>
</div>
@endsection
    