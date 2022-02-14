<?php
$food_id = $_GET['id'];
require_once ('dbh.php');

$query = "SELECT * FROM food WHERE FOOD_ID = $food_id;";
$execute = mysqli_query($conn, $query);
$foodTable = mysqli_fetch_array($execute);

$Food = $foodTable['TITLE'];
$Price = $foodTable['PRICE'];
$Quantity=$_POST['qty'];
$Total = $Price * $Quantity;
$Status=$_POST['submit'];
$Customer = $_POST['full-name'];
$Contact = $_POST['contact'];
$Email = $_POST['email'];
$Address = $_POST['address'];

$sql = "INSERT INTO FOOD_ORDER (FOOD, PRICE, QUANTITY, TOTAL, STATUS, CUSTOMER_NAME, CUSTOMER_CONTACT, CUSTOMER_EMAIL, CUSTOMER_ADDRESS)
VALUES('$Food', $Price, $Quantity, $Total, '$Status', '$Customer', $Contact, '$Email', '$Address');";

$result = mysqli_query($conn, $sql);

if ($result) {

	echo '<script type="text/javascript">
  alert("Your Order Is Confirm");
  window.location.href = "index.php";
  </script>';
	
}
?>