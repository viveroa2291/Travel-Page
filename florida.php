<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florida Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/florida.css';
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
                        <p class="title">Florida</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="florida-top-section" id="top">
            <h2 class="florida-header">Florida</h2>
        </section>
        <section class="section-selection">
            <form  action="">
                <label for="">Choose a Section of Florida:  </label>
                <br>
                <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                    <option value="all">All</option>
                    <option value="Disneyworld">Disneyworld</option>
                    <option value="Universal">Universal Studios</option>
                    <option value="Seaworld">Seaworld</option>
                    <option value="Other">Other Florida</option>
                </select>
            </form>
        </section>

        <section id="demo"></section>
        
        <section class="bottom-section">
            <span><a class="previous-state" href="california.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="georgia.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/florida-images/epcot.jpeg" onclick="image(1)" alt="This is a picture of me standing outside of Epcot. I did not have a chance to go into Epcot, but wanted to take a picture since I found the entrance very cool.">
                    <img class="box-image" src="states-images/florida-images/disney.jpeg" onclick="image(2)" alt="This is a picture of a statue of Walt Disney and Mickey Mouse at the Disneyworld Magic Kingdom park.">
                    <img class="box-image" src="states-images/florida-images/disney-family.jpeg" onclick="image(3)" alt="This is a picture of my family and I at the entrance of Disneyworld's Magic Kingdom park.">
                    <img class="box-image" src="states-images/florida-images/castle.jpeg" onclick="image(4)" alt="This is a picture of me posing in front of the castle in Disneyworld's Magic Kingdom park.">
                    <img class="box-image" src="states-images/florida-images/president.jpeg" onclick="image(5)" alt="This is an image of the outside of the Hall of Presidents display. At the time, we could not enter as they were undergoing changes.">
                    <img class="box-image" src="states-images/florida-images/disney2.jpeg" onclick="image(6)" alt="This is an image of me taking pictures by the area we were eating.">
                    <img class="box-image" src="states-images/florida-images/jurassic.jpeg" onclick="image(7)" alt="This is an image of me looking up at the Jurassic Park sign."> 
                    <img class="box-image" src="states-images/florida-images/nbc.jpeg" onclick="image(8)" alt="This is an image of me outside of the NBC building after watching a 'Tonight's Show'.">
                    <img class="box-image" src="states-images/florida-images/jurassic2.jpeg" onclick="image(9)" alt="This is an image of me looking at the dinosaur acting in shock. I thought the display was very well done and was my favorite park.">                   
                    <img class="box-image" src="states-images/florida-images/harrypotter.jpeg" onclick="image(10)" alt="This is a picture of me standing outside of Hogwarts.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/florida-images/universal-sign.jpeg" onclick="image(11)" alt="This is an image of me standing outside of the Universal Studios sign that rotates 360 degrees.">
                    <img class="box-image" src="states-images/florida-images/universal.jpeg" onclick="image(12)" alt="This is an image of me taking a look at the view of the Universal Studios park.">
                    <img class="box-image" src="states-images/florida-images/seaworld2.jpeg" onclick="image(13)" alt="This is an image of me standing by the Seaworld lake of the theme park.">
                    <img class="box-image" src="states-images/florida-images/penguin.jpeg" onclick="image(14)" alt="This is an image of penguins inside a penguin exhibit.">
                    <img class="box-image" src="states-images/florida-images/penguin-me.jpeg" onclick="image(15)" alt="This is an image of me interacting with a penguin from the glass. I thought it was pretty cool that the penguin came up to me and made eye contact.">
                    <img class="box-image" src="states-images/florida-images/orca.jpeg" onclick="image(16)" alt="This is an image of an orca swimming around its tank.">
                    <img class="box-image" src="states-images/florida-images/orcas-glass.jpeg" onclick="image(17)" alt="This is an image of orcas and their trainers providing information about orcas to the visitors.">
                    <img class="box-image" src="states-images/florida-images/seaworld-green.jpeg" onclick="image(18)" alt="This is an image of me in an unknown area of Seaworld's park. It was pretty empty but had nice theming and was surrounded with a lot colorful flowers.">
                    <img class="box-image" src="states-images/florida-images/seaworld.jpeg" onclick="image(19)" alt="This is an image of me sitting by the Seaworld sign.">
                    <img class="box-image" src="states-images/florida-images/fish.jpeg" onclick="image(20)" alt="This is a picture of a fish that I took at Seaworld.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/florida-images/seahorses.jpeg" onclick="image(21)" alt="This is an picture of seahorses that I took at Seaworld.">
                    <img class="box-image" src="states-images/florida-images/hotel.jpeg" onclick="image(22)" alt="This is an image of me standing outside of my hotel.">
                    <img class="box-image" src="states-images/florida-images/bathroom.jpeg" onclick="image(23)" alt="This is a bathroom picture that I took in the bathroom of the hotel I was staying at.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
    <script>
        <?php 
            include 'florida.js';
        ?>
    </script>
</body>
</html>