<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texas Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/texas.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
</head>
<body>
    <header>
        <div id="hamburger" class="hamburger" onclick="toggleNav(); myRotate(this);">
            <hr class="hr1">
            <hr class="hr2">
            <hr class="hr3">
        </div>
        <div class="minimize" id="minimize">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="story.php">Story</a>
            <a href="travel.php">Travel</a>
            <a href="projects.php">Projects</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav top-links">
                        <a class="navbar-brand text-white top-link home" href="index.php">Home</a>
                        <a class="nav-link text-white top-link about" href="about.php">About</a>
                        <a class="nav-link text-white top-link contact" href="contact.php">Contact</a>
                        <a class="nav-link text-white top-link story" href="story.php">Story</a>
                        <a class="nav-link text-white top-link travel" href="travel.php">Travel</a> 
                        <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<a class='nav-link text-white top-link profile' href='profile.php'>Profile page</a>";
                                echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                        <p class="title">Texas</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="texas-top-section" id="top">
            <h2 class="texas-header">Texas</h2>
        </section>
        <section class="section-selection">
            <form  action="">
                <label for="">Choose a Section of Michigan:  </label>
                <br>
                <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                    <option value="all">All</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Seaworld">Seaworld</option>
                    <option value="Discovery">Discovery Cove</option>
                    <option value="Six">Six Flags Fiesta Texas</option>
                    <option value="San">San Antonio</option>
                </select>
            </form>
        </section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="tennessee.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="utah.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/texas-images/texas.jpeg" onclick="image(1)" alt="This is a picture of me sitting on a fence during our walk to walmart in the suburbs of San Antonio Texas. We were walking in a neighborhood with nice homes and golf courses.">                    
                    <img class="box-image" src="states-images/texas-images/hotel3.jpeg" onclick="image(2)" alt="This is an image of the pool of my hotel.">
                    <img class="box-image" src="states-images/texas-images/hotel2.jpeg" onclick="image(3)" alt="This is a picture of me in my swimsuit on a photoshoot outside my hotel.">                    
                    <img class="box-image" src="states-images/texas-images/hotel4.jpeg" onclick="image(4)" alt="This is an image of me standing outside my hotel holding two dorsal fins from an orca.">
                    <img class="box-image" src="states-images/texas-images/hotel.jpeg" onclick="image(5)" alt="This is a picture of me outside my hotel room enjoying the landscaping outside."> 
                    <img class="box-image" src="states-images/texas-images/seaworld3.jpeg" onclick="image(6)" alt="This is a picture of me of my first visit at Seaworld in Texas.">
                    <img class="box-image" src="states-images/texas-images/great-white.jpeg" onclick="image(7)" alt="This is a picture of me standing in front of the Great White Roller Coaster.">
                    <img class="box-image" src="states-images/texas-images/seaworld2.jpeg" onclick="image(8)" alt="This is a picture standing at the entrance of Seaworld's park holding a map.">
                    <img class="box-image" src="states-images/texas-images/seaworld-park.jpeg" onclick="image(9)" alt="This is a picture of the park in Seaworld San Antonio. It is a view from the food court.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/texas-images/seaworld.jpeg" onclick="image(10)" alt="This is a picture of me standing in front of the SeaWorld sign in San Antonio.">
                    <img class="box-image" src="states-images/texas-images/snake.jpeg" onclick="image(11)" alt="This is a picture of me petting a snake at the Seaworld park.">
                    <img class="box-image" src="states-images/texas-images/seaworld-park2.jpeg" onclick="image(12)" alt="This is a picture of me standing at the SeaWorld park.">
                    <img class="box-image" src="states-images/texas-images/orca.jpeg" onclick="image(13)" alt="This is a picture of an orca at the SeaWorld San Antonio park. They were performing a show for us.">
                    <img class="box-image" src="states-images/texas-images/orca-selfie.jpeg" onclick="image(14)" alt="This is a selfie of me with the orca and their trainer at Shamu Stadium.">
                    <img class="box-image" src="states-images/texas-images/turtoise.jpeg" onclick="image(15)" alt="This is a picture of two turtoises at SeaWorld's San Antonio park Discovery Cove. They were pretty large and I thought they were turtles at first.">
                    <img class="box-image" src="states-images/texas-images/discovery-cove2.jpeg" onclick="image(16)" alt="This is a picture of me in Discovery Cove. I really enjoyed the park.">
                    <img class="box-image" src="states-images/texas-images/dolphin.jpeg" onclick="image(17)" alt="This is a selfie of me posing in front of a dolphin.">
                    <img class="box-image" src="states-images/texas-images/discovery-cove.jpeg" onclick="image(18)" alt="This is a picture of me in Discovery Cove posing in front of the landscaping">
                    <img class="box-image" src="states-images/texas-images/dolphin2.jpeg" onclick="image(19)" alt="This is a picture of a dolphin in Discovery Cove.">
                    <img class="box-image" src="states-images/texas-images/fiesta-texas.jpeg" onclick="image(20)" alt="This a picture of me in front of the sign of Six Flags Fiesta Texas.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/texas-images/fiesta-texas2.jpeg" onclick="image(21)" alt="This is a picture of me at the Six Flags Fiesta Texas park. I thought the scenery was pretty nice.">
                    <img class="box-image" src="states-images/texas-images/america.jpeg" onclick="image(22)" alt="This is a picture of me at the Six Flags Fiesta Texas in front of a 'America the Beautiful' sign. I thought it was a cool billboard.">
                    <img class="box-image" src="states-images/texas-images/fiesta-texas-statue.jpeg" onclick="image(23)" alt="This a picture of me standing in front of a statue at Six Flags Fiesta Texas park.">
                    <img class="box-image" src="states-images/texas-images/river-walk2.jpeg" onclick="image(24)" alt="This a picture of me in the river walk in downtown San Antonio. There were lots of stores and restaurants next to the river and was a nice peaceful walk to go through.">
                    <img class="box-image" src="states-images/texas-images/river-walk.jpeg" onclick="image(25)" alt="This is a picture of me in San Antonio's river walk in the middle of a tour.">
                    <img class="box-image" src="states-images/texas-images/city.jpeg" onclick="image(26)" alt="This is a picture of me by the San Antonio River Walk.">
                    <img class="box-image" src="states-images/texas-images/san-antonio2.jpeg" onclick="image(27)" alt="This is a picture of inside a building that is next to the River Walk in San Antonio.">
                    <img class="box-image" src="states-images/texas-images/alamo.jpeg" onclick="image(28)" alt="This is a picture of me at the Alamo in San Antonio, Texas.">
                    <img class="box-image" src="states-images/texas-images/alamo-selfie.jpeg" onclick="image(29)" alt="This is a selfie of me taken of the Alamo in San Antonio, Texas.">
                    <img class="box-image" src="states-images/texas-images/san-antonio.jpeg" onclick="image(30)" alt="This is a picture of a section in downtown San Antonio.">
                    
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/texas-images/art4.jpeg" onclick="image(31)" alt="This is a picture of traditional tables hanging with books holding the tables up inside an art cultural display in downtown San Antonio.">
                    <img class="box-image" src="states-images/texas-images/art2.jpeg" onclick="image(32)" alt="This is an image of what seems to be soccer balls hanging inside a culutarly display in downtown San Antonio.">
                    <img class="box-image" src="states-images/texas-images/art.jpeg" onclick="image(33)" alt="This is a picture of a script that makes the comparison with the invention of corn and invention of fire.">
                    <img class="box-image" src="states-images/texas-images/art3.jpeg" onclick="image(34)" alt="This is a picture of corn surrounding a tire inside the San Antonio cultural art display.">
                    <img class="box-image" src="states-images/texas-images/musuem.jpeg" onclick="image(35)" alt="This is a picture of me taking a picture of myself off a round mirror inside the cultural art display in downtown San Antonio.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'texas.js';
    ?>
</script>
</body>
</html>