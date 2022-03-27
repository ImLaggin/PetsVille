<?php 
    //contains the  server, root and database name used   
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "login_and_registration";
    //connecting the  following with the server
    $conn = mysqli_connect($server, $user, $pass, $database);
    //shows alert if the connetion fails
    if (!$conn) {
        die("<script>alert('Connection Failed.')</script>");
    }

?>