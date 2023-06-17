<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Document</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Veg & Non-veg Spicy Restaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgbg1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imgbg2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imgbg3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>



    </a>
  </div>

  <section class="my-5" id="nav-link">
    <div class="py-5">
      <h1 class="text-center">About Us</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="abou.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2> This is My Main Menu</h2>
          <p class="py-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ipsum architecto esse, distinctio quo porro
            impedit quis quae modi officia dolorem?</p>
          <a href="about.php" class="btn btn-outline-warning">Know More</a>
        </div>

      </div>
    </div>
  </section>

  <section class="my-5" id="nav-link">
    <div class="py-5">
      <h1 class="text-center">Our Services</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="imgbg2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Delicious Food </h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>


        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="imgbg2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Delicious Food </h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>


        </div>


        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="imgbg2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Delicious Food </h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>


        </div>



      </div>
    </div>


  </section>


  <section class="my-5 food items">
    <div class="py-5">
      <h1 class="text-center"> Food Items </h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="biryani.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="imgbg2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="biryani2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="samose chatni.jpg" class="img-fluid pb-4">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <img src="sahi panir.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="veg.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="biryani.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="imgbg1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="biryani.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>


  <section class="my-5 food items">
    <div class="py-5">
      <h1 class="text-center"> Contact Us </h1>
    </div>
    <div class="w-50 m-auto">
    <form action="userInfo.php" method="post">
      <div class="form-group">
        <label>User Name</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Contact no.</label>
        <input type="text" name="contact" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea name="comments" class="form-control">

        </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
    </section>

<footer class="p-3 bg-dark text-white text-center">
  <p> @Veg&Non-veg Spicy Restaurant|<?php echo date("l jS \of F Y") . "<br>";?> All Right Reserved </p>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>