<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .login-box {
            width: 300px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .login-box input[type="submit"] {
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

<div class="login-box">
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>

    <a href="account.php">Create account</a>
    <?php
    if (isset($login_error)) {
        echo '<p class="error">' . $login_error . '</p>';
    }
    ?>
</div>

</body>
</html><center><b style="color: red;">
<?php
$conn =mysqli_connect("localhost","root","","ogp");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to retrieve user from Users table
    $sql = mysqli_query($conn,"SELECT * FROM Users WHERE Username='$username' AND Password='$password'");
    $f=mysqli_fetch_array($sql);
    if(is_array($f)){
        // Set session variables
        $_SESSION['loggedin'] = $f['Username'];
        $_SESSION['usernames'] = $f['Password'];
        $_SESSION['user_id']=$f['UserID'];

        if(  $_SESSION['loggedin']==$username and $_SESSION['usernames']==$password){
        header("Location: home.html");
        
    } }else {
        echo "Invalid username or password";
    }
}

?>



<?php
// Close connection
$conn->close();
?>
