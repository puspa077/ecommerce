<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      .container-0{
        background-color: lavender;
        font-size: 18px;
        margin: auto;
        width: 1000px;
        border: 1px solid #ccc;
        border-radius: 15px;
        display: block;
      }
      .container{
        width: 700px;
        margin: auto;
        border: 1px solid #ccc;
        border-radius: 6px;
        height: auto;
        padding: 16px;
        background-color: #ccc;
      }  
    </style>
  </head>
  <body>
    <h1>Category</h1>
    <br>

    <div class="container-0">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="margin-left: 18px;">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/category" style="margin-left: 18px;">| Category |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product" style="margin-left: 18px;">Product |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/order" style="margin-left: 18px;">Order |</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<br>

@yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>