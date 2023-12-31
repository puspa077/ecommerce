<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Here!</h1>

    <div class="container">
        <form method="POST" action="/pro-update/{{$product->id}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
          <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
          <div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{$product->description}}">
  </div>
          <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value="{{$product->price}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>