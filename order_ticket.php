

<?php

$country = (isset($_GET['country']) ? $_GET['country'] : '');
require_once('./dbh.php');
// $query = "SELECT * FROM jet_details WHERE country = '$country' AND active='Yes' ;";
// $execute = mysqli_query($conn, $query);
// $country_info = mysqli_fetch_array($execute);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link css -->
    <link rel="stylesheet" href="./order_ticket.css">
</head>
<body>
<div class="wrapper">
        <div class="container">
            <div class="right_side-bar">
                <div class="applied_job">
                    <div class="heading">
                        <h1>Flight Book</h1>
                    </div>
                    <table id="customers">
                        <tr>
                            <th>TimeSchedule</th>
                            <th>Jet id</th>
                            <th>Jet Type</th>
                            <th>Price</th>
                            <th>Book</th>
                        </tr>
                        <?php
                            $query = "SELECT * FROM jet_details WHERE country = '$country' AND active='Yes' ;";
                            $execute = mysqli_query($conn, $query);
                            #$country_info = mysqli_fetch_array($execute);
                            #$Pending = mysqli_fetch_array($result);
                            if($execute->num_rows>0){
                                while($rd = mysqli_fetch_assoc($execute)){
                                    $jet_id = $rd['jet_id'];
                                    $jet_type = $rd['jet_type'];
                                    $timeSchedule = $rd['timeSchedule'];
                                    $price=$rd['Price']
                                    

                                    // $recruiter_id = $rd['recruiter_id'];
                                    // $post_id = $rd['post_id'];
                        ?>
                        <tr>
                            <td><?php echo $timeSchedule; ?></td>
                            <td><?php echo $jet_id; ?></td>
                            <td><?php echo $jet_type; ?></td>
                            <td><?php echo $price; ?></td>
                            <td><a href="./Peyment.html">Book</a></td>
                        </tr>
                        <?php
                            }
                        }else{
                            //echo "No Data to Show";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>