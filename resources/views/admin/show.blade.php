<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Show the data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1>Control It!</h1>

  <div class="container-1">
    <div class="row">
      @foreach ($product as $pro)
      <div class="col-md-3" style="box-shadow: inset;">
        <!-- Content for the first column -->
        <div class="card" style="width: 18rem;height: 30rem;">
          <img src="{{asset($pro->image)}}" class="card-img-top" alt="..." style="width:280px;margin:auto;padding:14px;height:1800px;">
          <div class="card-body">
            <h5 class="card-text">{{$pro->name}}</h5>
            <p class="card-text">{{$pro->description}}</p>
            <p class="card-text">Rs. {{$pro->price}}</p>
          <p class="card-text">Category: {{$pro->category['name']}}</p>
            <p class="card-text">{{$pro->created_at->format('Y-m-d')}}</p>
            <!-- <a href="/product" class="btn btn-success">Add</a> -->
            <a href="/editdul/{{$pro->id}}" class="btn btn-warning">Edit</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <br>
  <a href="/product"><button type="button" class="btn btn-danger" style="margin-left: 18px;">Back</button></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>