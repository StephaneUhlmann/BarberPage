<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Wilde Barber</title>
	<meta charset="utf-8"/> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> <!--Bootstrap href-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> <!--Bootstrap javascript-->
  <link rel="stylesheet" href="_styles/stylepage.css"> <!--css href-->
</head>

<body>
  <div class="container">

<!--Navbar-->
 <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgb(89, 89, 89);">
   <a class="navbar-brand" href="home.php">The Wilde Barber</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <!--button home-->
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active"> <!--button login-->
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item active"> <!--button sign up-->
        <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li>
      <li class="nav-item active"> <!--button barber sign up-->
        <a class="nav-link" href="barber_login.php">Barber Sign up</a>
      </li>
       <li class="nav-item active"> <!--button contact us-->
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
    </ul>
    <!--in line form-->
    <form class="form-inline" method="POST" action="login_test.php">
    <div class="input-group"> 
      <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required> <!--input email-->
       <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required> <!--input password-->
       <button type="submit" class="btn btn-outline-primary">Login</button> <!--button-->
    </div>
  </form>
  </div>
</nav>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators"> <!--Carousel to display 3 images-->
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner"> <!--Carousel image 1 with text-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="_images/barber1.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block" style="font-size: 100px;">
    <p>The Wilde Barber <sup>&reg;</sup></p>
    <h4>Since 1989</h4>
  </div>
    </div>
    <div class="carousel-item"> <!--Carousel image 2 with text-->
      <img class="d-block w-100" src="_images/barber4.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block" style="font-size: 80px;">
    <p>Classic Cuts & Shaves</p>
  </div>
    </div>
    <div class="carousel-item"> <!--Carousel image 3 with text-->
      <img class="d-block w-100" src="_images/barber3.png" alt="Third slide">
      <div class="carousel-caption d-none d-md-block" style="font-size: 80px;">
    <p>Book Online Now</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span> <!--Carousel button-->
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span> <!--Carousel button-->
  </a>
</div>


<!--Home Page-->
<div class="container">   

            <H1>The Wilde Barber</H1>
            <p>Welcome to thewildebarber.com. The official homepage of The Wilde Barber.</p>

            <p>The Wilde Barber is a 100% Irish, Family Owned company, founded in 1989 by Roberto Wilde Sr. We are classic barbers that pride ourselves on providing an impeccable service to both Gentlemen & Their Sons. With nearly 20 stores nationwide, we are the largest chain in Ireland.</p>

            <p>The Wilde Barber specialise in all aspects of cutting, restyling and colouring of men’s hair – along with traditional open razor shaving.</p>

            <p>Loyal well-trained staff are the key to any Wilde Barber and we also invest heavily in training our staff on new techniques that we develop and retrain new staff members into The Wilde Barber way of doing things.</p>

            <p>If you visit The Wilde Barber and experience the service for yourself, you will find traditional reclining barber chairs, front wash ceramic sink marble tops, reclaimed floors, New-York style tin ceilings, deep button leather waiting area, flat screen TVs and PlayStations for the kids. There is always a complimentary tea, coffee, cappuccino and even an ice-cold beer on offer for clients!</p>

</div>

<footer>
Copyright &copy; <?php echo date('Y'); ?> The Wilde Barber &reg; 
<!--footer with actual year date displayed-->
</footer>

<!--javascript for the navbar responsivity-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
