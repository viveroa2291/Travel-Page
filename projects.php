<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/project.css';
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
                        <input class="search" type="text" placeholder="Search...">
                        <button type="submit" class="search-button"><i class="fa fa-search search-icon"></i></button>
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<a class='nav-link text-white top-link profile' href='profile.php'>Profile Page</a>";
                                echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                        <p class="title">Projects Page</p>
                        <p class="slash">|</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="main-projects">
            <p>Here are my dividends</p>                        
            <label for="dividends">Dividends</label>
            <select name="dividends" id="dividends">
            <?php 
                $connect = mysqli_connect('localhost', 'root', '', 'Dividends'); 

                $query = 'SELECT id, Ticker, Price FROM Stock';
                $result = mysqli_query($connect, $query);

                echo mysqli_num_rows(($result));
                while($record = mysqli_fetch_assoc($result )) 
                {
                    echo '<pre>';
                    print_r($record);
                    echo '</pre>';
                    echo '<option>'.$record['Ticker'].'</option>';

                }
            ?>
            </select>
        </div>
        <a href="https://viveroa2291.github.io/Cancun/home.html" target="_blank">This is my Cancun Page</a>
        <br>
        <a href="https://viveroa2291.github.io/adansLinkTree/" target="_blank">This is my Linktree Page</a>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
</body>
</html>
<script src="projects.js"></script>