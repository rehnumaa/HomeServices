<?php 

include 'config.php';

$id = $_GET['id'];
$q =" DELETE FROM `worker_details` WHERE id = $id";

mysqli_query($con,$q);

header('location: admin.php');
?>