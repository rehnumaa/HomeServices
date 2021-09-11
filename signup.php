<!DOCTYPE html>
<html>
  <head>
    <title>M&R Services Signup</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style>
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
<br>

<!-- SignUpForm&LogoImg -->

<div class="container-fluid" >
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <div class="fakeimg">
          <img class="img-fluid" src="img/logo3.png" width="600" height="600">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-12">
     <div class="container ">
       <h3 class="text-center">M&R Services Signup</h3>
       
  <form action="signupCon.php" method="post" >
    <div class="form-group mx-sm-5">
      <label for="firstName">First Name:</label>
      <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="firstName" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group mx-sm-5">
      <label for="lastName">Last Name:</label>
      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lastName" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group mx-sm-5">
     <label for="gender">Gender:</label>
      
      <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="male" value="m">
  <label class="form-check-label" for="male">Male</label>
</div>

<div class="form-check ">
  <input class="form-check-input" type="radio" name="gender" id="female" value="f">
  <label class="form-check-label" for="female">Female</label>
</div>

<div class="form-check ">
  <input class="form-check-input" type="radio" name="gender" id="others" value="o">
  <label class="form-check-label" for="others">Others</label>
</div>

</div>
    <div class="form-group mx-sm-5">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter E-mail ID" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group mx-sm-5">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="password" placeholder="Enter Password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group mx-sm-5 mb-6">
      <label for="number">Phone Number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter Phone Number" name="number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group mx-sm-5 form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> I agree with all terms and conditions of M&R Services.
      </label>
    </div>
    <button type="submit" class="btn btn-dark mx-sm-5">Submit</button>
  </form>
</div>
    </div>
  </div>
</div>
<br>

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