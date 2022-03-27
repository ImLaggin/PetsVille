<?php 

session_start();
//return location if user logs out
if (!isset($_SESSION['username'])) {             
    header("Location: index.php");
}

?>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstap , jquery and javascript plugins and css -->
        <link rel="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">                
        <link rel="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

        <title>Petsville Homepage</title>
        
        <!-- External CSS -->
        <link rel="stylesheet" href="review.css">
        <link rel="stylesheet" href="header_styles.css">                                                    
        <link rel="stylesheet" href="contact.css">
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

        <!-- php used to display username of logged in customer -->
        <u><?php echo "<h1 style='color: black; font-size:50px'>Welcome To Petsville, " . $_SESSION['username'] . "</h1>"; ?></u><br><br>       <!-- Title -->

        <!--slide show-->
        <section style="background-color: rgba(255, 255, 255,0.3);">
            <h1 style="border-style: dashed; color:#273c75; font-size: 40px; text-align: center;">Here are Some Beauties We Rescued</h1><br>
            <img class="myslides" src="slideshowimg2.jpg" style="margin-left: 250px;margin-right: 40px; width: 70%; height: 50%;">
            <img class="myslides" src="slideshowimg3.jpg" style="margin-left: 250px;margin-right: 40px; width: 70%; height: 50%;">
            <img class="myslides" src="slideshowimg4.jpg" style="margin-left: 250px;margin-right: 40px; width: 70%; height: 50%;">
            <br>
            <center><p style="color: rgb(0, 0, 0); font-size: 50px; font-family:Arial, Helvetica, sans-serif ;"><u><b>BEFORE</b></u><<---------------->><u><b>AFTER</b></u></p></center>
        </section>
        <br>
        <!--automatic slide shift!-->       <!-- Javsscript function is used here to shift the slides -->
        <script>
            var i = 0;
            shift();
            function shift(){
                var a;
                var x= document.getElementsByClassName("myslides");
                for(a=0;a<x.length;a++){
                    x[a].style.display = "none";    //it displays the element with the given slide number.
                }
                i++;
                if(i>x.length){
                    i=1;
                }
                x[i-1].style.display="block";
                setTimeout(shift, 3000);            //Slide changes every 3 seconds 
            }
        </script>
        <br><br><br> 
        
        <!-- Explanation About the Website -->   
        <h1 style="color: black; text-align: center;border-style: dashed; font-size: 40px;">THE REASON YOU NEED TO INTRODUCE A NEW MEMBER TO YOUR FAMILY</h1><br>
        <p style="text-align: center; color: #2f3640; font-size: 30px;">Did you know that over 1,000 people per hour run a search right here looking to adopt a pet? Pet adoption is quickly becoming the preferred way to find a new dog, puppy, cat or kitten. Best of all, there are so many benefits when you adopt a dog or adopt a cat over buying. For instance, pet adoption will almost always be more affordable than buying a puppy for sale from a breeder or finding a kitten for sale from a litter. There are more benefits as well. Since pets in rescues and shelters usually come from a home where the owners ran out of money, got divorced, or had to move, it's common to find that the dogs and cats on our website are already housetrained, good with kids, or do well with other pets. People are finding out that buying a puppy for sale from a breeder isn't all it's cracked up to be, and the dogs and cats don't leave the organization without having their shots and being taken to the vet. That means less stress, and more savings! So what are you waiting for? Go find that perfect pet!</p>
        <hr id="hr2">       
        <br>
    </body>   
        
    <!-- Review section with 3 cards displaying reviews of 3 different customers -->  <!-- Review.css has the properties of these cards -->
    <center>           
        <section class="review">
            <!-- Review-1 -->
            <div class="card">
                <div class="card-image rimg-1"></div>
                <p>This organisation changed my life by giving me such a beautiful new member to my family."</p>
                <h2>- Aditya , Customer</h2>
            </div>
            <!-- Review-2 -->
            <div class="card">
                <div class="card-image rimg-2"></div>
                <p>"I am so greatful to petsville for giving me such an amazing pet that makes my day every single day!"</p>
                <h2>- Ajith , Customer</h2>
            </div>
            <!-- Review-3 -->
            <div class="card">
                <div class="card-image rimg-3"></div>
                <p>"The best decision I ever took was to bring a dog into my life and without petsville it would be just impossible to find the right dogbreed for the family."</p>
                <h2>- Mark , Customer</h2>
            </div>
        </section>
    </center>
    <br><br>
</html>