<?php

require_once ('dbh.php');
$Trip=$_POST['Ch'];
$FlightFrom= $_POST['FF'];
$FLIGHTTO= $_POST['FT'];
$DepartingDate= $_POST['DD'];
$ReturningTime= $_POST['RD'];
$Adult= $_POST['AD'];
$children= $_POST['CH'];
$TravelClass= $_POST['TC'];

echo $Trip;
echo $FlightFrom;
echo $FLIGHTTO;
echo $DepartingDate;
echo $ReturningTime;
echo $Adult;
echo $children;
echo $TravelClass;

$sql = "INSERT INTO ticket_book(Trip,Flight_From,FLIGHT_TO,Departing_Date,Returning_Time,Adults,Children,Travel_Class)
Values('$Trip','$FlightFrom','$FLIGHTTO','$DepartingDate','$ReturningTime','$Adult','$children','$TravelClass');";

$sqlid = "select Adults From `ticket_book` WHERE Children = '$CH' AND Flight_From='$FF";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn,$sqlid);
$empid = "";

header("Location: ./order_ticket.php?country=$FLIGHTTO");

if($result)
{
    echo "record success";
    $employee = mysqli_fetch_array($id);
    $empid = ($employee['Adults']);
    echo ("Search A Flight");
	echo ("$empid");
	//header("Location: Show_Flights.html?id=$empid");
  } else {
    echo ("fail");
  }

  
  
  $conn->close();

?>