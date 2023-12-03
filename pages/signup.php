

<?php
session_start();
include("connection.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $emialid=$_POST["emialid"];
    $password =$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $gender=$_POST["gender"];


    $sql = "INSERT INTO signup (username, emialid, password, confirmpassword, gender) 
    VALUES ('$username', '$emialid', '$password', '$confirmpassword','$gender')";

    if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>

<body>
    <div id="nav_heading">
    <h1>Your Fashion Hub</h1>
    </div>
    <div class="nav_bar">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="./about.php">About Us</a></li>
            <li><a href="./gallary.php">Gallary</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
            <!-- <li><a href="./signin.php">SignIn</a></li> -->
            <li><a href="./signup.php">SignUp</a></li>
        </ul>
    </div>
    <div class="sigIn_container">
        <h2>Sign Up</h2>
        <form action="#" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="emialid">Email Id:</label>
            <input type="email" id="emialid" name="emialid" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" id="password" name="confirmpassword" required>

            <label for="gender">Gender:</label>
            <input type="checkbox" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="checkbox" id="female" name="gender" value="female">
            <label for="female">Female</label><br><br>

            <input type="submit" value="Sign In">
        </form>
    </div>
</body>

</html>