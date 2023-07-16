<?php

include 'process.php';

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
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/product.php">Products</a></li>
                    <li><a href="/about.php">About</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                    <li><a href="/login.php">Login</a></li>
                </ul>

            </nav>
        </div>
       
    </div>
<!---Login-page-->
<div class="login-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>
                    <form id="LoginForm" action="process.php" method="POST">
                       <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" name="login" class="btn">Login</button>
                        <a href="">Forgot password ?</a>
                    </form>
                    <form id="RegForm" action="process.php" method="POST">
                          <input type="text" name="username" placeholder="Username">
                          <input type="email" name="email" placeholder="Email">
                          <input type="password" name="password" placeholder="Password">
                          <button type="submit" name="register" class="btn">Register</button>
                    </form>
                </div>
            </div>
         </div>
     </div>
    </div>      
</div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Comfort Store. All rights reserved.</p>
        </div>
    </footer>
    <!---js for toggle menu-->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
           {
            MenuItems.style.maxHeight = "0px"
        }
        }
    </script>
    <!---js for toggle form-->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var indicator = document.getElementById("indicator");

            function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                indicator.style.transform = "translateX(100px)";
                
            }

            function login(){

                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                indicator.style.transform = "translateX(0px)";
                
            }

    </script> 
</body>
</html>