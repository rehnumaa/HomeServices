<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.aboutimg
{
  width: 50%;
  height: 25%;

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
<nav class="navbar navbar-expand-md bg-dark justify-content-center">
  <ul class="navbar-nav">
      <a class="navbar-brand text-light"><h4>M&R Services</h4></a>
  </ul>
</nav>
<br>

<!-- Text&LogoImg -->

<img src="img/cover.jpg" class="mx-auto d-block aboutimg">
<h3 class="text-center">Provide Your Address</h3>
<br>

<!-- AddressForm -->

<form action="cart.php" method="POST">
   <div class="form-group" >
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" required>
  </div>

  <div class="form-group">
    <label for="address">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" required >
    </div>
    <div class="form-group col-md-4">
      <label for="state">State</label>
      <select id="state" name="state"class="form-control">
        <option selected>Choose...</option>
        <option name="state" id="chittagong" value="c">Chittagong</option>
        <option name="state" id="dhaka" value="d">Dhaka</option>
        <option name="state" id="sylhet" value="s">Sylhet</option>
        <option name="state" id="khulna" value="k">Khulna</option>
        <option name="state" id="mymensingh" value="m">Mymensingh</option>
        <option name="state" id="rajshahi" value="r">Rajshahi</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="zip">Zip</label>
      <input type="text" class="form-control" id="zip" name="zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="container">
      <div class="text-center">
        <button type="submit" class="btn btn-dark">Add to cart</button>
      </div>
  </div>
</form>

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