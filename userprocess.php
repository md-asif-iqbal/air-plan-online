<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `passengers` WHERE Email = '$email' AND Password = '$password'";
$sqlid = "SELECT NID from `passengers` WHERE Email = '$email' AND Password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){

    $employee = mysqli_fetch_array($id);
	$empid = ($employee['id']);
	//echo ("logged in");
	//echo ("$empid");
	
	header("Location: userloginwel.php?id=$empid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>