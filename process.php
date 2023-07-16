    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "comfortstore";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the user already exists in the register_credentials table
        $query = "SELECT * FROM register_credentials WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "Username already exists!";
        } else {
            // Insert the new user into the register_credentials table
            $query = "INSERT INTO register_credentials (username, email, password) VALUES ('$username', '$email', '$password')";

            if (mysqli_query($conn, $query)) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }



    // Login user
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Retrieve the hashed password from the database for the given username
        $query = "SELECT password FROM register_credentials WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];
    
            // Verify the entered password against the hashed password using password_verify()
            if (password_verify($password, $hashedPassword)) {
                echo "Login successful!";
            } else {
                echo "Invalid username or password!";
            }
        } else {
            echo "Invalid username or password!";
        }
    }
    
    // Close the database connection
    mysqli_close($conn);
    ?>
