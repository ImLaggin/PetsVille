<?php 

session_start();
//return location if user logs out
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <title>Contact</title>
            
            <!-- External CSS -->
            <link rel="stylesheet" href="main.css"> 
            <link rel="stylesheet" href="header_styles.css">  
            <link rel="stylesheet" href="contact.css">  
    </head>
    
    <body>
        <!--navigation for the webpages-->      <!-- Header_styles.css has the properties of the navbar -->
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

        <!-- Some font properties and allignment styles were used here to group the text -->
        <h1 style="color: #006B38FF; text-align: left; font-size: 50px; padding-left: 70px; padding-right: 70px;"><b><u>The Men Behind The Curtain:</u></b></h1><br>
        <p style="text-align: left; color: #101820FF; font-size: 30px; padding-left: 70px; padding-right: 600px;">This story began 2 years ago when we met each other on the first day of college. We realized immediately that we were into pets. The idea of starting a pet rescue center was an accidental one when we found a dog stranded on the road and it was injured. We brought in the dog, cleaned it up and took it to the vet. This initial feeling of success and joy is what that has kept us going till date.<br><br>
        We are still in college and we intend to continue this even after we graduate. We feel that pets deserve the most love as they reciprocate what they get.We have a shelter in Bangalore which is run by us along with 3 of our associates. We have Rescued and given a new home to more than 30 pets in the past 2 years. We dont intend to stop, atleast not when we are at our peak.</p>
        <hr id="hr2">
        
        <!-- Some font properties and allignment styles were used here to group the text -->
        <h1 style="color: #006B38FF; text-align: left; font-size: 50px; padding-left: 775px; padding-right: 70px;"><b><u>Ways to Get in Touch:</u></b></h1><br>
        <p style="text-align: left; color: #101820FF; font-size: 30px; padding-left: 775px; padding-right: 70px;">There are multiple ways in which you can adopt pets from us.<br><br>Firstly, you can come over to our facility to have a personalized experience with the pet, meet them, get to know their habbits and feel the atmosphere change when you are with them. 
        <br><br>The other way is through this  website where you can see the pets listed in our <a href="Pets.php" style="color: red; font-size: 35px;">"Pets"</a> page and then submit yoour request to adopt them. we will personally go through all the recieved requests and contact the people to finalize the adoption along with the proper documentation.</p>
        <hr id="hr2"> 

        <!-- Some font properties and allignment styles were used here to group the text -->
        <h1 style="color: #006B38FF; text-align: center; font-size: 50px; padding-left: 70px; padding-right: 70px;"><b><u>Our Social Life:</u></b></h1><br>
        <p style="text-align: center; color: #101820FF; font-size: 30px; padding-left: 100px; padding-right: 100px;"> We are super active on all the social media links given below. Any queries you have or if you want to  help us bring happiness in these animal's live, you can come in touch with us. We read anything and everything you send us and nothing goes unnoticed.</p>
        <br><br><br>

        <!-- Cards Displaying picture and quotes given by us -->      <!-- main.css and contact.css has the properties of the cards -->
        <section class="container">
            <!-- card-1 -->
            <div class="contact">
                <div class="contact-image img-1"></div>        
                <p><i>"My objective for starting this adoption center is to help as many animals as i can. I have this bond with every animal i am interacting with, which has inspired me to help them more."<br><br>- Arjun A Bhargav , Co-Founder Petsville</i></p>        
            </div>
            <!-- card-2 -->
            <div class="contact">
                <div class="contact-image img-2"></div>        
                <p><i>"My objective for starting this adoption center is to help animals find a new home. Animals that are in need of help will be helped and given a family which will fill them with exitement and joy ."<br><br>- Akshay MS , Co-Founder Petsville</i></p>    
            </div>
        </section>
        <br><br><br>

        <!-- a divison containing links to our social media profiles -->        <!-- contact.css has the properties of this section of links -->
        <center> 
            <div class="socialmedia">
                <a href="https://www.instagram.com/the_liger_king_/" class="fa fa-instagram fa-2x" style="color: purple; text-align: left; padding-left: 100px; padding-right: 400px; "> Instagram</a>
                <a href="https://www.instagram.com/4k5h4y_m5/" class="fa fa-instagram fa-2x" style="color: purple; text-align: right; padding-right: 100px; "> Instagram</a>
                <br><br>
                <a href="https://www.facebook.com/arjunabhargav1/" class="fa fa-facebook fa-2x" style="padding: left 200px; padding-right: 700px; color: blue; padding-left: 100px; padding-right: 500px;"> Facebook</a>
                <a href="https://www.facebook.com/akshaymambakkamsridharan/" class="fa fa-facebook fa-2x" style="padding: left 200px; padding-right: 700px; color: blue; padding-right: 100px; "> Facebook</a>
                <br><br>
                <a href="https://www.linkedin.com/in/arjun-bhargav-abb06191/" class="fa fa-linkedin fa-2x" style="padding: left 200px; padding-right: 700px; color: darkblue; padding-left: 100px; padding-right: 400px; "> Linkedin</a>
                <a href="https://www.linkedin.com/in/akshay-m-2aa1bb140/" class="fa fa-linkedin fa-2x" style="padding: left 200px; padding-right: 700px; color: darkblue; padding-right: 100px; "> Linkedin</a>
                <br><br>
                <a href="https://twitter.com/ArjunAb12923151" class="fa fa-twitter fa-2x" style="padding: left 200px; padding-right: 700px; color: darkcyan; padding-left: 100px; padding-right: 500px;"> Twitter</a>
                <a href="https://twitter.com/AkshayM93129453" class="fa fa-twitter fa-2x" style="padding: left 200px; padding-right: 700px; color: darkcyan; padding-right: 100px; "> Twitter</a>
                <br><br>
                <a href="https://www.youtube.com/channel/UC_DpSwSfpW6UM_6I0kkQmcQ" class="fa fa-youtube fa-2x" style="padding: left 200px; padding-right: 700px; color: red; padding-left: 100px; padding-right: 400px; "> Youtube</a>
                <a href="https://www.youtube.com/channel/UCOIAzaByiw_w8F02MiIc_ew" class="fa fa-youtube fa-2x" style="padding: left 200px; padding-right: 700px; color: red; padding-right: 100px; "> Youtube</a>
            </div>     
        </center>

        <hr id="hr2">
        <br>

        <!-- Some font properties and allignment styles were used here to group the text -->
        <h1 style="color: #006B38FF; text-align: center; font-size: 50px; padding-left: 70px; padding-right: 70px;"><b><u>Other Ways to Get in Touch With us:</u></b></h1><br><br>
        <p style="text-align: center; color: #101820FF; font-size: 30px; padding-left: 100px; padding-right: 100px;"><u><b>Address:</u></b> #123, Wall street , National Market , Bangalore , 560000<br><u><b>Contact Number:</u></b> 9880813561  (OR)  9880813562</p> 

        <br>
    </body>    
</html>