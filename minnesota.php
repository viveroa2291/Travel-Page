<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minnesota Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/minnesota.css';
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
                        <p class="title">Minnesota</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="minnesota-top-section" id="top">
            <h2 class="minnesota-header">Minnesota</h2>
        </section>
        <section class="section-selection">
            <div class="year">
                <form action="">
                    <label for="">Filter by Year</label>
                    <br>
                    <select name="michigan-years" class="year-selector" id="year-selector" onchange="yearSelected()">
                        <option value="all">All</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </form>
            </div>
            <div class="minnesota-section">
                <form  action="">
                    <label for="">Choose a section of Minnesota:  </label>
                    <br>
                    <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                        <option value="all">All</option>
                        <option value="Minneapolis">Minneapolis</option>
                        <option value="Arcade">Minneapolis Arcade</option>
                        <option value="Other">Other Minnesota Parts</option>
                    </select>
                </form> 
            </div>
        </section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="michigan.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="missouri.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis-self.jpeg" onclick="image(1)" alt="This is an image of me in downtown Minneapolis. My friends and I were doing a photoshoot.">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis.jpeg" onclick="image(2)" alt="This is an image of my friends and I in downtown Minneapolis during our photoshoot.">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis-self2.jpeg" onclick="image(3)" alt="This is an image of me in downtown Minneapolis during a photoshoot.">
                    <img class="box-image" src="states-images/minnesota-images/us-bank.jpeg" onclick="image(4)" alt="This is an image of me at U.S Bank Stadium, where the Minnesota Vikings play.">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis-self3.jpeg" onclick="image(5)" alt="This is another image of me in downtown Minneapolis during a walk around the city.">
                    <img class="box-image" src="states-images/minnesota-images/rooftop.jpeg" onclick="image(6)" alt="This is an image of my friends and I at an arcade in the outskirts of Minneapolis.">
                    <img class="box-image" src="states-images/minnesota-images/arcade.jpeg" onclick="image(7)" alt="This is an image of my friends and I at an arcade in the outskirts of Minneapolis.">
                    <img class="box-image" src="states-images/minnesota-images/arcade-self.jpeg" onclick="image(8)" alt="This is an image of me at an arcade in the outskirts of Minneapolis with a wall of art.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/minnesota-images/mallofamerica.jpeg" onclick="image(9)" alt="This is an image of me at the Mall of America in Saint Paul Minnesota.">
                    <img class="box-image" src="states-images/minnesota-images/george-floyd.jpeg" onclick="image(10)" alt="This is an image of a George Floyd mural located in the outskirts of Minneapolis.">
                    <img class="box-image" src="states-images/minnesota-images/minnesota-friends.jpeg" onclick="image(11)" alt="This is an image of my friends in Eden Prarie Minnesota. One of my friends is from Ohio and we haven't seen each other in years and was in town, therefore we met up and merged our friend groups together.">
                    <img class="box-image" src="states-images/minnesota-images/skiing.jpeg" onclick="image(12)" alt="This is an image of me skiing at Afton Alps in Minnesota. I enjoyed skiing here very much and would recommend to give this place a visit if you like to ski or snowboard.">
            </div>
        </div> 
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'minnesota.js';
    ?>
</script>
</body>
</html>