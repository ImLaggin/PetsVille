<?php 

session_start();
//return location if user logs out
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Details</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="custdetails.css" media="all">
    <link rel="stylesheet" href="stylephp.css" media="all">

    <!-- Plugin for Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <img src="petsvillelogo.jpg" style="align-items:left; width:700px; height: 615px;">
    <!-- stylephp.css contains the properties of this container class along with some bootstrap atributes -->
    <!-- POST method is used in this document -->
    <div class="container">
        <form action="send.php" method="POST" class="form">
            <!-- Taking in name -->
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
            </div>
            <!-- Taking in the email -->
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input <?= $invalid_class_name ?? "" ?> type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com" tabindex="2" required>
            </div>
            <!-- Taking in Contact Number -->
            <div class="form-group">
                <label for="subject" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number" tabindex="3" required>
            </div>
            <!-- Taking in the Reason they want to adopt the pet -->
            <div class="form-group">
                <label for="message" class="form-label">Reason</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Reason you want to Adopt the Pet" tabindex="4"></textarea>
            </div>
            <!-- Submit action button -->
            <div>
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>
            <div>
                <br>
                <!-- A link that redirects users to the pets page if they are not interested -->
                <a href="pets.php"><input type="back" value="Return Back To Pets" class="btn" name="back"></a>
            </div>
        </form>
    </div>
</body>

</html>