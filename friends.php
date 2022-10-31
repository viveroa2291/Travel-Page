<?php
    session_start();
    include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/friends.css';
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
                                 echo "<div class='profile'>
                                       <a class='nav-link text-white top-link profile' href='profile.php'>Profile page</a>
                                           <div class='bg-dark settings'> 
                                            <a class='text-white friends-link' href='friends.php'>Friends</a> <br>
                                            <a class='text-white settings-link' href='settings.php'>Settings</a> <br>
                                            <a class='text-white tos-link' href='tos.php'>Terms of Service</a> <br>
                                           </div>
                                       </div>";
                                echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                            <p class="title">Friends</p>
                            <p class="slash">|</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
   <main>
       <h1 style="text-align: center;">Coming soon</h1>
       <?php 
       $id = $_SESSION['userid'];
       $sql = "SELECT * FROM user";
       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result) > 0) {
        echo "<p class='nothing'>There are users</p>";
        while ($row = mysqli_fetch_assoc($result)) {
            // $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
            while($rowImg = mysqli_fetch_assoc($resultImg)) {
                echo "<div>";
                    if($rowImg['status'] == 0) {
                        echo "<img class='friends-profile-picture'src='profile-pictures/profile".$id.".jpeg'>";
                    }
                    else {
                        echo "<img src='uploads/default.jpeg'>";
                    }
                    $nameSQL = "SELECT * FROM usersProfiles";
                    $nameResult = mysqli_query($conn, $nameSQL);
                    while($nameRow = mysqli_fetch_assoc($nameResult)) {
                    echo $nameRow['usersName'];
                    }
                echo "</div>";
            }
        }
       }                 
       else {
        echo "There are no users yet!";
       }    
       ?>
   </main>
   <?php 
        include_once 'footer.php';
    ?> 
<script>
        <?php 
            include 'about.js';
        ?>
    </script>
</body>
</html>