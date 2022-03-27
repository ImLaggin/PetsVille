<?php 

session_start();
//return location if user logs out
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Pets</title>
        
        <!-- External CSS -->
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="header_styles.css">
    </head>

    <body>
    <!-- Headder ie Navbar -->      <!-- Header_styles.css has the properties of the navbar -->
        <header> 
            <img class="logo" src="logo.png" alt="logo">
            <nav>
                <!-- Unordered List Used -->
                <ul class="nav_links">
                    <li><a href="petsville.php">Home</a></li>
                    <li><a href="Pets.php">Pets</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="faqs.php">FAQ's</a></li>
                    <li><a href="logout.php">Log-out</a></li>
                </ul>          
            </nav>
        </header>
        <br><br>

        <!-- Cards Displaying each pet along with its name and details -->      <!-- main.css has the properties of the cards -->
        <section class="container">
            <!-- Pet-1 -->
            <div class="card">
                <div class="card-image img-1"></div>
                <h2>Labrador (Larry)</h2>
                <p>Larry was Rescued by us a few days ago from Jayanagar. He is a Healthy and Active Chap Who Will Keep You Engaged All the Time. He is Also Independent and Very Brave.</p>
                <a href="custdetails.php">ADOPT !!!</a>
            </div>
            <!-- Pet-2 -->
            <div class="card">
                <div class="card-image img-2"></div>
                <h2>Golden Retriever (Shaun)</h2>
                <p>Shaun Was Rescued from the Streets Hebbal a few months ago. He is a Shy Guy Until He Gets to Know You. He is Full of Joy and is Truly a Man's(and Women's)Best Friend.</p>
                <a href="custdetails.php">ADOPT !!!</a>
            </div>
            <!-- Pet-3 -->
            <div class="card">
                <div class="card-image img-3"></div>
                <h2>Rottweiler (Sugar)</h2>
                <p>Sugar Was Brought to us by her Old Owners as They Were moving Abroad. She is a Lioness, fearless yet kind and will protect you at any cost. Your Perfect Friend cum Bodyguard.</p>
                <a href="custdetails.php">ADOPT !!!</a>
            </div>
            <!-- Pet-4 -->
            <div class="card">
                <div class="card-image img-4"></div>
                <h2>Beagle (Boomer)</h2>
                <p>Boomer is the Leader of This Pack as he Was One of the First Dogs Rescued by us. He is Super Friendly, Caring and Smart, the Ideal Companion of Any Family. </p>
                <a href="custdetails.php">ADOPT !!!</a>
            </div>
            <!-- Pet-5 -->
            <div class="card">
                <div class="card-image img-5"></div>
                <h2>German Shepherd (Charlie)</h2>
                <p>Charle was Rescued by us From Yelahanka. He is the Smallest Fluff-Ball Anyone Might Find. He is Super Possessive and Will Never Leave You Alone at any Cost.</p>
                <a href="custdetails.php">ADOPT !!!</a>
            </div>
        </section>
    </body>
</html>