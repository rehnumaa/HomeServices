<?php 

include 'config.php';

if (isset($_POST['done'])) {
   
   $id = $_GET['id'];
   $Name = $_POST['name'];
   $contact = $_POST['contact'];
   $exp = $_POST['exp'];
   $rating = $_POST['rating'];
   $charge = $_POST['charge'];
   $q = "UPDATE `worker_details` SET `id`='$id',`name`='$Name',`contact`='$contact',`exp`='$exp',`rating`='$rating',`charge`='$charge' WHERE id=$id";
   $query = mysqli_query($con,$q);

   header('location:admin.php');
}

?>

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
  

</head>

<body>

<img src="img/logo.jpg" class="mx-auto d-block aboutimg">

<div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h2 class="text-white text-center">  Update </h2>
 </div><br>


           <label>Name:</label>
            <input type="text" name="name" class="form-control">

             <label>Contact:</label>
            <input type="text" name="contact" class="form-control">

              <label>Experience:</label>
            <input type="text" name="exp" class="form-control">

             <label>Rating:</label>
            <input type="text" name="rating" class="form-control">

              <label>Charge:</label>
            <input type="text" name="charge" class="form-control">
<br>
 <button class="btn btn-dark" type="submit" name="done"> Submit </button>

 </div>
  <br><br>
 </form>
 </div>

</body>
</html>
