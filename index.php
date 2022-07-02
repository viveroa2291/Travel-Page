<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap.bundle.min.js/bootstrap.bundle.js">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
</head>
<body>
    <header>
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
                        <p class="title">Home Page</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="containers">
            <section class="left-side">
                <div class="left-details">
                    <h2 class="helloWorld">Guide</h2>
                    <hr></hr>
                    <p>This website was created by me using HTML, CSS, and Javascript where it provides information about myself for you guys to get to know a little bit about me and where I come from along with my interests.</p>
                    <p>The page that you are currently on is the <a href="index.php" class="home-links">Home</a> page where it serves as a guide and provides a concise timeline of my life and my most memorable moments on the right. The center provides a glimpse and insight of what the website is about.</p>
                    <p>Down below on the footer are a variety of links that include links to my social media and links that can also be found on the top navigation. I plan to include a spanish version on the footer where it can provide a Spanish version of the site to expand beyond realms.</p>
                    <p>You can also find a more in depth link to my social media and to get in further contact with me on the on the <a class="home-links" href="contact.php">Contact</a> link.</p>
                    <p>On the top and bottom navigation bar you can find the <a href="about.php" class="home-links">About</a>, <a href="story.php" class="home-links">Story</a>, <a href="travel.php" class="home-links">Travel</a>, <a href="contact.php" class="home-links">Contact</a>, and <a href="projects.php" class="home-links">Projects</a> links.</p>
                </div>
                <div class="left-details">
                    <p>Here are my dividends</p>                        
                    <label for="dividends">Dividends</label>
                    <select name="dividends" id="dividends">
                    <?php 
                        $connect = mysqli_connect('localhost', 'root', '', 'Dividends'); 

                        $query = 'SELECT id, Ticker, Price FROM Stocks';
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
            </section>
            <section class="main-side">
                    <div class="main-details">
                        <div class="previous-area">
                            <button id="previous-button">&#8249;</button> 
                        </div>
                        <div class="middle-area">                        
                            <a href="" class="header" id="header"></a>
                            <img src="" class="main-image" id="main-image" alt="main-picture">
                            <hr>
                        </div>
                        <div class="next-area">
                            <button id="next-button">&#8250;</button>
                        </div>
                    </div> 
                    <p id="descriptionBody" class="description-body"></p>
                    <div class="dots-wrapper">
                        <span class="dot" onclick="dots(0)"></span>
                        <span class="dot" onclick="dots(1)"></span>
                        <span class="dot" onclick="dots(2)"></span>
                        <span class="dot" onclick="dots(3)"></span>
                        <span class="dot" onclick="dots(4)"></span>
                        <span class="dot" onclick="dots(5)"></span>
                    </div>
            </section>
            <section class="right-side">
                <div class="right-details">
                    <h3 class="timeline">Timeline</h3>
                    <hr></hr>
                    <h4 class="timeline-header">May 2022 <br> <p class="timeline-under-header">University of Wisconsin-Eau Claire</p></h4>
                    <img class="timeline-images" src="images/graduation.jpeg" alt="University of Wisconsin-Eau Claire graduation picture">
                    <p class="timeline-description">Graduated from the University of Wisconsin of Eau Claire with a Bachelors of Science with a Degree in Computer Science. Take a look at the <a href="about.php" class="home-links">About</a> page for more details.</p>
                    <h4 class="timeline-header">June 2016 <br> <p class="timeline-under-header">Prospect High School</p></h4>
                    <img class="prospect-image" src="images/prospect.jpeg" alt="Prospect High School graduation picture">
                    <p class="timeline-description">Graduated from Prospect High School with a 2.78 GPA. Take a look at the <a href="about.php" class="home-links">About</a> page for more details.</p>
                    <p class="timeline-description">On the top navigation bar, you can find the <a href="about.php" class="home-links">About</a>, <a href="story.php" class="home-links">Story</a>, <a href="contact.php" class="home-links">Contact</a>, and <a href="projects.php" class="home-links">Projects</a> links.</p>
                </div>
            </section>
        </div>
    </main> 
    <footer class="navbar navbar-dark bg-dark bottom-footer"> 
        <div class="bottom-links">
            <a href="https://www.facebook.com/adan.vivero97/" class="fa fa-facebook footer-links facebook"></a>
            <a href="https://www.instagram.com/adxadan/" class="fa fa-instagram footer-links instagram"></a>
            <a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost footer-links snapchat"></a>
            <a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg" class="fa fa-youtube footer-links youtube"></a>
            <a href="https://www.linkedin.com/in/adan-vivero-a93970156/" class="fa fa-linkedin footer-links linkedin"></a>
            <i class="fa fa-stack-overflow footer-links stackoverflow"></i>
            <i class="fab fa-discord footer-links discord"></i> 
            <a href="#" class="fa fa-google footer-links google"></a> 
        </div>
        <div class="footer-nav">
            <a class="nav-link text-white footer-link" href="about.php">About</a>
            <a class="nav-link text-white footer-link" href="contact.php">Contact</a>
            <a class="nav-link text-white footer-link" href="story.php">Story</a>
            <a class="nav-link text-white footer-link" href="travel.php">Travel</a>
            <a class="nav-link text-white footer-link" href="projects.php">Projects</a>
        </div>
        <div>
            <span class="english" onclick="currentSlide(5)">English</span>
            <span class="spanish" onclick="currentSlide(6)">Spanish</span>
            <span class="copyright">© Copyright <script>document.write(new Date().getFullYear());</script> by Adan Vivero</span>
        </div>
    </footer>
    <script src="home.js"></script>
</body>
</html>