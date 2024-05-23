<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .signup-box {
            width: 300px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .signup-box input[type="text"],
        .signup-box input[type="email"],
        .signup-box input[type="password"],
        .signup-box select {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .signup-box input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
<center>
<div class="signup-box">
    <h2>Create Account</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="date" name="date_of_birth" placeholder="Date of Birth" required><br>
        <select name="country" required>
            <option value="">Select Country</option>
              <option value="rwa">Rwanda</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
        </select><br>
        <input type="submit" value="Sign Up">
    </form>
</div>

</body>
</html>





<center>
<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "ogp";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    $country = $_POST['country'];

    // SQL query to insert user into Users table
    $sql = "INSERT INTO Users (Username, Email, Password, DateOfBirth, Country) 
            VALUES ('$username', '$email', '$password', '$date_of_birth', '$country')";

    if ($conn->query($sql) === TRUE) {
        // User registered successfully
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

?>


<a href="login.php">Click here to login</a>