<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $suggestions = isset($_POST["suggestions"]) ? $_POST["suggestions"] : "";

    $sql = "INSERT INTO conatctus (email, contact, city, state, suggestions) 
            VALUES ('$email', '$contact', '$city', '$state','$suggestions')";

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
    <title>Contact Us</title>
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
    <div>
        <div class="form_container">
            <h2>Interested in partnering with us?</h2>
            <div>
                <h2>Conatct us</h2>
                <h2>Fill the form below to send your inquiry. Suggestions or questions are welcome.
                </h2>
            </div>
            <form action="" method="POST">
                <label for="email">Email ID:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="contact">Phone Number:</label>
                <input type="tel" id="phone" name="contact" required><br><br>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required><br><br>

                <label for="state">State:</label>
                <input type="text" id="state" name="state" required><br><br>

                <label for="suggestions">Suggestions:</label>
                <textarea id="comments" name="suggestions" rows="4" cols="40"></textarea>
                <br>
                <br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>