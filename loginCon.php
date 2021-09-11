<?php 
  
  $email= $_POST['email'];
  $password= $_POST['password'];

  $mysqli = new mysqli("localhost","root","","homeservices");

  if ($mysqli->connect_error)
  {
    die("Failed to connect:".$mysqli->connect_error);
  }
  else
  {
    $stmt = $mysqli->prepare("SELECT * FROM login where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    
if($stmt_result->num_rows>0)
    {
      $data = $stmt_result->fetch_assoc();
      if($data['email'] == "admin@gmail.com")
      {
        header("Location: admin.php");
      }
      else
      {
        header("Location: userDash.php");
      }
    }
    else
    {
        header("location:loginerr.php");
     
    }

  }