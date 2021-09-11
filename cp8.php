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
.aboutimg{
    width: 25%;
    height: 30%;
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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">M&R Services</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="about.php">About</a>
    </li>
  </ul>
</nav>
<br>
<br>

<!-- UserImg -->
<img src="img/p6.png" class="mx-auto d-block aboutimg">

<!-- UserInfoTable -->
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Experience</th>
        <th>Rating</th>
        <th>Charge</th>
      </tr>
    </thead>

    <tbody>

      <?php 
   
       include 'config.php' ;
  
  $selectq = "SELECT * FROM `worker_details` WHERE id='8'";
  $query = mysqli_query($con, $selectq);

  $num = mysqli_num_rows($query);
  
  while ($res = mysqli_fetch_array($query)) 
 {
  ?>

     <tr>
      <td><?php echo $res['name'] ?></td>
       <td><?php echo $res['contact'] ?></td>
       <td><?php echo $res['exp'] ?></td>
       <td><?php echo $res['rating'] ?></td>
       <td><?php echo $res['charge'] ?></td>
     </tr>

 <?php 
  }

?>  
    </tbody>

  </table>

  <div class="btn-group">
    <div class="text-center">
       <a href="cleaning.php" class="btn btn-dark" style="width: 100px">Return</a>
        <a href="userInfo.php" class="btn btn-dark" style="width: 100px">Next</a>
    </div>
    
  </div>

</div>
<br>
<br>
</div>

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