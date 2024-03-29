<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Dakota</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/south-dakota.css';
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
                        <p class="title">South Dakota</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <section class="south-dakota-top-section" id="top">
        <h2 class="south-dakota-header">South Dakota</h2>
    </section>
    <section class="section-selection">
    <div class="south-dakota-section">
                <form  action="">
                    <label for="">Choose a section of South Dakota:  </label>
                    <br>
                    <select name="south-dakota-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                        <option value="all">All</option>
                        <option value="Rushmore">Mount Rushmore</option>
                        <option value="Custer">Custer State Park</option>
                        <option value="Henderson">Rapid City</option>
                        <option value="Other">Other South Dakota Parts</option>
                    </select>
                </form>
            </div>
        </section>
        <section class="about" id="about">
            <div class="south-dakota-about">
                <div class="brief-overview">
                    <h3 id="south-dakota">South Dakota</h3>
                    <button class="hide-section" id="hide-section" onclick="hide()">Hide</button>
                </div>
                <div id="brief">
                    <hr>
                    <p>I visited the state of South Dakota in the year of 2020 during covid-19 pandemic.</p>
                    <p>Since we were all locked down at home and most of the places in big cities were closed, my friends and I decided to take a trip to South Dakota to check out Mount Rushmore.</p>
                    <p>Visiting Mount Rushmore was on my bucket list of places I wanted to visit, and this was a time to go visit and enjoy the great outdoors.</p>
                </div>
            </div>
        </section>
    <section id="demo"></section>
    <section class="bottom-section">
            <span><a class="previous-state" href="ohio.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="tennessee.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section> 
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/south-dakota-images/heads-group.jpeg" onclick="image(1)" alt="This is a picture of my friends and I at Mount Rushmore.">
                    <img class="box-image" src="states-images/south-dakota-images/heads-me.jpeg" onclick="image(2)" alt="This is a picture of me at the Mount Rushmore monument.">
                    <img class="box-image" src="states-images/south-dakota-images/heads.jpeg" onclick="image(3)" alt="This is a picture of me at the Mount Rushmore monument.">
                    <img class="box-image" src="states-images/south-dakota-images/heads-eagle.jpeg" onclick="image(4)" alt="This is a picture of the Mount Rushmore monument.">
                    <img class="box-image" src="states-images/south-dakota-images/heads-two.jpeg" onclick="image(5)" alt="This is a picture of the Mount Rushmore monument from a different angle.">
                    <img class="box-image" src="states-images/south-dakota-images/heads-cesar-sean.jpeg" onclick="image(6)" alt="This is a picture of my friends Sean and Cesar at the Mount Rushmore monument.">
                    <img class="box-image" src="states-images/south-dakota-images/custer-tree.jpeg" onclick="image(7)" alt="This is a picture of me at Custer State Park with a nice background setting.">
                    <img class="box-image" src="states-images/south-dakota-images/buffalos-me.jpeg" onclick="image(8)" alt="This is a picture of me at Custer State Park with buffalos in the background.">
                    <img class="box-image" src="states-images/south-dakota-images/sean-me.jpeg" onclick="image(9)" alt="This is a picture of my friend Sean and I at Custer State Park.">
                    <img class="box-image" src="states-images/south-dakota-images/buffalos.jpeg" onclick="image(10)" alt="This is a picture of Buffalos that we saw while riding through Custer State Park.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/south-dakota-images/buffalo-field.jpeg" onclick="image(11)" alt="This is a picture of a field of Custer State Park with a buffalo in the frame.">
                    <img class="box-image" src="states-images/south-dakota-images/custer-me.jpeg" onclick="image(12)" alt="This is a picture of me on top of a rock at a peak of Custer State Park. I am unsure if I was intentionally trying to pose or if this was a candid picture.">
                    <img class="box-image" src="states-images/south-dakota-images/podium.jpeg" onclick="image(13)" alt="This is a picture of my friend Sean and I pointing DX style.">
                    <img class="box-image" src="states-images/south-dakota-images/thumbs-up.jpeg" onclick="image(14)" alt="This is a picture of me doing a thumbs up with a statue in Downtown Rapid City.">       
                    <img class="box-image" src="states-images/south-dakota-images/high-five.jpeg" onclick="image(15)" alt="This is a picture of me giving a president who I believe is Jimmy Carter a high five.">             
                    <img class="box-image" src="states-images/south-dakota-images/rapid-city.jpeg" onclick="image(16)" alt="This is a picture of my friend Cesar and Sean and I in some alley of Downtown Rapid City.">
                    <img class="box-image" src="states-images/south-dakota-images/water-me.jpeg" onclick="image(16)" alt="This is a picture of me at a lake in Keystone on our way to the Mount Rushmore Monument.">                    
                    <img class="box-image" src="states-images/south-dakota-images/crazy-horse.jpeg" onclick="image(16)" alt="This is a picture of a project that they're working on in Crazy Horse. The final project looks spectactular but won't be complete for decades to come. It would be nice to visit when I'm older.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
    <script>
        <?php 
            include 'south-dakota.js';
        ?>
    </script>
</body>
</html>