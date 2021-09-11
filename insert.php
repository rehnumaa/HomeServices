<?php 

include 'config.php';

if (isset($_POST['done'])) {
   
   $Name = $_POST['name'];
   $contact = $_POST['contact'];
   $exp = $_POST['exp'];
   $rating = $_POST['rating'];
   $charge = $_POST['charge'];
   $q =  "INSERT INTO `worker_details`(`name`, `contact`, `exp`, `rating`, `charge`) VALUES ('$Name','$contact','$exp','$rating','$charge')";
   $query = mysqli_query($con,$q);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<img src="img/logo.jpg" class="mx-auto d-block aboutimg">

<div class="col-lg-6 m-auto">
    
    <form method="POST">
        <br><br><div class="card">
            <div class="card-header bg-dark">
                <h2 class="text-white text-center"> Insert </h2>
            </div>
             
             <br>
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
            <button class="btn btn-dark" type="submit" name="done" >Submit</button>
            
        </div>
        <br><br>
    </form>


</div>
</body>
</html>