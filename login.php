<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    
    $select = "SELECT *FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

       $row = mysqli_fetch_array($result);

       if($row['user_type'] == 'admin'){

        $_SESSION['admin_name'] = $row['name'];
        $_SESSION['user_type'] = 'admin';
        header('location: admin.php');
        header('location:admin.php');

       }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_type'] = 'user';
        header('location: product.php');
        header('location:user.php');


    }
    }else{
       $error[] = 'incorrect email or password!';
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
<!---login-page-->
<div class="form-container">
    <form action="" method="post">
        <h3>login now</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="enter you email">
        <input type="password" name="password" required placeholder="enter you password">
        <input type="submit" name="submit" value="login now" class="form-btn">
        <p>don't have an account? <a href="register.php">register now</a></p>
    </form>
</div>
</body>
</html>