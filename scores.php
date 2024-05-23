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


    </div><?php

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

// SQL query to retrieve data from Scores table with information from Users and Games tables
$sql = "SELECT Scores.ScoreID, Users.Username, Games.Title, Scores.Score, Scores.DateAchieved, Scores.ReplayLink
        FROM Scores
        INNER JOIN Users ON Scores.UserID = Users.UserID
        INNER JOIN Games ON Scores.GameID = Games.GameID";

// Execute query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores Data</title>
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

<h2>Scores Data</h2>

<table>
    <tr>
        <th>ScoreID</th>
        <th>Username</th>
        <th>Game Title</th>
        <th>Score</th>
        <th>Date Achieved</th>
        <th>Replay Link</th>
    </tr>
    <?php
    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ScoreID"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Title"] . "</td>";
            echo "<td>" . $row["Score"] . "</td>";
            echo "<td>" . $row["DateAchieved"] . "</td>";
            echo "<td>" . $row["ReplayLink"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>0 results</td></tr>";
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







