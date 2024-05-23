<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gaming Platform</title>
    <link rel="stylesheet" href="Reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="header"><h1>Online Gaming Platform</h1></div>
    <div class="header">
<a href="home.html">Home Page</a>
<a href="game.php">Games</a>
<a href="touranament.php">Touranment</a>
<a href="scores.php">Scores</a>
<a href="achievement.php">Achievement</a>
<a href="users.php">My profile</a>
<a href="logout.php">Logout</a>


    </div>
<?php

// Start session
session_start();
?>
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

// Get user ID from session
$user_id = $_SESSION['user_id'];

// SQL query to retrieve data of signed-in user from Users table
$sql = "SELECT * FROM Users WHERE UserID = $user_id";

// Execute query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>My Profile</h2>

<table>
    <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Country</th>
        <th>Profile Picture</th>
        <!-- Add other columns as needed -->
    </tr>
    <?php
    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Output data of the signed-in user
        $row = $result->fetch_assoc();
        echo "<tr>";
        echo "<td>" . $row["UserID"] . "</td>";
        echo "<td>" . $row["Username"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["DateOfBirth"] . "</td>";
        echo "<td>" . $row["Country"] . "</td>";
        echo "<td>" . $row["ProfilePicture"] . "</td>";
        // Output other columns as needed
        echo "</tr>";
    } else {
        echo "<tr><td colspan='6'>No data found</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Close connection
$conn->close();
?>

<style>
   img{
    margin: 20px;
    height: 300px;
    width: 283px;
   } 
.header a{

color:white;
background-color:blue ;
text-decoration: none;
padding: 15px;
margin: 40px;
border-radius: 8px;

}
.header a:hover
{
    background-color: red;
    color: white;
}

</style>







