<!DOCTYPE html>
<html lang="en">
<head>
  <title>M&R Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
  body {
      position: relative; 
  }

  .carousel-inner img {
    width: 100%;
    height: 100%;
}
.aboutimg
{
  width: 25%;
  height: 25%;
}
.image-parent {
  max-width: 70px;
}
.footer{
  overflow: hidden;
  margin-top: 150px;
  background: #262626;
  color: #627482 !important;
  margin-bottom: 0;
  padding-bottom: 0;
  height: 300px;
}
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar  bg-dark navbar-dark">
  <a class="navbar-brand">M&R Services</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"> Cart <span class="fa fa-shopping-cart"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php"> Logout <span class="fas fa-sign-out-alt"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>    
    </ul>
  </div>  
</nav>


<!-- Carousel -->
<div id= "services" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#services" data-slide-to="0" class="active"></li>
    <li data-target="#services" data-slide-to="1"></li>
    <li data-target="#services" data-slide-to="2"></li>
    <li data-target="#services" data-slide-to="3"></li>
    <li data-target="#services" data-slide-to="4"></li>
    <li data-target="#services" data-slide-to="5"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/clean.jpg" width="1100" height="500">   
    </div>
    <div class="carousel-item">
      <img src="img/Maid.jpg" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="img/laundry.jpg" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="img/pest.jpg" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="img/Relocation.jpg" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="img/repair.jpg" width="1100" height="500">  
    </div>
  </div>

  <a class="carousel-control-prev" href="#services" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#services" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<!-- LogoImg&Text -->
<section class="my-5">
  <div class="py-5">
    <img src="img/logo.jpg" class="mx-auto d-block aboutimg">
    <h3 class="text-center">Avail Our Services</h3>
  </div>
<div class="container-fluid">
<div class="row">
 
<!-- ServicesLists -->
<div class="container">
<div class="list-group">
    <a href="cleaning.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
      <h3 class="text-center">Cleaning Service</h3>
    <div class="image-parent">
    <img src="img/cleaner.png" class="img-fluid" alt="quixote">
    </div>
    </a>

    <a href="maid.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
     <h3>Maid Service</h3> 
    <div class="image-parent">
    <img src="img/maid.png" class="img-fluid" alt="quixote">
    </div>
    </a>

    <a href="laundry.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <h3> Laundry Service </h3>  
    <div class="image-parent">
    <img src="img/machine.png" class="img-fluid" alt="quixote">
    </div>
    </a>

    <a href="pestControl.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <h3>Pest Control</h3>
    <div class="image-parent">
    <img src="img/pest.png" class="img-fluid" alt="quixote">
    </div>
    </a>

    <a href="homeShift.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <h3>Relocating Service</h3>
    <div class="image-parent">
    <img src="img/move.png" class="img-fluid" alt="quixote">
    </div>
    </a>

    <a href="repair.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <h3>Repair Service</h3>
    <div class="image-parent">
    <img src="img/tool.png" class="img-fluid" alt="quixote">
    </div>
    </a>
  </div>
</div>
</div>
</div>
</section>


<!-- Footer -->
<div class="container-fluid pb-0 mb-0 justify-content-center text-light bg-dark footer" >
    <div class="row justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">M&R Services</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li> <a class="text-muted" href="home.php">Home</li></a>
                             <li> <a class="text-muted" href="about.php">About Us</li></a>
                             <li> <a class="text-muted" href="">Contact Us</li></a>
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                         <p class="mb-1 text-muted">Plot 16 Block B, Aftabuddin Ahmed Road</p>
                         <p class="text-muted">Bashundhara R/A</p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                         <p class="social text-muted mb-0 pb-0 bold-text">
                          <span class="mx-2"><span class="fab fa-facebook">
                            
                          </span>
                        </span>
                        <span class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i> </span>
                         <span class="mx-2"><i class="fa fa-phone" aria-hidden="true"></i>
                         </span>
                        </p><small class="rights"><span>&#174;</span> M&R All Rights Reserved.</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mt-55 mt-2 text-muted bold-text">
                          <b>Rehnuma Akhtar</b>
                        </h6>
                        <small class="text-muted"> 
                        <span><i class="fa fa-envelope text-muted" aria-hidden="true">
                        </i>
                      </span> <a href="mailto: rehnuma@gmail.com" class="text-muted">rehnuma@gmail.com</a>
                    </small>
                     </div>
                     
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text">
                          <b>Mashrur Ahmed</b>
                        </h6>
                         <small class="text-muted">
                          <span>
                          <i class="fa fa-envelope text-muted" aria-hidden="true"></i>
                        </span>
                        <a href="mailto: mashrur@gmail.com" class="text-muted">mashrur@gmail.com</a></small>
                     </div>
                 </div>
             </div>
         </div>
  
 </div>


</body>
</html>
