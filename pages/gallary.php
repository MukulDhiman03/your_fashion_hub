

<!-- <?php
session_start();
include("includes/connection.php")
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../styles/index.css">
    <style>
            .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

    </style>
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
    <div class="gallery">
    <img src="../img/pic1.avif" alt="Image 1">
    <img src="../img/pic2.avif" alt="Image 2">
    <img src="../img/pic3.avif" alt="Image 3">
    <img src="../img/pic4.avif" alt="Image 3">
    <img src="../img/pic5.avif" alt="Image 3">
    <img src="../img/pic7.avif" alt="Image 3">
    <img src="../img/pic8.avif" alt="Image 3">
    <img src="../img/pic13.avif" alt="Image 3">
    <img src="../img/pic2.avif" alt="Image 2">
    <img src="../img/pic10.avif" alt="Image 3">
    <img src="../img/pic18.avif" alt="Image 3">
    <img src="../img/pic17.avif" alt="Image 3">
    <img src="../img/pic6.avif" alt="Image 3">
    <img src="../img/pic14.avif" alt="Image 3">
    <img src="../img/pic15.avif" alt="Image 3">
    <img src="../img/pic19.avif" alt="Image 3">
    <img src="../img/pic20.avif" alt="Image 3">
    <img src="../img/pic16.avif" alt="Image 3">

    <!-- Add more images as needed -->
</div>
</div>

</body>

</html>