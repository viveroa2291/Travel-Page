<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utah Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/utah.css';
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
                        <p class="title">Utah</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="utah-top-section" id="top">
            <h2 class="utah-header">Utah</h2>
        </section>
        <section class="section-selection">
            <form  action="">
                <label for="">Choose a Section of Utah:  </label>
                <br>
                <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                    <option value="all">All</option>
                    <option value="Salt">Salt Lake City</option>
                    <option value="Arches">Arches National Park</option>
                    <option value="Springville">Springville</option>
                    <option value="Other">Other</option>
                </select>
            </form>
        </section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="texas.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="washington-dc.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/utah-images/church-me.jpeg" onclick="image(1)" alt="This is a picture of me in front of a mormon church in Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/church.jpeg" onclick="image(2)" alt="This is an image of a mormon church in Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/church-mom.jpeg" onclick="image(3)" alt="This is a picture of my mother and I at a mormon church in Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/salt-lake-city2.jpeg" onclick="image(4)" alt="This is an image of a mormon church in downtown Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/salt-lake-city3.jpeg" onclick="image(5)" alt="This is an image of downtown Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/arches-sign.jpeg" onclick="image(6)" alt="This is an image of me on the sign of the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/arches2.jpeg" onclick="image(7)" alt="This is an image of me at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/arches.jpeg" onclick="image(8)" alt="This is an image of me at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/big-arch.jpeg" onclick="image(9)" alt="This is an image of me at the heart of the arch of the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/small-arch.jpeg" onclick="image(10)" alt="This is an image of me inside a small arch with a view of the big arch at the Arches National Park.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/utah-images/arch-field.jpeg" onclick="image(11)" alt="This is an image of me looking at a field at the Arches National Park. It was a gigantic field and it was pretty cool.">
                    <img class="box-image" src="states-images/utah-images/arches4.jpeg" onclick="image(12)" alt="This is an image of me at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/arches3.jpeg" onclick="image(13)" alt="This is an image of me at an open area at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/mountains.jpeg" onclick="image(14)" alt="This is an image of me at Springville Utah standing at the middle of a mountain.">
                    <img class="box-image" src="states-images/utah-images/mountains3.jpeg" onclick="image(15)" alt="This is an image of me at Springville Utah standing at the middle of a mountain.">
                    <img class="box-image" src="states-images/utah-images/mountains2.jpeg" onclick="image(16)" alt="This is an image of me at Springville Utah standing at the bottom of the mountains.">
                    <img class="box-image" src="states-images/utah-images/mountains4.jpeg" onclick="image(17)" alt="This is an image of me at Springville Utah standing at the center of the mountains.">
                    <img class="box-image" src="states-images/utah-images/mountains5.jpeg" onclick="image(18)" alt="This is an image of me at Springville Utah standing at the bottom of the mountains.">
                    <img class="box-image" src="states-images/utah-images/draper.jpeg" onclick="image(19)" alt="This is an image of me at Draper, Utah which was a nice view of the city.">
                    <img class="box-image" src="states-images/utah-images/outside.jpeg" onclick="image(20)" alt="This is an image of me standing outside of my cousins house in Utah. I really like the cool view of the mountains.">
                    <img class="box-image" src="states-images/utah-images/pauls-house.jpeg" onclick="image(21)" alt="This is an image of me standing outside my other cousins house in Utah. Again, I really find the mountains a view cool view right outside their house.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'utah.js';
    ?>
</script>
</body>
</html>