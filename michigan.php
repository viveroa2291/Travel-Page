<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michigan Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/michigan.css';
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
                        <p class="title">Michigan</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="michigan-top-section" id="top">
            <h2 class="michigan-header">Michigan</h2>
        </section>
        <section class="section-selection">
            <div class="year">
                <form action="">
                    <label for="">Filter by Year</label>
                    <br>
                    <select name="michigan-years" class="year-selector" id="year-selector" onchange="yearSelected()">
                        <option value="all">All</option>
                        <option value="2013">2013</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2022">2022</option>
                    </select>
                </form>
            </div>
            <div class="michigan-section">
                <form  action="">
                    <label for="">Choose a Section of Michigan:  </label>
                    <br>
                    <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                        <option value="all">All</option>
                        <option value="Sawyer">Sawyer</option>
                        <option value="Lakehouse">Lakehouse</option>
                        <option value="Wakefield">Wakefield</option>
                        <option value="Detroit">Detroit</option>
                    </select>
                </form>
            </div>
        </section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="indiana.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="minnesota.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/michigan-images/sami.jpeg" onclick="image(1)" alt="This is the picture of my friend Sami and I sitting on a tree at The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/nicole.jpeg" onclick="image(2)" alt="This is the picture of my friend Nicole and I sitting on a tree at The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/sami2.jpeg" onclick="image(3)" alt="This is the picture of my friend Sami and I in the clean mud of The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/nicole-sami.jpeg" onclick="image(4)" alt="This is the picture of my friends Nicole and Sami in the clean mud of The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/gabi-nora.jpeg" onclick="image(5)" alt="This is the picture of my friends Gabi and Nora at the beach in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/sawyer2.jpeg" onclick="image(6)" alt="This is the picture of my friends Alex, Kaitlin, Gabi, and Nora at the beach in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/alex.jpeg" onclick="image(7)" alt="This is the picture of my friend Alex and I sitting on a tree at the Dunes.">
                    <img class="box-image" src="states-images/michigan-images/kaitlin-alex.jpeg" onclick="image(8)" alt="This is the picture of my friends Alex, Kaitlin, and I sitting on a tree at the Dunes covered in clean mud.">
                    <img class="box-image" src="states-images/michigan-images/sawyer.jpeg" onclick="image(9)" alt="This is a group picture of my friends and I sitting on a tree at The Dunes.">
                    <img class="box-image" src="states-images/michigan-images/alex2.jpeg" onclick="image(10)" alt="This is a selfie taken by me of my friend Alex and I covered in clean mud at The Dunes.">
            </div>        
            <div class="row">
                    <img class="box-image" src="states-images/michigan-images/nikki.jpeg" onclick="image(11)" alt="This is a picture of my friend Nikki and I at Lake Michigan Beach on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/nikki-chloe.jpeg" onclick="image(12)" alt="This is an image of my friends Nikki, Chloe, and I at Lake Michigan Beach on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/nikki2.jpeg" onclick="image(13)" alt="This is an image of my friends Nikki and I at Lake Michigan Beach on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/fireworks.jpeg" onclick="image(14)" alt="This is an image of my friends Nikki, Chloe, and I blowing up fireworks outside on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/cabin.jpeg" onclick="image(15)" alt="This is an image of me sitting inside my cabin before skiing.">
                    <img class="box-image" src="states-images/michigan-images/wakefield3.jpeg" onclick="image(16)" alt="This is an image of me skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/ski.jpeg" onclick="image(17)" alt="This is an image of where I was skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/wakefield4.jpeg" onclick="image(18)" alt="This is a selfie of me skiing in Wakefield Michigan after I fell and had snow all over my face.">
                    <img class="box-image" src="states-images/michigan-images/wakefield.jpeg" onclick="image(19)" alt="This is a selfie of me skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/wakefield2.jpeg" onclick="image(20)" alt="This is a selfie of me skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/me.jpeg" onclick="image(21)" alt="This is an image of me sitting inside a bus on a way to a German event.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'michigan.js';
    ?>
</script>
</body>
</html>