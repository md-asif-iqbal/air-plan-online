<?php

    $name=$_POST['full_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $pay=$_POST['pay'];
    $card_number=$_POST['card_number'];
    $cvc=$_POST['cvc'];
    $exp_month=$_POST['exp_month'];
    $exp_year=$_POST['exp_year'];
    $amount=$_POST['amount'];


    require_once('./dbh.php');
    $query="INSERT INTO payment (name,email,address,city,gender,pay,card_number,cvc,exp_month,exp_year,amount)
    VALUES ('$name','$email','$address','$city','$gender','$pay','$card_number','$cvc','$exp_month','$exp_year','$amount');";

    $execute=mysqli_query($conn,$query);


    header("Location: ./Peyment.html");

?>