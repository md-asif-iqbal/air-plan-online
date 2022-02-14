<?php
    $food_id = $_GET['id'];
    require_once('./dbh.php');

    $query = "SELECT * FROM food WHERE FOOD_ID = $food_id;";
    $execute = mysqli_query($conn, $query);
    $foodTable = mysqli_fetch_array($execute);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html" title="Logo">
                    <img src="images/rs.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="order.php?id=<?php echo $food_id; ?>" class="order" method="POST">
                
                <fieldset>
                    <legend>Your Food</legend>

                    <div class="food-menu-img">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode( $foodTable['IMAGE_NAME']); ?>" alt="Burger" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3 ><?php echo $foodTable['TITLE']; ?></h3>
                        <p class="food-price">$<?php echo $foodTable['PRICE']; ?></p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter your name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g.01xxxxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g.asifxxxxxxx.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    
    <!-- footer Section Ends Here -->

</body>
</html>