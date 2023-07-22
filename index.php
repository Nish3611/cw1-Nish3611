<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfort Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        /* Testimonial */
.testimonial {
    padding-top: 100px;
  }
  
  .testimonial .small-test {
    margin-top: 60px;
  }
  
  .testimonial .row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
  }
  
  .testimonial .col-3 {
    text-align: center;
    padding: 40px 20px;
  }
  
  .testimonial .col-3 i {
    color: brown;
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .testimonial .col-3 p {
    font-size: 16px;
    color: black;
    margin-bottom: 20px;
  }
  
  .testimonial .col-3 .rating {
    margin-bottom: 20px;
  }
  
  .testimonial .col-3 .rating i {
    color: brown;
  }
  
  .testimonial .col-3 img {
    width: 80px;
    height: 80px;
    margin-top: 20px;
    border-radius: 50%;
  }
  
  .testimonial .col-3 h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
  }
/* Footer styles */
footer {
    background-color: #333;
    padding: 20px;
    color: #fff;
    text-align: center;
  }
  
  .footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
  }
  
  .footer-content img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
  }
  
  .footer-content p {
    font-size: 14px;
    margin: 0;
  }
  
  .social-icons a {
    color: #fff;
    font-size: 20px;
    margin: 0 10px;
  }
  
  .footer-bottom p {
    font-size: 12px;
    margin-top: 20px;
  }
  
  

/* Additional styles for responsiveness */
@media (max-width: 768px) {
    .footer-content img {
        width: 40px;
        height: 40px;
    }
}
    </style>
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
                    <!-- <li><a href="/product.php">Products</a></li> -->
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
    
            </nav>
          
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Comfort with Style<br>BackPack!</h1>
                <p>Discover top designer bag leading towards comfortness with extra features which work like luggage.</p>
                <a href="" class="button">Explore it &#9758;</a> 
            </div>
            <div class="col-2">
                <div class="image-container">
                    <img src="images/image1.png" alt="image1" class="image">
                    <img src="images/backpack.png" alt="image 1 hover" class="image-hover">
                </div>
            </div>
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

<section class="about-home">
    <div class="image">
        <img src="images/stylish.jpg" alt="Stylish Bags">
    </div>
    <div class="content">
        <h3 class="title3">About Us</h3>
        <p>Welcome to Comfort Store Bag! At Comfort Store Bag, we understand the importance of combining fashion with functionality. That's why we have curated a collection of bags that effortlessly blend practicality.</p>
        <p>Comfort Store Bag was born out of a passion for offering high-quality bags that enhance your daily life. We began our journey with a simple idea: to create bags that make your everyday routines more convenient.</p>
    </div>   
    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-test">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nobis adipisci nesciunt cum exercitationem reprehenderit nulla recusandae! Eius distinctio deleniti earum, iure sit reiciendis. Vel eius laboriosam dolorum nihil ex?</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                </div>
                <img src="images/user-1.jpg">
                <h3>David Paul</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nobis adipisci nesciunt cum exercitationem reprehenderit nulla recusandae! Eius distinctio deleniti earum, iure sit reiciendis. Vel eius laboriosam dolorum nihil ex?</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                </div>
                <img src="images/user-2.jpg">
                <h3>Laurel Fisher</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nobis adipisci nesciunt cum exercitationem reprehenderit nulla recusandae! Eius distinctio deleniti earum, iure sit reiciendis. Vel eius laboriosam dolorum nihil ex?</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                </div>
                <img src="images/user-3.jpg" width=30%>
                <h3>Jean Baker</h3>
                </div>
            </div>
        </div>
    </div> 
</section>

<footer>
    <div class="footer-content">
        <img src="images/comfort.png" alt="Comfort Store Logo">
        <p>Purpose to make the benefits of backpack.</p>
    </div>
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Comfort Store. All rights reserved.</p>
    </div>
</footer>

</body>
</html>