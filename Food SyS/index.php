

<?php

    require_once('./dbh.php');

    $query="SELECT * FROM food;";
    $execute=mysqli_query($conn,$query);
    $title = array();
    $price = array();
    $discription = array();
    $id = array();
    $image = array();
    while($FoodItems=mysqli_fetch_array($execute)){
        array_push($title,$FoodItems['TITLE']);
        array_push($price,$FoodItems['PRICE']);
        array_push($discription,$FoodItems['DESCRIPTION']);
        array_push($id,$FoodItems['FOOD_ID']);
        array_push($image,$FoodItems['IMAGE_NAME']);
    }

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
                        <a href="Team.html">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/pizza.jpeg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpeg"alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpeg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $image[0]); ?>" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4><?php echo $title[0]; ?></h4>
                    <p class="food-price">$<?php echo $price[0]; ?></p>
                    <p class="food-detail">
                    <?php echo $discription[0]; ?>
                    </p>
                    <br>

                    <a href="burgerorder.php?id=<?php echo $id[0]; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>
                <!--Pizza Done-->

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $image[1]); ?>" alt="Chicken Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                <h4><?php echo $title[1]; ?>
                    <p class="food-price">$<?php echo $price[1]; ?></p>
                    <p class="food-detail">
                    <?php echo $discription[1]; ?>
                    </p>
                    <br>

                    <a href="burgerorder.php?id=<?php echo $id[1]; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $image[2]); ?>" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                <h4><?php echo $title[2]; ?>
                    <p class="food-price">$<?php echo $price[2]; ?></p>
                    <p class="food-detail">
                    <?php echo $discription[2]; ?>
                    </p>
                    <br>

                    <a href="burgerorder.php?id=<?php echo $id[2]; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $image[3]); ?>" alt="Beef Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                <h4><?php echo $title[3]; ?>
                    <p class="food-price">$<?php echo $price[3]; ?></p>
                    <p class="food-detail">
                    <?php echo $discription[3]; ?>
                    </p>
                    <br>

                    <a href="burgerorder.php?id=<?php echo $id[3]; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $image[4]); ?>" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                <h4><?php echo $title[4]; ?>
                    <p class="food-price">$<?php echo $price[4]; ?></p>
                    <p class="food-detail">
                    <?php echo $discription[4]; ?>
                    </p>
                    <br>

                    <a href="burgerorder.php?id=<?php echo $id[4]; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $image[5]); ?>" alt="Chicken Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                <h4><?php echo $title[5]; ?>

                    <p class="food-price">$<?php echo $price[5]; ?></p>
                    <p class="food-detail">
                    <?php echo $discription[5]; ?>
                    </p>
                    <br>

                    <a href="burgerorder.php?id=<?php echo $id[5]; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="foods.html">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
 
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
   
    <!-- footer Section Ends Here -->

</body>
</html>