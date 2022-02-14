<?php

require_once ('dbh.php');

$name = $_POST['fullname'];
$email = $_POST['mailuid'];
$password = $_POST['pwd'];
$dateofbirth = $_POST['dateofbirth'];
$NID = $_POST['NID'];
$Passport = $_POST['Passport'];

$sql = "INSERT INTO Passengers (Name, Email, Password, Date_Of_Birth, NID, Passport)
VALUES('$name', '$email', '$password', '$dateofbirth', '$NID', '$Passport');";
$sqlid = "SELECT NID from `Passengers` WHERE Email = '$email' AND Password = '$password'";

$result = $conn->multi_query($sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";

if ($result === TRUE) {
  //echo "New records created successfully";
  $employee = mysqli_fetch_array($id);
	$empid = ($employee['NID']);
	echo ("logged in");
	//echo ("$empid");
	
	header("Location: Login.html?id=$empid");
  } else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Already used this Email')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }
  
  $conn->close();
  ?>