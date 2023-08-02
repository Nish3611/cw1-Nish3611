<?php

@include 'config.php';

if(isset($_POST['submit'])){


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT *FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';  

    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
           $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
           mysqli_query($conn, $insert);
           header('location:login.php');
        }
    }
};


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
                    <!-- <li><a href="product.php">Products</a></li> -->
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                
                </ul>

            </nav>
        </div>
       
    </div>
<!---register-page-->
<div class="form-container">
    <form action="" method="post">
        <h3>register now</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder="enter you name">
        <input type="email" name="email" required placeholder="enter you email">
        <input type="password" name="password" required placeholder="enter you password">
        <input type="password" name="cpassword" required placeholder="confirm your password">
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login.php">login now</a></p>
    </form>
</div>
</body>
</html>