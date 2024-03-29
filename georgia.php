<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Georgia Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/georgia.css';
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
                        <p class="title">Georgia</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="georgia-top-section" id="top">
            <h2 class="georgia-header">Georgia</h2>
        </section>
        <section class="section-selection">
            <form  action="">
                <label for="">Choose a Section of Georgia:  </label>
                <br>
                <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                    <option value="all">All</option>
                    <option value="Atlanta">Atlanta</option>
                    <option value="Cnn">CNN</option>
                    <option value="Coca">World of Coca-Cola</option>
                    <option value="Other">Other Georgia Pictures</option>
                </select>
            </form>
        </section>

        <section id="demo"></section>

        <section class="bottom-section">
            <span><a class="previous-state" href="florida.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="illinois.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/georgia-images/atlanta.jpeg" onclick="image(1)" alt="This is a picture of me in downtown Atlanta. I really liked the city and what it had to offer.">
                    <img class="box-image" src="states-images/georgia-images/atlanta2.jpeg" onclick="image(2)" alt="This is the picture of me in downtown Atlanta.">
                    <img class="box-image" src="states-images/georgia-images/cnn.jpeg" onclick="image(3)" alt="This is a picture of me standing outside of the CNN building next to the sign.">
                    <img class="box-image" src="states-images/georgia-images/cnn2.jpeg" onclick="image(4)" alt="This is a selfie of me inside of the CNN building next to an anchor's chair and table where the news is reported.">
                    <img class="box-image" src="states-images/georgia-images/coca-cola.jpeg" onclick="image(5)" alt="This is a picture of me sitting on a couch enjoying a coke drink inside the World of Coca-Cola located in Atlanta.">
                    <img class="box-image" src="states-images/georgia-images/coca-cola3.jpeg" onclick="image(6)" alt="This is a picture of me inside of the World of Coca-Cola. I thought this looked cool.">
                    <img class="box-image" src="states-images/georgia-images/coca-cola2.jpeg" onclick="image(7)" alt="This is an image of me jumping outside of the World of Coca Cola sign.">
                    <img class="box-image" src="states-images/georgia-images/airport.jpeg" onclick="image(8)" alt="This is a picture of my sister's national team for gymnastics. She is part of the special olympics and I was there to help coach the boys. We took a group picture in the airport and I believe this airport ranks in the United States for being one of the biggest airports in the United States.">
                    <img class="box-image" src="states-images/georgia-images/dinner.jpeg" onclick="image(9)" alt="This is a picture of me standing outside of the Marietta Diner which was where we ate for dinner.">
                    <img class="box-image" src="states-images/georgia-images/pool.jpeg" onclick="image(10)" alt="This is a mirror picture of me in the hotel.">
                    <img class="box-image" src="states-images/georgia-images/hotel.jpeg" onclick="image(11)" alt="This is a mirror picture of me in the hotel.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'georgia.js';
    ?>
</script>
</body>
</html>