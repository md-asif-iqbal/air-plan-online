<?php

require_once ('dbh.php');

$username = $_POST['user'];
$password = $_POST['paw'];

$sql = "SELECT * from `Admin_LogIn` WHERE Username = '$username' AND PASSWORD = '$password'";
$sqlid = "SELECT ID from `Admin_LogIn` WHERE Username = '$username' AND PASSWORD = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){

    $employee = mysqli_fetch_array($id);
	$empid = ($employee['id']);
	echo ("logged in SUCCESSFULL");
	//echo ("$empid");
	
	header("Location: userloginwel.php?id=$empid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid username or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>