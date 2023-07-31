<?php
session_start();

if (!isset($_SESSION['user_type'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfort Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="whole">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logoo.png" width="90px">
                <img src="images/comfort.png" alt="Another image" width="90px">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
    
            </nav>
        </div>
       
    </div>
 </div>   
    <!-- features Products -->
    <div class="small-container">
        <h2 class="title">Trending Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product1.jpg">
                <h4>Blue Laptop Bag</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$30.00</p>
            </div>
            <div class="col-4">
                <img src="images/product2.jpg">
                <h4>hike bag</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product3.jpg">
                <h4>Classy bag</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$45.00</p>
            </div>
            <div class="col-4">
                <img src="images/product4.jpg">
                <h4>complete package</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>
    <section class="NewArrival">
    <div class="container">
        <h2 class="title2">New Arrival</h2>
        <div class="row1">
            <div class="col-1 center">
                <img src="images/NewProduct.jpg">
                <h3>New product</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>$60.00</p>
            </div>
        </div>
    </div>
</section>
</body>
</html>