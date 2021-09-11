<?php

$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];


$conn = new mysqli('localhost','root','','homeservices');
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare ("insert into userinfo(email, address, contact, city, state, zip) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param ("sssssi", $email,$address,$contact,$city,$state,$zip);
	$stmt->execute();
	echo"Successful";
	$stmt->close();
	$conn->close();
}