<?php

session_start();

// Check if the user is not logged in as an admin, redirect to login page
if (!isset($_SESSION['admin_name'])) {
    header('location: login.php');
    exit();
}

// Include the config file to connect to the database
@include 'config.php';

// Function to delete a user by their ID
function deleteUser($conn, $user_id) {
    $deleteQuery = "DELETE FROM user_form WHERE id = '$user_id'";
    mysqli_query($conn, $deleteQuery);
}

// Function to modify a user's details by their ID
function modifyUser($conn, $user_id, $name, $email, $user_type) {
    $updateQuery = "UPDATE user_form SET name = '$name', email = '$email', user_type = '$user_type' WHERE id = '$user_id'";
    mysqli_query($conn, $updateQuery);
}

// Check if a user is selected for modification or deletion
if (isset($_POST['selected_user_id'])) {
    $selectedUserId = $_POST['selected_user_id'];
    $action = $_POST['action'];

    if ($action === 'delete') {
        deleteUser($conn, $selectedUserId);
    } elseif ($action === 'modify') {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $user_type = $_POST['user_type'];

        modifyUser($conn, $selectedUserId, $name, $email, $user_type);
    }
}

// Check if the "Add User" form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
  $newName = mysqli_real_escape_string($conn, $_POST['new_name']);
  $newEmail = mysqli_real_escape_string($conn, $_POST['new_email']);
  $newPassword = md5($_POST['new_password']); // Hash the password using MD5
  $newUserType = $_POST['new_user_type'];

  // Insert new user into the database
  $insertQuery = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$newName', '$newEmail', '$newPassword', '$newUserType')";
  mysqli_query($conn, $insertQuery);

  // Redirect or perform any necessary actions after adding the user
  // For example: header('location: admin.php');
}


// Fetch all users from the database
$usersQuery = "SELECT * FROM user_form";
$usersResult = mysqli_query($conn, $usersQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        font-family: Arial, sans-serif;
    line-height: 1.6;

  .admin-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
    font-size: 36px;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 12px 15px;
    border-bottom: 1px solid #ccc;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f9f9f9;
  }

  form button {
    padding: 8px 20px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
  }

  form button[value="modify"] {
    background-color: #007bff; /* Blue */
  }

  form button[value="delete"] {
    background-color: #dc3545; /* Red */
  }

  .btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
  }

  .btn:hover {
    background-color: #0056b3;
  }
  .add-user-button {
    padding: 8px 20px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
    background-color: #28a745; /* Green */
    transition: background-color 0.3s ease-in-out;
}

.add-user-button:hover {
    background-color: #218838; /* Darker green on hover */
}

    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Welcome Admin: <?php echo $_SESSION['admin_name'] ?></h1>
        <h2>Users List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
            <?php while ($user = mysqli_fetch_assoc($usersResult)) { ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['user_type']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="selected_user_id" value="<?php echo $user['id']; ?>">
                            <input type="hidden" name="name" value="<?php echo $user['name']; ?>">
                            <input type="hidden" name="email" value="<?php echo $user['email']; ?>">
                            <select name="user_type">
                                <option value="user" <?php echo ($user['user_type'] === 'user') ? 'selected' : ''; ?>>user</option>
                                <option value="admin" <?php echo ($user['user_type'] === 'admin') ? 'selected' : ''; ?>>admin</option>
                            </select>
                            <button type="submit" name="action" value="modify">Modify</button>
                            <button type="submit" name="action" value="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
       <!-- Add User Section -->
<h2>Add User</h2>
<form action="" method="post">
    <label for="new_name">Name:</label>
    <input type="text" id="new_name" name="new_name" required>
    
    <label for="new_email">Email:</label>
    <input type="email" id="new_email" name="new_email" required>

    <label for="new_password">Password:</label>
    <input type="password" id="new_password" name="new_password" required>
    
    <label for="new_user_type">User Type:</label>
    <select id="new_user_type" name="new_user_type">
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select>
    
    <button type="submit" name="action" value="add" class="add-user-button">Add User</button>

</form>

        <a href="logout.php" class="btn">Logout</a>
    </div>
    
</body>
</html>
