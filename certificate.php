<?php 

session_start();
//return location if user logs out
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Pulgin used for Angularjs Functions -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

        <title>Adoption Certificate</title>
        
        <!-- External CSS -->
        <link rel="stylesheet" href="stylephp2.css">
        <link rel="stylesheet" href="header_styles.css">
    </head>

    <body>
        <!--navigation for the webpages-->      <!-- Header_styles.css has the properties of the navbar -->
        <header> 
            <img class="logo" src="logo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="petsville.php">Home</a></li>
                <li><a href="Pets.php">Pets</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="faqs.php">FAQ's</a></li>
                <li><a href="logout.php">Log-out</a></li>
                </ul>          
            </nav>
        </header>
        
        <p style="color:  #006B38FF; text-align: center; font-size: 35px;"><b>Congrats!!! You are one step closer to welcoming your partner for a lifetime along.</b>
        <br><br>
        <u><h1>Enter The Name That Should Appear on your Certificate.</h1></u>
        <br>
        <div ng-app="myApp" ng-controller="myCtrl">                                                 <!-- ng-app directive is used to define the root element of an AngularJS application -->
                                                                                                    <!-- ng-controller directive attaches a controller class to the view -->
            <h3>First Name: <input type="text" ng-model="firstName" size="25px"><br></h3>           <!-- The ng-model directive binds the value of HTML controls to application data -->
            <h3>Last Name:  <input type="text" ng-model="lastName" size="26px"><br></h3>
            <br>
                <!-- Displays the adoption certificate -->          <!-- stylephp2.css has the properties of the certificate -->
                <section class="certificate">
                    <div class="certi">
                        <div class="certi-image img-1"></div>
                        <div class="text"><h1>{{firstName + " " + lastName}}</h1></div>             <!-- a function that displays the full name of the user on the certificate -->  
                    </div>
                </section>      
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    
        <center><b><h2>*You can take a screenshot of the Certificate. An official one will be sent to your Registered E-Mail after the process is completed.*</h2></b></center>
               
        <!-- the javascript function to invoke myApp and myCtrl functions and to bind the values -->
        <script>
        var app = angular.module('myApp', []);                      //myCtrl is a JavaScript function
        app.controller('myCtrl', function($scope) {                 //ng-model bind the input fields to the controller properties
            $scope.firstName= "";
            $scope.lastName= "";
        });
        </script>

        </body>
</html>
