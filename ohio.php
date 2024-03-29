<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ohio</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/ohio.css';
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
                        <p class="title">Ohio</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <section class="ohio-top-section" id="top">
            <h2 class="ohio-header">Ohio</h2>
        </section>
        <section class="section-selection">
            <div class="year">
                <form action="">
                    <label for="">Filter by Year</label>
                    <br>
                    <select name="missouri-years" class="year-selector" id="year-selector" onchange="yearSelected()">
                        <option value="all">All</option>
                        <option value="2015">2015</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2021">2021</option>
                    </select>
                </form>
            </div>
        <div class="ohio-section">
            <form  action="">
                <label for="">Choose a Section of Utah:  </label>
                <br>
                <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                    <option value="all">All</option>
                    <option value="Cedar">Sandusky (Cedar Point)</option>
                    <option value="Akron">Akron</option>
                    <option value="Cleveland">Cleveland</option>
                    <option value="Cincinnati">Cincinnati</option>
                </select>
            </form>
        </div>
        </section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="missouri.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="south-dakota.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01"> 
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/ohio-images/2015-beach.jpeg" onclick="image(1)"  alt="This is a picture of me by the beach of Cedar Point enjoying a photoshoot.">
                    <img class="box-image" src="states-images/ohio-images/handstand.jpeg" onclick="image(2)" alt="This is the picture of me doing a handstand at the beach in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/sean-pool.jpeg" onclick="image(3)" alt="This is a picture of my friend sean and I in front of a water park of Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/sean-pool2.jpeg" onclick="image(4)" alt="This is a picture of Sean and I at the water park in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/sean-beach.jpeg" onclick="image(5)" alt="This is a picture of my friend Sean and I at the beach of Cedar Point on our last day of our vacation.">
                    <img class="box-image" src="states-images/ohio-images/sean-millennium.jpeg" onclick="image(6)" alt="This is a picture of my friend Sean and I in front of the Millennium Force ride. It was also my first time riding the ride, meanwhile Sean has ridden the ride before.">
                    <img class="box-image" src="states-images/ohio-images/thumbs-up3.jpeg" onclick="image(7)" alt="This is a picture of me posing in some Cedar Point sign with my thumbs up where I would do the same thing in later years to come.">
                    <img class="box-image" src="states-images/ohio-images/sean-dinner.jpeg" onclick="image(8)" alt="This is a picture of Sean and I standing outside of a restaurant where we ate dinner at.">
                    <img class="box-image" src="states-images/ohio-images/hotel-view.jpeg" onclick="image(9)" alt="This is a picture from our hotel view of the Top Thrill Dragster ride.">
                    <img class="box-image" src="states-images/ohio-images/hotel2.jpeg" onclick="image(10)" alt="This is a picture of our hotel that we stayed at in Cedar Point. It was a very nice hotel.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/ohio-images/cedar-point.jpeg" onclick="image(11)"  alt="This is a picture of me by the beach of Cedar Point enjoying a photoshoot.">
                    <img class="box-image" src="states-images/ohio-images/dinosaur.jpeg" onclick="image(12)" alt="This is the picture of me doing a handstand at the beach in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/dinosaur-group.jpeg" onclick="image(13)" alt="This is a picture of my friend sean and I in front of a water park of Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2017-cedar-point-sign.jpeg" onclick="image(14)" alt="This is a picture of Sean and I at the water park in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2017-millennium.jpeg" onclick="image(15)" alt="This is a picture of my friend Sean and I at the beach of Cedar Point on our last day of our vacation.">
                    <img class="box-image" src="states-images/ohio-images/2017-top-thrill.jpeg" onclick="image(16)" alt="This is a picture of my friend Sean and I in front of the Millennium Force ride. It was also my first time riding the ride, meanwhile Sean has ridden the ride before.">
                    <img class="box-image" src="states-images/ohio-images/2017-thumbs-up.jpeg" onclick="image(17)" alt="This is a picture of me posing in some Cedar Point sign with my thumbs up where I would do the same thing in later years to come.">
                    <img class="box-image" src="states-images/ohio-images/2018-cedar-point-sign.jpeg" onclick="image(18)" alt="This is a picture of Sean and I standing outside of a restaurant where we ate dinner at.">
                    <img class="box-image" src="states-images/ohio-images/2018-thumbs-up.jpeg" onclick="image(19)" alt="This is a picture from our hotel view of the Top Thrill Dragster ride.">
                    <img class="box-image" src="states-images/ohio-images/valravn.jpeg" onclick="image(20)" alt="This is a picture of our hotel that we stayed at in Cedar Point. It was a very nice hotel.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/ohio-images/millennium.jpeg" onclick="image(21)"  alt="This is a picture of me by the beach of Cedar Point enjoying a photoshoot.">
                    <img class="box-image" src="states-images/ohio-images/2018-top-thrill.jpeg" onclick="image(22)" alt="This is the picture of me doing a handstand at the beach in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2018-beach.jpeg" onclick="image(23)" alt="This is a picture of my friend sean and I in front of a water park of Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2019-thumbs-up.jpeg" onclick="image(24)" alt="This is a picture of Sean and I at the water park in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2019-top-thrill.jpeg" onclick="image(25)" alt="This is a picture of my friend Sean and I at the beach of Cedar Point on our last day of our vacation.">
                    <img class="box-image" src="states-images/ohio-images/valravn-group.jpeg" onclick="image(26)" alt="This is a picture of my friend Sean and I in front of the Millennium Force ride. It was also my first time riding the ride, meanwhile Sean has ridden the ride before.">
                    <img class="box-image" src="states-images/ohio-images/alex-sean.jpeg" onclick="image(27)" alt="This is a picture of me posing in some Cedar Point sign with my thumbs up where I would do the same thing in later years to come.">
                    <img class="box-image" src="states-images/ohio-images/maverick.jpeg" onclick="image(28)" alt="This is a picture of Sean and I standing outside of a restaurant where we ate dinner at.">
                    <img class="box-image" src="states-images/ohio-images/steel.jpeg" onclick="image(29)" alt="This is a picture from our hotel view of the Top Thrill Dragster ride.">
                    <img class="box-image" src="states-images/ohio-images/beach.jpeg" onclick="image(30)" alt="This is a picture of our hotel that we stayed at in Cedar Point. It was a very nice hotel.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/ohio-images/2021-beach4.jpeg" onclick="image(31)"  alt="This is a picture of me by the beach of Cedar Point enjoying a photoshoot.">
                    <img class="box-image" src="states-images/ohio-images/2021-beach2.jpeg" onclick="image(32)" alt="This is the picture of me doing a handstand at the beach in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2021-beach3.jpeg" onclick="image(33)" alt="This is a picture of my friend sean and I in front of a water park of Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/beach-view.jpeg" onclick="image(34)" alt="This is a picture of Sean and I at the water park in Cedar Point.">
                    <img class="box-image" src="states-images/ohio-images/2021-beach.jpeg" onclick="image(35)" alt="This is a picture of my friend Sean and I at the beach of Cedar Point on our last day of our vacation.">
                    <img class="box-image" src="states-images/ohio-images/jetski2.jpeg" onclick="image(36)" alt="This is a picture of my friend Sean and I in front of the Millennium Force ride. It was also my first time riding the ride, meanwhile Sean has ridden the ride before.">
                    <img class="box-image" src="states-images/ohio-images/jetski.jpeg" onclick="image(37)" alt="This is a picture of me posing in some Cedar Point sign with my thumbs up where I would do the same thing in later years to come.">
                    <img class="box-image" src="states-images/ohio-images/maverick.jpeg" onclick="image(38)" alt="This is a picture of Sean and I standing outside of a restaurant where we ate dinner at.">
                    <img class="box-image" src="states-images/ohio-images/steel.jpeg" onclick="image(39)" alt="This is a picture from our hotel view of the Top Thrill Dragster ride.">
                    <img class="box-image" src="states-images/ohio-images/beach.jpeg" onclick="image(40)" alt="This is a picture of our hotel that we stayed at in Cedar Point. It was a very nice hotel.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/ohio-images/akron.jpeg" onclick="image(41)"  alt="This is an image of me putting up the peace sign outside a church in Akron.">
                    <img class="box-image" src="states-images/ohio-images/akron-downtown.jpeg" onclick="image(42)" alt="This is a low quality picture of downtown Akron.">
                    <img class="box-image" src="states-images/ohio-images/akron2.jpeg" onclick="image(43)" alt="This is a picture of me by the Akron river.">
                    <img class="box-image" src="states-images/ohio-images/group.jpeg" onclick="image(44)" alt="This is a group picture of my friends and I at a campsite.">
                    <img class="box-image" src="states-images/ohio-images/jon.jpeg" onclick="image(45)" alt="This is a picture of my friend Jon and I by the pond at the campsite.">
                    <img class="box-image" src="states-images/ohio-images/browns-practice.jpeg" onclick="image(46)" alt="This is a picture of me outside the Browns stadium next to the Jim Brown statue.">
                    <img class="box-image" src="states-images/ohio-images/cleveland-cliffs.jpeg" onclick="image(47)" alt="This is a picture of me standing outside in downtown Cleveland.">
                    <img class="box-image" src="states-images/ohio-images/cleveland-sign-group.jpeg" onclick="image(48)" alt="This is a picture of my friend Nikki and I at the Cleveland sign.">
                    <img class="box-image" src="states-images/ohio-images/cleveland-sign.jpeg" onclick="image(49)" alt="This is a picture of my friend Nikki and I at the Rock and Roll Hall of Fame in Cleveland Ohio.">
                    <img class="box-image" src="states-images/ohio-images/cleveland-sign2.jpeg" onclick="image(50)" alt="This is a picture of me in the Michael Jackson section in the Rock & Roll Hall of Fame. Michael Jackson is one of my favorite artists that I grew up listening to.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/ohio-images/downtown-cleveland.jpeg" onclick="image(51)"  alt="This is a picture of the Elvis section in the Rock & Roll Hall of Fame.">
                    <img class="box-image" src="states-images/ohio-images/elvis.jpeg" onclick="image(52)" alt="This is a picture of Michael Jackson name on the wall. In order to qualify to be on the wall of the Rock & Roll Hall of Fame, the artist must at least have been in the music industry for over 25 years and an influence.">
                    <img class="box-image" src="states-images/ohio-images/golf.jpeg" onclick="image(53)" alt="This is a picture of me in the suburbs of Cleveland mini golfing.">
                    <img class="box-image" src="states-images/ohio-images/jim-brown.jpeg" onclick="image(54)" alt="This is a picture of me outside of the Cleveland Browns practice center.">
                    <img class="box-image" src="states-images/ohio-images/michael-jackson.jpeg" onclick="image(55)" alt="This is a picture of in downtown Cleveland by the Cleveland Cliffs cruiser which I know own 2 shares of stocks in it.">
                    <img class="box-image" src="states-images/ohio-images/michael-jackson2.jpeg" onclick="image(56)" alt="This is a group picture of my friend Alex and Sean in front of Cleveland sign.">
                    <img class="box-image" src="states-images/ohio-images/musuem.jpeg" onclick="image(57)" alt="This is a picture of me sitting in front of the Cleveland sign.">
                    <img class="box-image" src="states-images/ohio-images/hotel.jpeg" onclick="image(58)" alt="This is a picture of me taking a mirror picture in my hotel.">
                    <img class="box-image" src="states-images/ohio-images/hotel3.jpeg" onclick="image(59)" alt="This is a group picture of my friends Evan, Jonathan, and Rachel at the event.">
                    <img class="box-image" src="states-images/ohio-images/labor-day.jpeg" onclick="image(60)" alt="This is a picture of Maria and I at the labor day event.">
                    <img class="box-image" src="states-images/ohio-images/maria.jpeg" onclick="image(61)" alt="This is a picture of Alexa and Emily in the hotel we were staying at.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
    <script>
    <?php 
        include 'ohio.js';
    ?>
</script>
</body>
</html>