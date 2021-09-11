
<!DOCTYPE html>
<html lang="en">
<head>
  <title>M&R Cleaning Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
   .footer{
     overflow: hidden;
     margin-top: 150px;
     background: #262626;
     color: #627482 !important;
     padding-bottom: 0;
     height: 300px;
 }
</style>

</head>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">M&R Services</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="home.php"> Logout <span class="fas fa-sign-out-alt"></span></a>
    </li>
    </ul>
</nav>




<img src="img/logo.jpg" class="mx-auto d-block aboutimg">

<div class="container">
  <br>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active bg-dark text-white" data-toggle="tab" href="#home">Worker Details</a>
    </li><br><br>
    <li class="nav-item">
      <a class="nav-link bg-dark text-white" data-toggle="tab" href="#menu1">Customer Review</a>
    </li>
    <li class="nav-item">
      <a class="nav-link bg-dark text-white" data-toggle="tab" href="#menu2">Add Workers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link bg-dark text-white" data-toggle="tab" href="#menu3">View Customer Orders</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="container">
  <div class="col-lg-12">
    <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark text-white text-center">
           <th>ID</th>
           <th>Name</th>
          <th>Contact</th>
           <th>Experience</th>
          <th>Rating</th>
           <th>Charge</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>

      <?php 

               include 'config.php';
               $q = " SELECT * FROM worker_details ";
               $query = mysqli_query($con,$q);
               while ($res = mysqli_fetch_array($query))
 {
    ?>

      <tr class="text-center">
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['contact']; ?></td>
        <td><?php echo $res['exp']; ?></td>
        <td><?php echo $res['rating']; ?></td>
        <td><?php echo $res['charge']; ?></td>
        <td><button class="btn-danger btn "> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>
        </button></td>
        <td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a></button></td>
       
      </tr>

   <?php 
   }
   ?>
    </table>
    </div>
  </div>
    </div>
    


  <div id="menu1" class="container tab-pane fade"><br>
  <div class="container mt-3">
  <div class="media border p-3 shadow-lg">
    <img src="img/m9.png" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>Mac Owen <small><i>Posted on February 19, 2021</i></small></h4>
      <p>Very satisfied with their service.</p>      
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="media border p-3 shadow-lg">
    <img src="img/p1.png" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>John Denver<small><i>Posted on April 29, 2021</i></small></h4>
      <p>A little improvement is required in their home relocation service. Would recommend.</p>      
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="media border p-3 shadow-lg">
    <img src="img/p2.png" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>Alex <small><i>Posted on May 17, 2021</i></small></h4>
      <p>I would highly recommend their service. Personal Rating 10/10.</p>      
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="media border p-3 shadow-lg">
    <img src="img/m3.png" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>Lucy Jade <small><i>Posted on May 19, 2021</i></small></h4>
      <p>Satisfied. Thanks</p>      
    </div>
  </div>
</div>
</div>


    <div id="menu2" class="container tab-pane fade"><br>
      <h3 class="text-center">To add workers click the button below to go to the next page.</h3>
      <div class="text-center">
        <a href="insert.php" class="btn btn-dark">Add</a>
      </div>
    </div>


<div id="menu3" class="container tab-pane fade"><br>

       <div class="container">
  <div class="col-lg-12">
    <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark text-white text-center">
           <th>Email</th>
           <th>Address</th>
           <th>Contact</th>
          <th>City</th>
           <th>State</th>
          <th>Zip</th>
      </tr>

      <?php 

               include 'config.php';

               $q = " SELECT * FROM userinfo ";
               $query = mysqli_query($con,$q);
               while ($res = mysqli_fetch_array($query))
 {
    ?>

      <tr class="text-center">
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['address']; ?></td>
        <td><?php echo $res['contact']; ?></td>
        <td><?php echo $res['city']; ?></td>
        <td><?php echo $res['state']; ?></td>
        <td><?php echo $res['zip']; ?></td>
       
      </tr>

   <?php 
   }
   ?>
    </table>
    </div>
  </div>
    </div>


  </div>
</div>



<div class="container-fluid justify-content-center text-light bg-dark footer" >
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
                      <a href="mailto: rehnuma@gmail.com" class="text-muted">rehnuma@gmail.com</a>
                    </small>
                     </div>
                     
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text">
                          <b>Mashrur Ahmed</b>
                        </h6>
                         <small class="text-muted">
                          <span>
                          <i class="fa fa-envelope text-muted" aria-hidden="true"></i>
                        <a href="mailto: mashrur@gmail.com" class="text-muted">mashrur@gmail.com</a>
                      </small>
                     </div>
                 </div>
             </div>
         </div>
  
 </div>

</body>
</html>