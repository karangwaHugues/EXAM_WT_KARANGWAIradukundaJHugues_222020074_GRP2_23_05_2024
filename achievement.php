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

// SQL query to retrieve data from Achievement table with information from Users and Games tables
$sql = "SELECT Achievement.AchievementID, Users.Username, Games.Title, Achievement.AchievementName, Achievement.Description, Achievement.DateEarned, Achievement.AchievementIcon, Achievement.Rarity
        FROM Achievement
        INNER JOIN Users ON Achievement.UserID = Users.UserID
        INNER JOIN Games ON Achievement.GameID = Games.GameID";

// Execute query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievement Data</title>
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

<h2>Achievement Data</h2>
<b>
<table>
    <tr>
        <th>AchievementID</th>
        <th>Username</th>
        <th>Game Title</th>
        <th>Achievement Name</th>
        <th>Description</th>
        <th>Date Earned</th>
        <th>Achievement Icon</th>
        <th>Rarity</th></b>
    </tr>
    <?php
    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["AchievementID"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Title"] . "</td>";
            echo "<td>" . $row["AchievementName"] . "</td>";
            echo "<td>" . $row["Description"] . "</td>";
            echo "<td>" . $row["DateEarned"] . "</td>";
            echo "<td>" . $row["AchievementIcon"] . "</td>";
            echo "<td>" . $row["Rarity"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>0 results</td></tr>";
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







