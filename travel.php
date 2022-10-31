<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/travel.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="bootstrap.bundle.min.js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
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
                                echo "<a class='nav-link text-white top-link profile' href='profile.php'>Profile page</a>";
                                echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                        <p class="title">Travel Page</p>
                        <p class="slash">|</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
   <main>
      <h1 class="travel-header">Check out the states that I have traveled to</h1>
      <hr class="travel-hr">
      <div class="wrapper">

         <section class="arkansas-section under">
            <img src="states-images/arkansas-images/lake.jpeg" class="states-images" alt="">
            <span>
               <a href="arkansas.php" class="arkansas-link">Arkansas</a>
               <hr class="state-hr">
               <p class="arkansas-description">Check out my Arkansas travel page and the places that I visited which include:</p>
               <ul class="arkansas-description">
                  <li>Vandervoort</li>
                  <li>Waldron</li>
                  <li>Clarksville</li>
               </ul>
            </span>
         </section>

         <section class="california-section under">
            <img src="states-images/california-images/city.jpeg" class="states-images" alt="">
            <span>
               <a href="california.php" class="california-link">California</a>
               <hr class="state-hr">
               <p class="california-description">Check out my California travel and the places I visited which include:</p>
               <ul class="california-description">
                  <li>Disneyland</li>
                  <li>Los Angeles</li>
                  <li>Huntington Beach</li>
               </ul>
            </span>
         </section> 

         <section class="florida-section under">
            <img src="states-images/florida-images/seaworld-green2.jpeg" class="florida-image" alt="">
            <span>
               <a href="florida.php" class="florida-link">Florida</a>
               <hr class="state-hr">
               <p class="florida-description">Check out my Florida travel page and the places that I visited which include:</p>
               <ul class="florida-description">
                  <li>Seaworld</li>
                  <li>Disneyworld</li>
                  <li>Universal Studios</li>
               </ul>
            </span>
         </section>

         <section class="georgia-section under">
            <img src="states-images/georgia-images/atlanta2.jpeg" class="states-images" alt="">
            <span>
               <a href="georgia.php" class="georgia-link">Georgia</a>
               <hr class="state-hr">
               <p class="georgia-description">Check out my Georgia travel and the places I visited which include:</p>
               <ul class="georgia-description">
                  <li>Atlanta</li>
                  <li>CNN</li>
                  <li>World of Coca-Cola</li>
               </ul>
            </span>
         </section>

         <section class="illinois-section under">
            <h3>Illinois</h3>
         </section> 

         <section class="indiana-section under">
            <img src="states-images/indiana-images/kelleys.jpeg" class="states-images" alt=""> 
            <span>
               <a href="indiana.php" class="indiana-link">Indiana</a>
               <hr class="state-hr">
               <p class="indiana-description">Check out my Indiana travel and the places I visited which include:</p>
               <ul class="indiana-description">
                  <li>Bloomington Indiana</li>
                  <li>Indiana University</li>
               </ul>
            </span>
         </section>

         <section class="michigan-section under">
            <img src="states-images/michigan-images/ski.jpeg" class="states-images" alt="">
            <span>
               <a href="michigan.php" class="michigan-link">Michigan</a>
               <hr class="state-hr">
               <p class="michigan-description">Check out Michigan travel page and the places I visited which include:</p>
               <ul class="michigan-description">
                  <li>Sawyer Michigan (Michigan Dunes)</li>
                  <li>Wakefield</li>
                  <li>Lake Michigan Beach</li>
                  <li>Detroit</li>
               </ul>
            </span>
         </section>

         <section class="minnesota-section under">
            <img src="states-images/minnesota-images/city.jpeg" alt="">
            <span>
               <a href="minnesota.php" class="minnesota-link">Minnesota</a>
               <hr class="state-hr">
               <p class="minnesota-description">Check out my Minnesota travel page and the places I visited which include:</p>
               <ul class="minnesota-description">
                  <li>Minneapolis</li>
                  <li>Mall of America</li>
                  <li>Eden Prarie</li>
                  <li>Afton Alps</li>
               </ul>
            </span>
         </section>

         <section class="missouri-section under">
            <img src="states-images/missouri-images/cave2.jpeg" class="states-images" alt=""> 
            <span>
               <a href="missouri.php" class="missouri-link">Missouri</a>
               <hr class="state-hr">
               <p class="missouri-description">Check out my Missouri travel page and the places I visited which include:</p>
               <ul class="missouri-description">
                  <li>University of Missouri</li>
                  <li>Eldon Caves</li>
               </ul>
            </span>
         </section>

         <section class="ohio-section under">
            <img src="states-images/ohio-images/beach-view.jpeg" class="ohio-image" alt="">
            <span>
               <a href="ohio.php" class="ohio-link">Ohio</a>
               <hr class="state-hr">
               <p class="ohio-description">Check out my Ohio travel page and the places I visited which include:</p>
               <ul class="ohio-description">
                  <li>Akron</li> 
                  <li>Cedar Point</li>
                  <li>Cleveland</li>
                  <li>Cincinnati</li>
                  <li>Sandusky</li>
               </ul>
            </span>
         </section>

         <section class="south-dakota-section under">
            <img src="states-images/south-dakota-images/heads-eagle.jpeg" class="states-images" alt="">
            <span>
               <a href="south-dakota.php" class="south-dakota-link">South Dakota</a>
               <hr class="state-hr">
               <p class="south-dakota-description">Check out my South Dakota travel page and the places that I visited which include:</p>
               <ul>
                  <li>Mount Rushmore</li>
                  <li>Downtown Rapid City</li>
                  <li>Custer State Park</li>
               </ul>
            </span>
         </section>

         <section class="tennessee-section under">
            <img src="states-images/tennessee-images/tenessee.jpeg" class="states-images" alt="">
            <span>
               <a href="tennessee.php" class="tennessee-link">Tennessee</a>
               <hr class="state-hr">
               <p class="tennessee-description">Check out my Tennessee travel page and the places I visited which include:</p>
               <ul class="tennessee-description">
                  <li>Gaitlinburg</li>
               </ul>
            </span>
         </section>

         <section class="texas-section under">
            <img src="states-images/texas-images/san-antonio.jpeg" class="texas-image" alt="">
            <span>
               <a href="texas.php" class="texas-link">Texas</a>
               <hr class="state-hr">
               <p class="texas-description">Check out my Texas travel page and the places I visited which include:</p>
               <ul class="texas-description">
                  <li>SeaWorld San Antonio</li> 
                  <li>Discovery Cove</li>
                  <li>Six Flags Fiesta Texas</li>
                  <li>San Antonio's River Walk</li>
                  <li>The Alamo</li>
                  <li>Instituto Cultural De Mexico</li>
               </ul>
            </span>
         </section>

         <section class="utah-section under">
            <img src="states-images/utah-images/salt-lake-city.jpeg" class="states-images" alt="">  
            <span>
               <a href="utah.php" class="utah-link">Utah</a>
               <hr class="state-hr">
               <p class="utah-description">Check out my Utah travel page and the places I visited which include:</p>
               <ul class="utah-description">
                  <li>Salt Lake City</li>
                  <li>Arches National Park</li>
                  <li>Springville</li>
               </ul>
            </span>
         </section>
         
         <section class="dc-section under">
            <h3>Washington D.C</h3>
         </section>

         <section class="west-virginia-section under">
            <img src="states-images/west-virginia-images/mountain.jpeg" class="states-images" alt="">
            <span>
               <a href="west-virginia.php" class="west-virginia-link">West Virginia</a>
               <hr class="state-hr">
               <p class="west-virginia-description">Check out my West Virginia travel page and the places I visited which include:</p>
               <ul class="west-virginia-description">
                  <li>Harpers Ferry</li>
               </ul>
            </span>
         </section>
         
         <section class="wisconsin-section under">
            <h3>Wisconsin</h3>
         </section>
      </div>
   
    <h2 class="travel-header">Here is a map of the states that I have visited shaded in red.</h2>     
    <svg class="united-states-map" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" enable_background="new 0 0 1000 589" height="589px" pretty_print="False" style="stroke-linejoin: round; stroke:#000; fill: none;" version="1.1" viewBox="0 0 1000 589" width="1000px" id="svg" inkscape:version="0.48.4 r9939" sodipodi:docname="us.svg">
        <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1137" id="namedview69" showgrid="false" inkscape:zoom="0.80893016" inkscape:cx="817.66365" inkscape:cy="409.3738" inkscape:window-x="1192" inkscape:window-y="118" inkscape:window-maximized="1" inkscape:current-layer="svg2" />
            <defs id="defs4">
                <style type="text/css" id="style6">path { fill-rule: evenodd; }</style>
            </defs>
    <metadata id="metadata8">
        <views id="views10">
        <view h="589.235294118" padding="0" w="1000" id="view12">
            <proj id="laea-usa" lat0="45" lon0="-100" />
            <bbox h="321.97" w="589.33" x="690.09" y="918.69" id="bbox15"/>
        </view>
        </views>
        <rdf:RDF>
        <cc:Work rdf:about="">
            <dc:format>image/svg+xml</dc:format>
            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
            <dc:title />
        </cc:Work>
        </rdf:RDF>
    </metadata>
    <path inkscape:connector-curvature="0"
     id="MA"
     data-name="Massachusetts"
     data-id="MA"
     d="m 956.31178,153.05085 -0.29118,-0.19412 0,0.29119 0.29118,-0.0971 z m -2.91189,-2.6207 0.67944,-0.29119 0,-0.38825 -0.67944,0.67944 z m 12.03583,-7.57092 -0.0971,-1.35889 -0.19412,-0.7765 0.29119,2.13539 z m -42.41659,-9.9975 -0.67944,0.29119 -5.5326,1.65007 -1.94126,0.67944 -2.23245,0.67944 -0.7765,0.29119 0,0.29119 0.29118,5.04728 0.29119,4.65903 0.29119,4.27078 0.48532,0.29119 1.74714,-0.48532 7.86211,-2.32951 0.19412,0.48531 13.97709,-5.33847 0.0971,0.19413 1.26182,-0.48532 4.4649,-1.74713 4.27078,5.14434 0,0 0.58238,-0.48531 0.29119,-1.45595 -0.0971,2.32952 0,0 0.97063,0 0.29119,1.16475 0.87357,1.65008 0,0 4.56197,-5.5326 3.78546,1.26182 0.87357,-1.94126 6.21204,-3.30015 -2.62071,-5.14435 0.67945,3.30015 -3.20309,2.42658 -3.59133,0.29119 -7.18267,-7.66799 -3.20309,-4.85315 3.20309,-3.39721 -3.30015,-0.19413 -1.35888,-3.20308 -0.0971,-0.19413 -5.53259,6.01791 -12.22996,4.07666 -3.97959,1.26182 0,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9"/> 
     
  <path inkscape:connector-curvature="0" class="MN" id="MN" data-name="Minnesota" data-id="MN"
     d="m 558.54712,73.847349 1.94126,6.891482 4.07665,24.848159 1.94126,9.90044 0.58238,8.73568 2.23246,5.24141 0.48531,4.4649 0.38825,1.45595 -0.0971,0.29119 -3.88252,6.40616 2.52364,4.27078 4.85315,34.16622 0.19413,4.4649 4.85315,-0.29119 19.12144,-1.06769 47.75505,-3.97959 4.7561,-0.48532 0,-0.48531 -1.35889,-7.47386 -5.92085,-3.00896 -4.65903,-4.85315 -7.37679,-4.46491 -2.32952,-0.19412 -3.59133,-2.71777 0.97063,-13.39471 -3.39721,-3.10602 1.16476,-5.43554 6.21204,-5.62966 -1.0677,-11.64757 2.23245,-2.52364 0,0 7.57093,-7.95918 8.63861,-11.065195 3.30015,-2.329514 5.82379,-2.814831 6.11497,-4.561967 -4.07665,0.776505 -2.42658,-1.844199 -9.31806,1.261821 -1.45594,-1.747136 -8.34743,3.397209 -6.69736,-2.814831 -1.84419,-2.232452 -5.33848,0.388253 -3.59133,-1.844199 1.16476,-1.358884 -4.56197,-1.455947 -4.07665,0 -6.50323,2.814831 -1.26182,-1.941263 -10.28869,-1.455947 -3.49427,-8.73568 -0.38826,-2.620705 -4.4649,-1.26182 0.38825,7.47386 -11.8417,0.873568 -14.65653,0.582379 -0.97063,0.09706 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="minnesota.php"><text class="minnesota" x="585" y="140">MN</text></a>

  <path
     inkscape:connector-curvature="0"
     id="MT"
     data-name="Montana"
     data-id="MT"
     d="m 465.65771,72.973781 -32.12789,-2.135389 -23.39221,-2.232451 -23.29515,-2.717768 -14.46241,-1.941262 -23.10102,-3.591336 -11.55051,-1.941262 -25.81879,-4.950219 -2.71777,-0.582379 -4.17371,19.800877 1.8442,3.591335 1.45595,5.532598 -0.87357,0.776505 1.8442,5.047282 2.52364,2.135389 7.18267,12.035829 0.67944,2.03832 2.91189,-0.19412 -3.39721,15.91835 -1.35888,0.38825 -1.8442,5.33847 9.60925,0.67944 0.77651,4.46491 5.43553,13.29765 0.97063,0.7765 3.78546,7.76505 0.97063,-0.7765 8.05624,-0.0971 10.19163,1.0677 2.52364,-3.30015 3.00896,5.43553 0.58238,0.29119 0.0971,-0.58237 1.35888,-9.51219 33.19559,4.07665 26.49823,2.52364 13.97709,1.16476 24.94522,1.45595 1.26182,0.0971 0.29119,0 0.0971,-1.35888 0.29119,-6.69736 0.38825,-8.83274 0.0971,-2.23246 0.19413,-3.88252 1.55301,-30.47782 1.26182,-23.683401 0.0971,-3.882525 -1.8442,-0.09706 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="ND"
     data-name="North Dakota"
     data-id="ND"
     d="m 556.50879,73.847349 -29.31306,0.582379 -20.48032,-0.09706 -17.56842,-0.388253 -20.57738,-0.776505 -1.0677,-0.09706 -0.0971,3.882525 -1.26182,23.683405 -1.55301,30.47782 -0.19413,3.88252 3.78546,0.19413 42.80484,1.16476 39.50469,-0.29119 16.40367,-0.48532 3.30014,-0.19412 -0.38825,-1.45595 -0.48531,-4.4649 -2.23246,-5.24141 -0.58238,-8.73568 -1.94126,-9.90044 -4.07665,-24.848163 -1.94126,-6.891482 -2.03833,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="HI"
     data-name="Hawaii"
     data-id="HI"
     d="m 416.34965,514.99923 -3.00896,-2.23245 -2.6207,0.67944 0.58238,5.43553 -3.59134,4.46491 3.10602,7.08561 0.87357,7.27973 3.59133,2.32951 2.23246,-3.59133 3.97958,-2.91189 4.85316,-1.26183 5.33847,-4.56196 -5.24141,-4.46491 -0.0971,-2.71776 -9.9975,-5.5326 z m -17.66549,-7.86211 -1.45595,-1.26182 -1.35888,1.8442 2.81483,-0.58238 z m -7.27973,-4.17372 0.38825,-3.59133 -1.8442,-0.29119 1.45595,3.88252 z m 6.11497,-5.92085 -1.65007,0.77651 1.16476,3.6884 2.52364,0.19412 0.7765,3.20308 2.71777,1.16476 6.01791,-2.81483 -5.62966,-4.65903 -5.92085,-1.55301 z m -12.42408,-3.97959 -0.87356,2.62071 4.17371,-0.0971 3.88252,0.97063 -2.03832,-3.20309 -5.14435,-0.29119 z m -12.22995,-7.66798 -2.23245,-2.13539 -4.27078,3.30015 2.71777,5.04728 1.94126,-2.03833 5.5326,1.16476 -0.48532,-2.32952 -3.20308,-3.00895 z m -43.48428,-4.27078 0.58238,-1.35888 1.65007,-0.87357 -2.23245,2.23245 z m 15.43304,-8.83274 -6.79442,2.52364 -0.67944,1.8442 2.71777,1.94126 3.78546,0.97063 2.71776,-5.33847 -1.74713,-1.94126 z m -47.07561,-17.85962 0,-0.0971 -0.19413,0 0.19413,0.0971 z m -51.44346,-12.71527 0,0.19413 0.0971,0 -0.0971,-0.19413 z m -26.98355,-4.4649 0.0971,0.0971 0,0 -0.0971,-0.0971 z m -1.06769,-1.94126 0,0 0,0 0,0 z m -0.87357,-0.97063 -0.19412,0 0,0.0971 0.19412,-0.0971 z m 0.67944,0 -0.0971,0 0.0971,0 0,0 z m -0.0971,-0.0971 0,0 0,0.0971 0,-0.0971 z m -30.47782,-25.04228 -0.0971,-0.29119 0,0.0971 0.0971,0.19413 z m -66.48824,-21.25682 -0.29119,0.29118 0.19413,0.0971 0.0971,-0.38825 z m -70.370758,-49.01688 0,0 0,0 0,0 z m 2.426578,0.0971 -0.09706,0 0,0 0.09706,0 z m -0.485316,-0.0971 0,0 0,0 0,0 z m -41.445952,-18.1508 0.291189,-0.0971 0,-0.19412 -0.291189,0.29119 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="ID"
     data-name="Idaho"
     data-id="ID"
     d="m 309.0949,52.881715 -8.63862,-1.747136 -2.81483,-0.679442 -1.26182,-0.291189 -11.25932,50.666952 0.48532,4.17371 -0.38826,4.36784 0.19413,0.97063 0,0.0971 0.0971,1.84419 3.30015,3.59134 -4.75609,11.93876 -10.09457,13.20059 -0.29119,2.42658 2.62071,6.21204 -9.221,38.24287 -0.38825,2.03832 2.71776,0.58238 27.46887,5.43553 10.96813,2.03833 2.81483,0.48532 2.71777,0.48531 13.97709,2.23245 25.04228,3.78546 2.81483,0.38826 0.38825,-3.20309 0.87357,-6.3091 3.30015,-25.23641 1.74714,-12.52114 0.38825,-3.20309 -0.58238,-0.29119 -3.00896,-5.43553 -2.52364,3.30015 -10.19163,-1.0677 -8.05624,0.0971 -0.97063,0.7765 -3.78546,-7.76505 -0.97063,-0.7765 -5.43553,-13.29765 -0.77651,-4.46491 -9.60925,-0.67944 1.8442,-5.33847 1.35888,-0.38825 3.39721,-15.91835 -2.91189,0.19412 -0.67944,-2.03832 -7.18267,-12.035829 -2.52364,-2.135389 -1.8442,-5.047282 0.87357,-0.776505 -1.45595,-5.532598 -1.8442,-3.591335 4.17371,-19.800877 -0.0971,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="WA"
     data-name="Washington"
     data-id="WA"
     d="m 192.13384,77.050432 0.0971,-1.650073 -0.19412,0.09706 0.0971,1.55301 z m 20.67445,-8.832744 0.58237,-0.970631 -0.67944,-0.09706 0.0971,1.067694 z m -1.8442,-1.747136 0.58237,-1.941262 -0.58237,-0.194127 0,2.135389 z m 7.0856,-2.814831 -0.0971,-1.941262 -1.65007,2.523641 1.74713,-0.582379 z m 0.19413,-4.076651 0.29119,-1.941262 -0.19413,-0.485316 -0.0971,2.426578 z m 0.29119,-9.512185 -0.0971,-1.067695 -0.38826,-0.09706 0.48532,1.164758 z m 3.10602,-6.406166 -0.87357,-0.09706 -1.74713,2.717767 2.6207,-2.620704 z m -2.42658,-2.620705 0.48532,-0.388252 0.0971,-0.291189 -0.58238,0.679441 z m -0.48531,0.29119 -0.29119,-1.941263 -0.87357,1.650073 1.16476,0.29119 z m -0.48532,-2.717768 -0.87357,-0.388252 0.67944,0.970631 0.19413,-0.582379 z m 2.91189,1.650074 0,-1.261821 -0.29119,0.485316 0.29119,0.776505 z m 0.87357,-1.261821 -0.38825,-0.291189 -0.0971,0 0.48531,0.291189 z m -5.5326,-2.135389 -0.48531,-0.388252 -0.19413,-0.09706 0.67944,0.485315 z m 3.59134,-0.388252 -2.6207,0.679442 0.67944,0.194126 1.94126,-0.873568 z m -2.13539,-0.194126 -0.48531,-0.582379 -0.0971,0.09706 0.58238,0.485316 z m 2.03833,-1.164758 -0.38826,0 0.48532,0.194126 -0.0971,-0.194126 z m -19.02438,49.793381 3.49428,3.785461 -0.58238,7.279734 0.67944,1.8442 5.24141,2.81483 14.75359,1.35888 0.58238,1.74714 6.98855,0.0971 6.60029,0.87357 10.774,-1.16476 5.33848,0.87357 1.45594,-0.67944 27.27474,6.21204 1.8442,0.38825 -0.19413,-0.97063 0.38826,-4.36784 -0.48532,-4.17371 11.25932,-50.666952 -1.55301,-0.29119 -22.71277,-5.338471 -19.80087,-5.047282 -22.42159,-6.21204 -6.69735,-1.650073 1.55301,8.444491 -1.45595,2.717768 -2.6207,-1.358884 2.52364,11.744637 -2.71777,3.882525 -1.26182,3.591336 0,3.688398 -5.72672,3.979588 -2.42658,-1.55301 -2.32952,1.164758 4.27078,-5.532598 -1.06769,3.785462 2.42658,-2.620705 1.94126,0.388253 -0.58238,-4.853156 1.26182,0.194126 2.6207,-5.823787 -0.87356,-0.873568 -3.39721,4.36784 -2.23246,0.09706 2.42658,-2.717767 2.71777,-0.679442 -0.97063,-4.950219 -2.71777,-0.679442 -1.35888,-2.329515 -1.65008,0.873568 -8.9298,-3.882524 -7.86211,-6.114977 -2.13539,5.92085 -0.19413,2.523641 1.65007,4.464904 -1.06769,14.462405 -0.77651,2.232452 4.36784,0.388252 -4.36784,3.10602 2.32952,1.164757 -1.8442,6.21204 -0.87357,-4.853156 -1.65007,5.629661 2.23245,2.717767 2.42658,-0.194126 2.91189,1.747136 1.45595,2.814831 1.74713,0 0,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="AZ"
     data-name="Arizona"
     data-id="AZ"
     d="m 372.18593,309.90486 -32.71027,-4.07665 -17.56843,-2.52365 -25.04228,-3.97958 -2.52364,-0.38826 0,0.19413 -4.27078,18.83025 -2.23245,-0.0971 -3.39721,-3.00895 -4.27078,3.59133 -0.0971,15.43304 -1.55301,3.30014 0,0.29119 0,0.0971 -0.19413,2.42657 3.39721,9.12394 3.00896,4.07665 -5.43554,3.20308 -2.13539,3.97959 -3.49427,8.54155 -1.74713,0.38826 -0.0971,7.0856 3.00896,2.23246 -1.55301,4.27077 -3.49427,0.19413 0,0 -2.03833,3.78546 6.98855,4.36784 13.20058,7.3768 40.76651,21.64507 34.55447,4.27078 0.38825,0 2.71777,-28.63362 0.67944,-7.08561 7.27974,-75.12685 0.38825,-3.49427 -2.52364,-0.29119 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="CA" id="CA" data-name="California" data-id="CA"
     d="m 206.01387,363.77489 0.38825,2.13539 0,0.38825 -0.38825,-2.52364 z m -14.26828,-8.34743 0.67944,1.45595 0.38825,-0.0971 -1.06769,-1.35888 z m 16.98604,-0.29119 0.29119,2.52364 1.74714,1.26182 -2.03833,-3.78546 z m -11.74463,-13.78296 -1.0677,-0.29119 0.87357,0.38825 0.19413,-0.0971 z m -10.77401,-2.9119 -2.6207,1.55301 0.67944,0.67945 1.94126,-2.23246 z m -5.04728,-1.8442 -0.19413,0.77651 0.87357,0.19413 -0.67944,-0.97064 z m 8.54155,1.94127 4.27078,2.42658 0.77651,-0.67945 -5.04729,-1.74713 z m -33.09852,-85.51261 -0.0971,0.0971 0.0971,-0.0971 0,0 z m 10.38575,0.48531 -0.0971,-0.29119 0,0.38826 0.0971,-0.0971 z m 56.00542,-73.6709 -3.78546,-0.97064 -41.54301,-11.45344 -15.43304,-4.65903 0,0.38825 -0.87357,9.60925 -4.07665,11.35638 -6.79442,8.44449 -0.19412,4.27078 3.30014,5.92085 1.65008,7.76505 -2.32952,6.3091 0.38825,6.30911 -1.16475,2.6207 3.97958,8.63862 2.52364,3.30015 -0.19412,9.41512 6.01791,5.72672 3.49427,-5.82378 3.78547,3.00895 1.45594,-1.35888 -5.24141,0.97063 -0.0971,4.95022 1.0677,6.21204 -2.9119,-2.81483 -1.65007,-3.78546 -0.48532,5.2414 1.35889,10.38576 5.43553,6.69735 -3.59133,4.65903 0.58237,5.92085 3.88253,6.01792 6.79442,18.63612 2.13539,1.16475 -0.67945,12.9094 1.0677,1.55301 14.55947,5.24141 4.4649,4.75609 1.55301,3.10602 4.27078,2.42658 4.65903,0.87357 1.94126,5.33847 3.88252,1.8442 5.82379,6.89148 5.43554,9.02687 -0.38826,8.34743 3.00896,3.97958 39.69882,3.88253 0,0 3.49427,-0.19413 1.55301,-4.27077 -3.00896,-2.23246 0.0971,-7.0856 1.74713,-0.38826 3.49427,-8.54155 2.13539,-3.97959 5.43554,-3.20308 -3.00896,-4.07665 -3.39721,-9.12394 0.19413,-2.42657 0,-0.0971 -2.52364,-3.39721 -7.76505,-10.38575 -15.04479,-21.15976 -20.96563,-30.08957 -11.8417,-16.40366 -11.45345,-16.50074 13.20058,-56.00542 0.87357,-3.68839 z"
     style="stroke-width:0.97063118000000004;"/>
    <a href="california.php"><text class="california" x="195" y="300">CA</text></a>
  <path
     inkscape:connector-curvature="0"
     id="CO"
     data-name="Colorado"
     data-id="CO"
     d="m 489.6323,255.54951 0.38826,-19.02437 -4.65903,-0.19413 -23.6834,-0.87357 -2.32952,-0.0971 -1.94126,-0.0971 -28.82775,-1.8442 -19.2185,-1.55301 -23.97459,-2.32952 -2.32951,-0.29119 -0.29119,2.52365 -5.24141,50.56988 -1.8442,17.66549 -0.7765,7.66799 -0.19413,2.52364 3.00896,0.29119 48.91981,4.27077 21.54801,1.35889 21.45095,0.97063 3.10602,0.0971 1.94126,0.0971 4.07665,0.0971 1.94127,0.0971 6.11497,0.19413 1.55301,0 0,-1.94127 1.0677,-51.34639 0.0971,-5.72672 0,-1.8442 0.0971,-1.26182 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="NV"
     data-name="Nevada"
     data-id="NV"
     d="m 294.82662,295.8307 10.09457,-62.79983 5.14434,-31.44846 0.58238,-3.10601 -2.81483,-0.48532 -10.96813,-2.03833 -27.46887,-5.43553 -2.71776,-0.58238 -2.71777,-0.58238 -13.6859,-3.00895 -24.55697,-5.82379 -2.71777,-0.67944 -0.87357,3.68839 -13.20058,56.00542 11.45345,16.50074 11.8417,16.40366 20.96563,30.08957 15.04479,21.15976 7.76505,10.38575 2.52364,3.39721 0,-0.29119 1.55301,-3.30014 0.0971,-15.43304 4.27078,-3.59133 3.39721,3.00895 2.23245,0.0971 4.27078,-18.83025 0,-0.19413 0.48531,-3.10602 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="NM"
     data-name="New Mexico"
     data-id="NM"
     d="m 472.45213,324.75551 0.0971,-2.52364 0.0971,-2.52364 0.0971,-2.52364 -3.10602,-0.0971 -21.45095,-0.97063 -21.54801,-1.35889 -48.91981,-4.27077 -3.00896,-0.29119 -0.38825,3.49427 -7.27974,75.12685 -0.67944,7.08561 -2.71777,28.63362 0.38826,0.0971 13.39471,1.26183 1.26182,-6.79442 2.42658,-1.94127 27.17767,2.42658 0.19413,0 -2.42658,-4.75609 12.32701,0.87357 30.76901,1.74713 19.2185,0.87357 3.30015,-91.0452 0.67944,0.0971 0.0971,-2.62071 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="OR"
     data-name="Oregon"
     data-id="OR"
     d="m 162.2384,162.75717 15.43304,4.65903 41.54301,11.45344 3.78546,0.97064 2.71777,0.67944 24.55697,5.82379 13.6859,3.00895 2.71777,0.58238 0.38825,-2.03832 9.221,-38.24287 -2.62071,-6.21204 0.29119,-2.42658 10.09457,-13.20059 4.75609,-11.93876 -3.30015,-3.59134 -0.0971,-1.84419 0,-0.0971 -1.8442,-0.38825 -27.27474,-6.21204 -1.45594,0.67944 -5.33848,-0.87357 -10.774,1.16476 -6.60029,-0.87357 -6.98855,-0.0971 -0.58238,-1.74714 -14.75359,-1.35888 -5.24141,-2.81483 -0.67944,-1.8442 0.58238,-7.279734 -3.49428,-3.785461 -0.29118,0.09706 -0.67945,0.485315 -4.85315,-2.523641 -2.9119,0.873568 -1.94126,-0.970631 -2.03832,8.347429 -1.35889,2.329514 -6.01791,14.656531 -1.74714,8.05624 -1.06769,0.0971 -5.62966,13.39471 -3.78546,5.72672 -1.35889,0.97063 -3.49427,6.79442 -0.67944,7.18267 -2.13539,6.40617 1.26182,5.82378 0,0.0971 z m 35.5251,-79.688825 -0.29119,-0.873568 -0.0971,0.679442 0.38825,0.194126 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="UT" id="UT" data-name="Utah" data-id="UT"
     d="m 352.38505,204.97962 -25.04228,-3.78546 -13.97709,-2.23245 -2.71777,-0.48531 -0.58238,3.10601 -5.14434,31.44846 -10.09457,62.79983 -0.48531,3.10602 2.52364,0.38826 25.04228,3.97958 17.56843,2.52365 32.71027,4.07665 2.52364,0.29119 0.19413,-2.52364 0.7765,-7.66799 1.8442,-17.66549 5.24141,-50.56988 0.29119,-2.52365 -1.94126,-0.19412 -24.7511,-3.00896 -3.78546,-0.48531 2.42658,-18.92731 0.19412,-1.26182 -2.81483,-0.38826 z"
     style="stroke-width:0.97063118000000004;"/>
    <a href="utah.php"><text class="utah" x="327" y="270">UT</text></a>
  <path
     inkscape:connector-curvature="0"
     id="WY"
     data-name="Wyoming"
     data-id="WY"
     d="m 461.38694,192.16729 0.7765,-15.14184 0.97063,-20.38326 0.0971,-2.52364 -1.26182,-0.0971 -24.94522,-1.45595 -13.97709,-1.16476 -26.49823,-2.52364 -33.19559,-4.07665 -1.35888,9.51219 -0.0971,0.58237 -0.38825,3.20309 -1.74714,12.52114 -3.30015,25.23641 -0.87357,6.3091 -0.38825,3.20309 -0.19412,1.26182 -2.42658,18.92731 3.78546,0.48531 24.7511,3.00896 1.94126,0.19412 2.32951,0.29119 23.97459,2.32952 19.2185,1.55301 28.82775,1.8442 1.94126,0.0971 0.0971,-2.52364 0.48532,-10.19163 0.87357,-17.76255 0.38825,-7.57092 0.0971,-2.52364 0.0971,-2.62071 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="AR" id="AR" data-name="Arkansas" data-id="AR"
     d="m 690.4559,328.05566 -10.48282,1.55301 4.27078,-6.79442 -1.8442,-3.78546 -36.98105,3.59134 -31.25432,2.52364 -4.56197,0.29119 0.58238,2.71776 3.78546,19.60675 0.0971,4.36784 1.0677,26.40117 0.0971,4.36784 0.29119,0.0971 1.45595,1.55301 5.82378,-0.19413 0.58238,8.54155 0.19413,2.42658 3.00896,-0.29119 9.22099,-0.67944 36.5928,-3.39721 0.19412,0 -0.0971,-2.13539 0.97063,-0.67944 -1.74713,-3.30014 3.6884,-15.5301 -1.45595,-1.74714 5.5326,-6.11498 -0.38826,-5.2414 4.07665,-6.79442 0,-0.0971 -0.19412,-0.19412 3.49427,-3.20309 -0.97063,-3.88252 2.71777,-4.27078 -0.58238,-3.97959 2.91189,-5.62966 0,-0.0971 -0.0971,0 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="arkansas.php"><text class="arkansas" x="635" y="360">AR</text></a>
  <path
     inkscape:connector-curvature="0"
     id="IA"
     data-name="Iowa"
     data-id="IA"
     d="m 661.53109,197.69989 -5.33847,-2.81483 -2.9119,-3.97959 -0.97063,-5.72672 0.77651,-2.62071 -2.81483,-3.39721 0,0 -4.7561,0.48532 -47.75505,3.97959 -19.12144,1.06769 -4.85315,0.29119 -2.03833,0.0971 1.65008,10.77401 -1.35889,5.14435 2.13539,3.20308 0,0.67944 0.67944,0.0971 3.10602,9.12394 3.00896,4.75609 0.19413,5.43554 3.30014,4.56196 -0.58238,1.94126 3.00896,12.22996 0,0.29119 0,0 19.89794,-0.58238 21.25682,-1.8442 20.86857,-2.62071 4.7561,4.17372 0.19412,0.19412 0.87357,-0.38825 -0.67944,-3.78546 3.59133,-2.23245 1.45595,-9.90044 -1.45595,-0.67944 0.87357,-5.04728 4.36784,-0.87357 4.85316,-3.49427 2.13539,-6.11498 0.0971,-3.10602 -3.88252,-3.6884 -1.16476,-2.32951 -3.6884,-2.32952 0.19413,-0.48531 0.0971,-0.48532 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="KS"
     data-name="Kansas"
     data-id="KS"
     d="m 608.92288,312.71969 -2.42658,-41.0577 -4.36784,-2.52364 -0.38825,-1.94127 -3.49428,-3.10602 3.39721,-4.17371 -1.35888,-2.42658 -2.52364,0.0971 -2.32952,-1.65008 -0.97063,-0.7765 -3.30014,0.19412 -35.81629,1.35889 -16.40367,0.38825 -32.61321,0 -13.10352,-0.19413 -3.6884,-0.0971 0,1.8442 -0.0971,5.72672 -1.0677,51.34639 0,1.94127 4.17372,0.0971 22.51864,0.29119 52.70528,-0.77651 37.56342,-1.74713 3.6884,-0.29119 -0.0971,-2.52364 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="MO" id="MO" data-name="Missouri" data-id="MO"
     d="m 653.66898,242.44599 -4.7561,-4.17372 -20.86857,2.62071 -21.25682,1.8442 -19.89794,0.58238 0,0 -0.0971,0.58238 2.42657,4.65903 2.23246,1.553 2.6207,4.65903 0.38825,0.38826 0.97063,0.7765 2.32952,1.65008 2.52364,-0.0971 1.35888,2.42658 -3.39721,4.17371 3.49428,3.10602 0.38825,1.94127 4.36784,2.52364 2.42658,41.0577 0.0971,2.52364 0.19413,2.52364 0.0971,2.52364 0.19413,2.6207 0.0971,2.52365 4.56197,-0.29119 31.25432,-2.52364 36.98105,-3.59134 1.8442,3.78546 -4.27078,6.79442 10.48282,-1.55301 0.0971,0 0,-0.7765 0.19413,-4.46491 1.94126,-2.42658 -0.58238,-2.71776 -0.0971,-0.0971 -0.0971,-0.0971 0.38825,-1.26182 0.58238,0.19413 0.29119,0.7765 -0.0971,0.29119 0,0.0971 0,0.77651 0.38826,0.0971 0.7765,-0.97063 0,-0.0971 0.0971,-0.29119 2.52364,-1.55301 0.38826,-0.19413 0.87357,-7.95917 -0.19413,-0.38826 -0.29119,-0.0971 -6.89148,-5.62966 1.06769,-2.03833 -1.94126,-5.53259 -3.49427,-2.71777 -6.60029,-2.9119 -4.17372,-3.3972 0.48532,-6.98855 1.26182,-6.50323 -6.98855,0.38825 -2.13539,-2.23245 -0.97063,-4.4649 -11.06519,-9.31806 -3.10602,-8.63862 0.7765,-4.27078 0,0 -0.19412,-0.19412 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="missouri.php"><text class="missouri" x="627" y="290">MO</text></a>
  <path
     inkscape:connector-curvature="0"
     id="NE"
     data-name="Nebraska"
     data-id="NE"
     d="m 572.33008,204.68843 -3.00895,-3.00895 -10.57988,-3.10602 -3.39721,-0.0971 -5.14435,1.45594 -6.11498,-3.88252 -19.12143,0.19412 -27.85712,-0.29119 -32.90439,-1.06769 -2.9119,-0.0971 -0.0971,2.52364 -0.38825,7.57092 -0.87357,17.76255 -0.48532,10.19163 -0.0971,2.52364 2.32952,0.0971 23.6834,0.87357 4.65903,0.19413 -0.38826,19.02437 -0.0971,1.26182 3.6884,0.0971 13.10352,0.19413 32.61321,0 16.40367,-0.38825 35.81629,-1.35889 3.30014,-0.19412 -0.38825,-0.38826 -2.6207,-4.65903 -2.23246,-1.553 -2.42657,-4.65903 0.0971,-0.58238 0,-0.29119 -3.00896,-12.22996 0.58238,-1.94126 -3.30014,-4.56196 -0.19413,-5.43554 -3.00896,-4.75609 -3.10602,-9.12394 -0.67944,-0.0971 -1.8442,-0.19413 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="OK"
     data-name="Oklahoma"
     data-id="OK"
     d="m 609.50526,322.91131 -0.19413,-2.6207 -0.0971,-2.52364 -0.19413,-2.52364 -3.6884,0.29119 -37.56342,1.74713 -52.70528,0.77651 -22.51864,-0.29119 -4.17372,-0.0971 -1.55301,0 -6.11497,-0.19413 -1.94127,-0.0971 -4.07665,-0.0971 -1.94126,-0.0971 -0.0971,2.52364 -0.0971,2.52364 -0.0971,2.52364 -0.0971,2.62071 0.58238,0 23.48927,0.58238 24.84816,0.29119 0.29119,33.19558 1.74714,5.82379 3.88252,3.6884 4.17372,0.19413 0.87356,-1.74714 5.72673,5.24141 7.47386,0.7765 1.35888,1.55301 2.71777,-1.26182 6.79442,3.20309 0,1.84419 2.52364,-0.0971 2.6207,-2.23245 4.85316,3.10602 4.56197,1.65007 3.10601,-4.27077 9.90044,4.65902 3.6884,-3.00895 3.00896,-1.16476 2.42658,0.58238 9.12393,-2.6207 4.85316,2.03832 4.36784,2.81483 3.78546,0.67944 0.0971,0 -0.0971,-4.36784 -1.0677,-26.40117 -0.0971,-4.36784 -3.78546,-19.60675 -0.58238,-2.71776 -0.0971,-2.52365 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="SD" id="SD" data-name="South Dakota" data-id="SD"
     d="m 566.89455,135.57949 -16.40367,0.48532 -39.50469,0.29119 -42.80484,-1.16476 -3.78546,-0.19413 -0.0971,2.23246 -0.38825,8.83274 -0.29119,6.69736 -0.0971,1.35888 -0.29119,0 -0.0971,2.52364 -0.97063,20.38326 -0.7765,15.14184 -0.0971,2.62071 2.9119,0.0971 32.90439,1.06769 27.85712,0.29119 19.12143,-0.19412 6.11498,3.88252 5.14435,-1.45594 3.39721,0.0971 10.57988,3.10602 3.00895,3.00895 1.8442,0.19413 0,-0.67944 -2.13539,-3.20308 1.35889,-5.14435 -1.65008,-10.77401 2.03833,-0.0971 -0.19413,-4.4649 -4.85315,-34.16622 -2.52364,-4.27078 3.88252,-6.40616 0.0971,-0.29119 -3.30014,0.19412 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="south-dakota.php"><text class="south-dakota" x="505" y="175">SD</text></a>
  <path
     inkscape:connector-curvature="0"
     id="LA"
     data-name="Louisiana"
     data-id="LA"
     d="m 688.99995,469.2825 -1.26182,0.29119 -0.58238,0.58238 1.8442,-0.87357 z m 4.07665,0 -0.67944,-0.29119 -0.19412,0.29119 0.87356,0 z m 2.32952,-0.77651 -0.67944,0 -0.38826,0.48532 1.0677,-0.48532 z m -1.16476,-0.67944 -0.19413,-0.29119 -0.0971,0.29119 0.29119,0 z m 7.76505,-5.14434 -0.29119,0.19412 0.48532,0 -0.19413,-0.19412 z m 13.58884,-5.72673 0.58238,-0.7765 -0.67945,0.87357 0.0971,-0.0971 z m 1.94126,-2.52364 -0.19413,0.0971 0,0.0971 0.19413,-0.19413 z m -49.89044,8.54156 1.45594,-1.8442 -3.97959,-1.0677 -1.74713,1.45595 4.27078,1.45595 z m 40.28119,-8.44449 -0.38825,-0.38826 -0.0971,0.19413 0.48532,0.19413 z m 1.06769,-1.74714 -0.97063,-0.29119 0.29119,0.97063 0.67944,-0.67944 z m 7.95918,-1.65007 0,-0.29119 0,0.0971 0,0.19413 z m 1.94126,-1.26182 -0.0971,-0.0971 0.0971,0.19413 0,-0.0971 z m -0.7765,-0.19413 -0.19413,-0.0971 -0.0971,0.29119 0.29119,-0.19413 z m -6.79442,-0.29119 0.87357,-0.29119 0,-0.29119 -0.87357,0.58238 z m 0.48532,-0.48532 0.48531,-0.48531 -0.0971,-0.0971 -0.38825,0.58237 z m -3.39721,-3.59133 -0.19413,0.19413 0.0971,0 0.0971,-0.19413 z m -35.8163,-54.35535 -0.19412,0 -36.5928,3.39721 -9.22099,0.67944 -3.00896,0.29119 0.0971,2.32952 1.94126,18.73318 3.20309,4.4649 0.0971,2.62071 3.10602,5.43553 2.52364,7.95918 -0.87357,4.4649 -0.67944,11.0652 -1.45594,3.59133 0.19412,0 0.29119,2.52364 -1.65007,2.32952 12.03582,-1.35889 9.41513,2.62071 6.69735,0.87357 3.39721,-2.42658 -1.8442,-2.42658 6.21204,-1.94126 -0.19412,2.13539 3.20308,-0.77651 2.6207,4.07665 2.23245,-0.7765 5.82379,3.97959 -3.59133,1.26182 8.25036,2.42657 3.10602,0 1.8442,-2.23245 3.97959,-2.13539 2.81483,4.07666 1.94126,-3.6884 -0.58238,-5.82379 5.24141,2.03833 0.58238,1.74713 6.21204,0.77651 3.10602,2.52364 -0.38825,2.03832 4.36784,-4.07665 -1.65008,-2.13539 -7.27973,-1.8442 -2.71777,-1.55301 -0.0971,-2.91189 3.00896,0.38825 2.32951,-4.75609 -3.00896,-4.17371 -1.65007,3.97958 -3.78546,-0.67944 2.6207,-4.27078 -1.74713,-0.48531 -4.27078,3.00896 -6.11498,0.38825 -1.74713,-1.35889 2.81483,-4.95021 3.30014,-0.0971 5.62967,1.8442 4.07665,0.38825 0,0 -2.23245,-2.81483 -4.27078,-8.34742 1.16476,-4.65903 -33.48678,3.68839 1.26182,-1.26182 -1.35888,-3.49427 2.03832,-3.00896 1.16476,-7.57092 7.3768,-12.6182 -3.59134,-4.36784 0.19413,-3.20309 -2.23246,-5.24141 0,-0.67944 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="TX" id="TX" data-name="Texas" data-id="TX"
     d="m 573.98015,536.93549 -4.65902,-17.56842 0,3.30015 4.65902,14.26827 z m -1.06769,-30.86607 -3.30015,6.21204 -0.38825,2.03833 3.6884,-8.25037 z m 2.6207,-4.56196 3.10602,-4.07666 -2.23245,1.35889 -0.87357,2.71777 z m 10.96814,-9.90044 -7.27974,3.78546 2.03833,-0.38825 5.24141,-3.39721 z m 0.97063,-1.35889 2.03832,-1.65007 -0.7765,0.19413 -1.26182,1.45594 z m -115.11686,-162.87191 -0.67944,-0.0971 -3.30015,91.0452 -19.2185,-0.87357 -30.76901,-1.74713 -12.32701,-0.87357 2.42658,4.75609 0.0971,0.0971 10.48282,10.48281 6.01791,7.08561 7.95917,5.92085 5.62967,10.28869 2.13538,10.77401 4.56197,3.00895 3.59134,3.97959 5.14434,1.8442 7.47386,4.75609 3.39721,1.26183 4.65903,-4.65903 1.45595,-4.95022 2.42658,-4.7561 7.57092,-3.00895 2.91189,1.45594 8.44449,0.67945 7.66799,4.75609 5.24141,0.97063 -1.45595,2.71777 3.00896,1.94126 2.81483,3.39721 0.58238,3.59133 1.8442,2.42658 4.27077,10.28869 4.27078,3.59134 3.30015,5.43553 4.17371,4.27078 1.8442,0.58238 1.55301,11.06519 4.56197,2.52365 0.19412,3.49427 1.16476,-0.29119 7.95918,9.70631 3.97959,0.87357 5.04728,3.00896 7.76505,0 5.62966,3.10601 6.69735,-1.45594 -3.00895,-2.81483 -2.71777,-8.1533 -1.06769,-7.08561 -1.55301,-2.32952 0.67944,-4.75609 -2.03833,-0.19413 -2.71777,-4.4649 3.10602,3.30015 3.59134,-1.26182 1.94126,-5.14435 -3.88252,-5.24141 5.82378,0.67944 2.71777,-4.17371 -0.38825,-1.45595 2.42658,-3.20308 -0.58238,2.81483 2.71777,-2.13539 -1.0677,-3.78546 3.49427,1.8442 4.46491,-2.52364 -4.36784,-4.56197 2.71776,1.0677 5.04729,0.29119 6.60029,-1.45595 7.3768,-4.95022 4.4649,-3.6884 0.67944,-2.71777 2.71777,-2.81483 -1.45595,-4.65903 0.29119,-2.91189 4.85316,-2.13539 -0.38826,5.14435 2.9119,0 -3.20308,2.71776 12.90939,-6.79441 2.13539,-0.0971 1.35888,-6.21204 0.38826,0 1.45594,-3.59133 0.67944,-11.0652 0.87357,-4.4649 -2.52364,-7.95918 -3.10602,-5.43553 -0.0971,-2.62071 -3.20309,-4.4649 -1.94126,-18.73318 -0.0971,-2.32952 -0.19413,-2.42658 -0.58238,-8.54155 -5.82378,0.19413 -1.45595,-1.55301 -0.29119,-0.0971 -0.0971,0 -3.78546,-0.67944 -4.36784,-2.81483 -4.85316,-2.03832 -9.12393,2.6207 -2.42658,-0.58238 -3.00896,1.16476 -3.6884,3.00895 -9.90044,-4.65902 -3.10601,4.27077 -4.56197,-1.65007 -4.85316,-3.10602 -2.6207,2.23245 -2.52364,0.0971 0,-1.84419 -6.79442,-3.20309 -2.71777,1.26182 -1.35888,-1.55301 -7.47386,-0.7765 -5.72673,-5.24141 -0.87356,1.74714 -4.17372,-0.19413 -3.88252,-3.6884 -1.74714,-5.82379 -0.29119,-33.19558 -24.84816,-0.29119 -23.48927,-0.58238 -0.58238,0 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="texas.php"><text class="texas" x="525" y="430">TX</text></a>
  <path
     inkscape:connector-curvature="0"
     id="CT"
     data-name="Connecticut"
     data-id="CT"
     d="m 936.99622,143.34454 -13.97709,5.33847 -0.19412,-0.48531 -7.86211,2.32951 -1.74714,0.48532 0.19413,0.97063 3.68839,14.26828 1.16476,1.45595 -2.52364,3.10602 1.74714,1.65007 0,0 5.62966,-5.43554 3.00895,-4.17371 0.58238,1.16476 14.17122,-6.30911 0.29119,-0.29118 -0.0971,-2.32952 -0.58237,-2.03833 -3.00896,-8.44449 -0.38825,-1.06769 -0.0971,-0.19413 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="NH"
     data-name="New Hampshire"
     data-id="NH"
     d="m 923.8927,75.982738 -1.26182,1.55301 -1.45594,-0.29119 -0.77651,6.406166 0,0.09706 2.32952,8.735681 -0.19413,1.747136 -4.17372,5.532598 1.0677,5.047281 0,6.30911 -0.77651,5.82378 4.36784,15.91836 0,0 0,0 3.97959,-1.26182 12.22996,-4.07666 5.53259,-6.01791 0,0 0,-1.55301 0.29119,-2.52364 -0.67944,0.29119 -0.0971,-0.58238 -6.11498,-7.47386 -0.19413,-0.67944 -14.07415,-33.001465 0,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="RI"
     data-name="Rhode Island"
     data-id="RI"
     d="m 946.50841,152.08022 -0.0971,-2.03832 -0.29119,0.7765 0.38825,1.26182 z m 1.94126,-1.55301 -1.26182,-2.42657 -0.0971,2.52364 1.35888,-0.0971 z m -0.58238,-3.00895 0.67944,1.74713 0.87357,1.55301 0.58238,-1.16475 -0.87357,-1.65008 -0.29119,-1.16475 -0.97063,0 0,0.67944 z m -10.774,-3.97959 0.38825,1.06769 3.00896,8.44449 0.58237,2.03833 0.0971,2.32952 0.19412,-0.29119 4.65903,-3.6884 -0.87356,-6.60029 1.94126,-0.38826 0,0 -4.27078,-5.14434 -4.4649,1.74713 -1.26182,0.48532 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="VT"
     data-name="Vermont"
     data-id="VT"
     d="m 923.01913,132.86173 -4.36784,-15.91836 0.77651,-5.82378 0,-6.30911 -1.0677,-5.047278 4.17372,-5.532598 0.19413,-1.747136 -2.32952,-8.735681 -1.26182,0.485316 -5.33847,1.941262 -5.24141,2.038326 -12.03583,4.36784 -0.67944,0.194126 4.36784,10.191633 1.45595,9.60924 5.14434,8.05624 4.85316,15.91835 0.19413,-0.0971 0.7765,-0.29119 2.23245,-0.67944 1.94126,-0.67944 5.5326,-1.65007 0.67944,-0.29119 0,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="AL"
     data-name="Alabama"
     data-id="AL"
     d="m 718.31301,344.84758 0.38826,0.77651 1.35888,0.87356 0.58238,39.79588 0.19413,21.8392 4.95021,29.89545 0.38826,-0.0971 4.36784,0.87357 1.16475,-8.63862 1.94127,4.85316 3.30014,3.00896 6.30911,-3.6884 -0.67945,-0.58238 0.19413,0.0971 -4.36784,-9.9975 41.93127,-6.79442 2.81483,-0.48531 0,-0.0971 -2.62071,-4.95022 -0.19412,-7.0856 -2.13539,-3.88253 1.06769,-7.57092 1.74714,-1.94126 -7.18267,-12.81234 -13.00646,-39.60175 -0.0971,-0.19413 -2.9119,0.48532 -15.5301,2.52364 -7.76504,0.97063 -16.30661,2.23245 0.0971,0.19413 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="FL" id="FL" data-name="Florida" data-id="FL"
     d="m 854.6867,535.28542 -0.19413,0 0.0971,0.0971 0.0971,-0.0971 z m -0.87357,-0.0971 0,0.0971 0.0971,0 -0.0971,-0.0971 z m 0.19413,-0.0971 0,-0.0971 0,0.0971 0,0 z m -13.20059,1.45594 0,0 0,0.0971 0,-0.0971 z m -0.19412,0.0971 0,-0.0971 0,0.0971 0,0 z m 0.0971,-0.0971 0,0 0,0 0,0 z m -0.97063,0.0971 -0.0971,0 0,0.0971 0.0971,-0.0971 z m 27.56592,-6.11498 -0.0971,0 0.0971,0.19412 0,-0.19412 z m 2.62071,-0.67944 0,-0.19413 -0.19413,0.29119 0.19413,-0.0971 z m -0.97063,-0.19413 -0.38826,-0.38825 -0.0971,0.0971 0.48532,0.29119 z m -0.29119,0.77651 -1.16476,-1.45595 0.67944,1.26182 0.48532,0.19413 z m 9.22099,-5.72673 0,0.38825 0.19413,-0.19412 -0.19413,-0.19413 z m 1.35889,-0.97063 0.29119,-0.48532 -0.38826,0.38826 0.0971,0.0971 z m 0.29119,-0.97063 -0.0971,0 0,0.0971 0.0971,-0.0971 z m -1.74714,-0.29119 -0.0971,-0.0971 0.0971,0.0971 0,0 z m 0.87357,-1.45595 -0.0971,-0.0971 0,0.19413 0.0971,-0.0971 z m -2.62071,-0.0971 -0.0971,-0.0971 0.0971,0.0971 0,0 z m 3.30015,-2.23245 -0.19413,0.0971 0.29119,0.0971 -0.0971,-0.19412 z m 0.38825,0 -0.19412,-0.19413 0.0971,0.29119 0.0971,-0.0971 z m -0.67944,-0.19413 -0.0971,-0.0971 0,0.19412 0.0971,-0.0971 z m 3.59134,-0.67944 0,-0.0971 -0.19413,0.38825 0.19413,-0.29119 z m -4.07665,0.38825 -0.19413,0 0.19413,0.0971 0,-0.0971 z m 2.03832,-1.16476 -0.29119,0 -0.0971,0.0971 0.38825,-0.0971 z m 0.77651,-0.48531 0,0 -0.0971,0 0.0971,0 z m -8.15331,0.38825 0,-0.19412 -0.0971,0.19412 0.0971,0 z m 0.87357,-0.29119 -0.29119,0 0.29119,0.58238 0,-0.58238 z m -2.32951,0.0971 0,-0.58238 -0.48532,0.0971 0.48532,0.48532 z m -1.35889,-0.97064 0.48532,0.48532 0,-0.19413 -0.48532,-0.29119 z m 14.26828,0.58238 -1.74713,0.77651 0.58237,0.0971 1.16476,-0.87357 z m -13.58883,-0.87356 -0.58238,0 0,0.19412 0.58238,-0.19412 z m 15.33597,-4.85316 0.0971,-0.48532 0.0971,-1.26182 -0.19412,1.74714 z m 0.0971,-5.43554 -0.38825,-0.97063 -0.19413,0.38826 0.58238,0.58237 z m -22.42158,2.42658 -0.19413,0.29119 0.48532,0.0971 -0.29119,-0.38825 z m -1.8442,-0.87357 -0.87357,0.29119 0.67945,0.0971 0.19412,-0.38826 z m -1.94126,0.19413 0,-0.29119 -0.0971,0.0971 0.0971,0.19413 z m -2.03833,-0.0971 -0.58238,0.38825 0.77651,0.38825 -0.19413,-0.7765 z m 2.71777,0.0971 -0.0971,-0.29119 -0.48532,-0.0971 0.58238,0.38825 z m -12.71527,-9.51219 -0.58238,0.29119 1.16476,0.38826 -0.58238,-0.67945 z m -2.32951,-3.10602 -0.77651,-1.16475 0.29119,0.87357 0.48532,0.29118 z m 3.00895,1.94127 -1.35888,-3.10602 -0.97063,-0.29119 2.32951,3.39721 z m -3.88252,-3.88253 -0.29119,-0.7765 -0.19413,-0.48532 0.48532,1.26182 z m -8.05624,-10.774 -1.74714,-1.26182 0.67945,0.67944 1.06769,0.58238 z m 43.6784,-6.50323 -7.0856,-11.8417 -0.38826,0 7.47386,11.8417 z m -49.01687,-18.92731 -0.29119,-0.0971 0.29119,0.19412 0,-0.0971 z m -0.58238,-0.67944 -0.0971,0.0971 0.0971,0.0971 0,-0.19412 z m -0.67944,-0.97063 0,-0.0971 -0.0971,0.0971 0.0971,0 z m 0.38825,-0.38826 0.29119,0.19413 0,-0.19413 -0.29119,0 z m 0.58238,-0.38825 -0.38825,0.0971 0.0971,0 0.29119,-0.0971 z m -0.67944,-0.0971 -0.29119,-0.29119 0.0971,0.0971 0.19413,0.19413 z m -0.67944,-1.0677 -0.19413,0 0.29119,0.0971 -0.0971,-0.0971 z m 0.67944,-1.16475 -0.38826,0 -0.0971,0.0971 0.48532,-0.0971 z m 0.38825,0.19412 -0.48532,-0.48531 0.19413,0.0971 0.29119,0.38825 z m -3.6884,-4.17371 -0.19413,-0.0971 0,0.0971 0.19413,0 z m -4.17371,0 -0.29119,-0.38825 0.0971,0.48531 0.19413,-0.0971 z m -35.33098,-3.20309 2.91189,-2.23245 -3.20308,2.13539 0.29119,0.0971 z m 5.82379,-4.65902 0.29119,-0.29119 -1.16476,0.48531 0.87357,-0.19412 z m -36.88399,-6.50323 -10.57988,3.39721 5.82379,-1.65008 4.75609,-1.74713 z m 26.30411,-16.50073 -2.81483,0.48531 -41.93127,6.79442 4.36784,9.9975 0.29119,0.0971 -1.06769,3.97959 3.10602,-1.35888 3.3972,-3.00896 5.82379,-0.19412 6.69736,-2.42658 4.56196,0.67944 -1.06769,1.65007 8.34743,2.81483 7.18267,3.49428 1.65007,3.88252 5.33847,-1.16476 12.61821,-10.28869 4.65903,0.19413 19.02437,14.36534 3.88252,-0.77651 4.07666,5.43554 0.7765,8.63862 -1.26182,5.43553 0.58238,2.71777 3.39721,6.79442 -1.55301,-5.33847 4.36784,-0.0971 0.38825,3.88253 -2.32951,6.01791 8.05624,11.0652 3.00895,0.0971 -2.52364,-3.39721 3.10602,0.38825 1.8442,-1.16475 -0.7765,6.21204 4.17371,3.30014 2.81483,7.57093 3.78546,2.32951 4.85316,1.26182 6.69735,8.54156 3.49428,1.84419 -4.65903,0.29119 2.13538,2.42658 7.66799,-2.52364 3.78546,-2.13539 3.49427,-12.22995 -1.74713,-19.02437 -0.38825,-1.94127 -9.31806,-15.53009 -7.95918,-11.25933 -4.4649,-9.22099 3.78546,3.20308 0.7765,-0.58238 1.65008,8.05624 4.27077,6.11498 -4.17371,-8.1533 0.19413,-3.88253 -12.52115,-15.23891 -3.00895,-4.75609 -3.97959,-8.05624 -2.71777,-6.79442 -2.13539,-2.42658 -0.48531,-3.10602 -0.0971,-0.0971 -6.69735,-0.38825 -2.62071,2.03832 -1.45594,7.47386 -1.35889,-3.49427 -45.81379,5.72672 -3.30014,-5.14434 0.0971,-0.0971 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="florida.php"><text class="florida" x="847" y="470">FL</text></a>
     
  <path inkscape:connector-curvature="0" class="GA" id="GA" data-name="Georgia" data-id="GA"
     d="m 845.85395,396.09691 -0.0971,-2.9119 -0.67944,2.52364 0.7765,0.38826 z m 1.0677,-4.46491 -0.38825,-2.23245 -0.29119,1.35889 0.67944,0.87356 z m -45.42554,-61.14976 -1.26182,0.29119 -3.6884,0.7765 -13.58884,2.81483 -1.26182,0.29119 -1.35888,0.19413 -7.57093,1.45595 -2.03832,0.38825 -8.25037,1.55301 -1.74713,0.19412 0.0971,0.19413 13.00646,39.60175 7.18267,12.81234 -1.74714,1.94126 -1.06769,7.57092 2.13539,3.88253 0.19412,7.0856 2.62071,4.95022 0,0.0971 -0.0971,0.0971 3.30014,5.14434 45.81379,-5.72672 1.35889,3.49427 1.45594,-7.47386 2.62071,-2.03832 6.69735,0.38825 0,0 -0.58237,-10.48282 1.26182,-2.23245 -0.67945,-4.17371 1.35889,-3.97959 2.03832,-2.23245 -1.45594,-1.35889 3.39721,-4.17371 -0.0971,0 -5.82378,-5.43554 -7.95918,-11.35638 -4.36784,-2.03833 -18.73318,-15.72422 -4.56197,-5.82379 -8.83274,-3.6884 -0.48532,-1.94126 2.71777,-5.33847 0,0 z"
     style="stroke-width:0.97063118000000004;"/>
    <a href="georgia.php"><text class="georgia" x="795" y="385">GA</text></a>
  <path inkscape:connector-curvature="0"
     id="MS"
     data-name="Mississippi"
     data-id="MS"
     d="m 716.76,442.78427 -0.48531,0.0971 0,0.0971 0.48531,-0.19412 z m 9.02687,-1.16476 -1.35888,0 1.26182,0.0971 0.0971,-0.0971 z m -11.25932,0.97063 -0.38825,0.38825 0.0971,0.0971 0.29119,-0.48532 z m 9.12394,-0.7765 -3.6884,0 3.49427,0.0971 0.19413,-0.0971 z m -40.47533,-92.50116 0,0.0971 -4.07665,6.79442 0.38826,5.2414 -5.5326,6.11498 1.45595,1.74714 -3.6884,15.5301 1.74713,3.30014 -0.97063,0.67944 0.0971,2.13539 0,0.67944 2.23246,5.24141 -0.19413,3.20309 3.59134,4.36784 -7.3768,12.6182 -1.16476,7.57092 -2.03832,3.00896 1.35888,3.49427 -1.26182,1.26182 33.48678,-3.68839 -1.16476,4.65903 4.27078,8.34742 2.23245,2.81483 0,-0.0971 3.59133,-4.07665 7.57093,-1.65007 6.98854,0.7765 1.06769,-1.35888 0,-0.0971 -4.95021,-29.89545 -0.19413,-21.8392 -0.58238,-39.79588 -1.35888,-0.87356 -0.38826,-0.77651 -0.19412,0 -4.85316,0.67944 -8.54155,1.16476 -19.41263,2.42658 -2.13539,0.19412 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="SC"
     data-name="South Carolina"
     data-id="SC"
     d="m 801.49611,330.48224 0,0 -2.71777,5.33847 0.48532,1.94126 8.83274,3.6884 4.56197,5.82379 18.73318,15.72422 4.36784,2.03833 7.95918,11.35638 5.82378,5.43554 0,0 0.97063,-4.4649 -1.55301,-4.27078 4.17372,3.10602 2.32951,-1.8442 -3.97959,-3.30015 4.85316,-0.29119 7.57092,-6.40616 -0.87356,-1.65008 4.65903,-3.59133 -0.48532,-1.74714 3.39721,-2.13539 0.19413,-4.95022 5.33847,-9.90043 3.59133,-4.56197 0.38826,-0.19413 -21.64508,-13.6859 -8.05624,1.55301 -10.96813,-0.38825 -5.43554,-2.81483 -32.22495,10.19163 -0.29119,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="IL" id="IL" data-name="Illinois" data-id="IL"
     d="m 661.43403,198.18521 -0.19413,0.48531 3.6884,2.32952 1.16476,2.32951 3.88252,3.6884 -0.0971,3.10602 -2.13539,6.11498 -4.85316,3.49427 -4.36784,0.87357 -0.87357,5.04728 1.45595,0.67944 -1.45595,9.90044 -3.59133,2.23245 0.67944,3.78546 -0.87357,0.38825 0,0 -0.7765,4.27078 3.10602,8.63862 11.06519,9.31806 0.97063,4.4649 2.13539,2.23245 6.98855,-0.38825 -1.26182,6.50323 -0.48532,6.98855 4.17372,3.3972 6.60029,2.9119 3.49427,2.71777 1.94126,5.53259 -1.06769,2.03833 6.89148,5.62966 0.29119,0.0971 -0.58238,-0.58238 1.94126,-4.56196 7.47386,2.03832 1.8442,-2.13539 -1.45594,-4.27077 6.11497,-3.59134 -1.65007,-2.32951 1.45595,-3.30015 0,-0.29119 -0.38826,-0.0971 0.0971,-8.63862 2.13539,-1.55301 3.68839,-8.63862 -0.7765,-3.78546 -2.42658,-4.56196 1.35888,-5.14435 -6.79441,-47.85212 -0.97064,-1.06769 -2.52364,-5.72673 -2.03832,-2.13539 -0.87357,-5.62966 0,-0.19412 -13.10352,1.8442 -7.86211,0.97063 -21.15976,2.42658 0,0 z"
     style="stroke-width:0.97063118000000004;"/>
     <text class="illinois" x="680" y="250">IL</text>
  <path inkscape:connector-curvature="0" class="IN" id="IN" data-name="Indiana" data-id="IN"
     d="m 750.34384,200.22353 -14.85065,2.62071 -3.39721,0.67944 -12.03583,1.94126 -2.52364,2.03833 -3.78546,1.74713 -1.45595,-0.0971 -1.74714,-0.87357 -0.58237,-0.58238 6.79441,47.85212 -1.35888,5.14435 2.42658,4.56196 0.7765,3.78546 -3.68839,8.63862 -2.13539,1.55301 -0.0971,8.63862 0.38826,0.0971 0.38825,-0.0971 1.45595,-2.71777 3.59133,0 4.36784,-1.45595 5.43554,2.03833 0.58237,-2.23245 3.10602,-2.32952 4.65903,0.67945 2.52365,-4.95022 6.89148,0.58237 -0.0971,-2.81483 6.11498,-8.05623 -0.97063,-3.6884 4.27078,-0.0971 5.2414,-4.17371 -1.26182,-4.75609 0.19413,-0.19413 -0.19413,-1.65007 -5.82378,-34.36035 -2.62071,-14.65653 -0.29119,-1.55301 -0.29119,-1.26182 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="indiana.php"><text class="indiana" x="725" y="245">IN</text></a>
  <path
     inkscape:connector-curvature="0"
     id="KY"
     data-name="Kentucky"
     data-id="KY"
     d="m 693.17367,317.18459 -0.29119,-0.7765 -0.58238,-0.19413 -0.38825,1.26182 0.0971,0.0971 1.06769,-0.0971 0.0971,-0.29119 z m 66.39117,-63.47928 -0.19413,0.19413 1.26182,4.75609 -5.2414,4.17371 -4.27078,0.0971 0.97063,3.6884 -6.11498,8.05623 0.0971,2.81483 -6.89148,-0.58237 -2.52365,4.95022 -4.65903,-0.67945 -3.10602,2.32952 -0.58237,2.23245 -5.43554,-2.03833 -4.36784,1.45595 -3.59133,0 -1.45595,2.71777 -0.38825,0.0971 0,0.29119 -1.45595,3.30015 1.65007,2.32951 -6.11497,3.59134 1.45594,4.27077 -1.8442,2.13539 -7.47386,-2.03832 -1.94126,4.56196 0.58238,0.58238 0.19413,0.38826 -0.87357,7.95917 -0.38826,0.19413 -2.52364,1.55301 -0.0971,0.29119 2.81483,-0.38826 19.60675,-2.6207 -0.97063,-3.88252 3.30015,-0.0971 39.50469,-5.24141 27.76005,-4.65903 0.38825,-0.29119 0.67944,-0.7765 7.27974,-3.88252 5.62966,-7.3768 0.7765,-2.52364 3.6884,-2.9119 4.65903,-5.92085 0.67944,-0.97063 -0.29119,-0.0971 -2.42657,0 -3.10602,-1.74714 -5.5326,-6.69735 -1.94126,-6.79442 0,-0.19413 -0.19413,-0.19412 -4.07665,-2.32952 -1.8442,-3.10602 -3.6884,3.59134 -2.32951,0.58238 -2.9119,-1.16476 -2.52364,1.94126 -5.24141,-2.32951 -1.35888,0.58237 -4.95022,-4.27077 -2.52364,-1.26182 -4.75609,0.58238 -0.77651,0.7765 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="NC"
     data-name="North Carolina"
     data-id="NC"
     d="m 890.2118,332.22937 -1.06769,1.0677 0.19412,0.19413 0.87357,-1.26183 z m 0.7765,-5.62966 -0.48531,0.77651 0.19413,0.7765 0.29118,-1.55301 z m 5.82379,-9.02687 -1.45594,0.97063 -0.77651,1.16476 2.23245,-2.13539 z m 12.52114,-6.11497 -0.58237,-0.38826 -1.26182,-0.0971 1.84419,0.48532 z m -2.6207,-0.58238 -0.87357,0 -1.45594,0.7765 2.32951,-0.7765 z m 3.00896,1.06769 2.81483,-6.98854 -1.94126,2.91189 -0.87357,4.07665 z m 4.17371,-9.22099 1.26182,-1.8442 -0.67944,0 -0.58238,1.8442 z m 8.1533,-7.57093 -2.13539,-10.774 1.8442,5.62966 0.29119,5.14434 z m -11.8417,-24.55697 -0.19412,0.0971 -0.29119,0.0971 0,0 0.0971,0 5.33847,9.02687 4.17372,4.17371 -9.12394,-13.39471 0,0 z m -1.74713,0.58238 -0.77651,0.19413 0,0 0.19413,0.0971 1.65007,0 -0.19413,-0.58238 0,0 -0.29118,0.0971 -0.29119,0 0,0 0,0.19412 -0.19413,0.0971 -0.0971,-0.0971 0,0 z m -89.78339,22.13039 -0.48532,1.45595 0.0971,4.17371 -1.0677,-0.0971 -2.52364,5.14435 -2.81483,0.29119 -5.24141,5.14434 -2.32951,-0.87357 -3.00896,4.46491 -7.95917,7.18267 -3.88253,0.97063 -4.07665,3.78546 -0.19413,2.52364 -3.59133,1.94126 0.0971,4.27078 0,0.97063 1.26182,-0.29119 13.58884,-2.81483 3.6884,-0.7765 1.26182,-0.29119 0.29119,0 32.22495,-10.19163 5.43554,2.81483 10.96813,0.38825 8.05624,-1.55301 21.64508,13.6859 0.38825,-0.29119 9.9975,-4.07665 0.0971,-5.33847 3.59134,-6.50323 3.88252,-3.6884 8.05624,-5.33847 1.0677,-1.94126 2.13538,0.97063 0.97064,-6.40616 -1.16476,2.23245 -4.07665,1.35888 -3.88253,0.0971 4.7561,-3.49427 -1.45595,-1.55301 1.65007,-3.49427 -9.12393,-1.45595 -0.38825,-0.48531 7.76505,-1.45595 2.52364,1.26182 3.20308,-0.29119 2.6207,-1.94126 1.94127,-3.78546 1.74713,-0.48532 -0.29119,-5.33847 -2.23245,-2.13539 -2.23245,2.03833 0.48531,5.14434 -1.65007,-6.3091 -1.26182,-0.29119 -9.60925,3.97959 4.27078,-4.17372 0.19413,-1.65007 4.4649,-1.06769 1.26182,-3.30015 3.00896,1.74714 -3.20309,-4.7561 -2.23245,-1.94126 0,0 -38.82525,11.0652 -24.75109,6.3091 -25.04229,4.65903 -0.0971,-0.19413 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="OH" id="OH" data-name="Ohio" data-id="OH"
     d="m 818.19096,206.6297 -2.42657,-10.48282 -0.48532,-2.13539 -2.71777,-11.93876 -3.49427,2.23245 -7.47386,5.72672 -4.85315,5.92085 -3.78547,0.58238 -6.98854,3.97959 -3.88253,-2.32951 -11.74463,-1.35889 0,0 -6.21204,1.55301 -6.11498,1.45595 -6.40617,1.35888 -0.97063,0.29119 0.29119,1.55301 2.62071,14.65653 5.82378,34.36035 0.19413,1.65007 0.77651,-0.7765 4.75609,-0.58238 2.52364,1.26182 4.95022,4.27077 1.35888,-0.58237 5.24141,2.32951 2.52364,-1.94126 2.9119,1.16476 2.32951,-0.58238 3.6884,-3.59134 1.8442,3.10602 4.07665,2.32952 0.19413,0.19412 0,0 4.17371,-2.03832 1.45595,-3.20309 -1.16476,-3.30014 3.30014,-5.04728 2.42658,-0.38826 -0.29119,-4.27077 3.97959,-5.43554 0.67944,0.77651 3.59134,-2.71777 3.10602,-4.65903 0.48531,-21.25682 0.19413,-0.0971 -0.48532,-2.03832 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="ohio.php"><text class="ohio" x="772" y="231">OH</text></a>
  <path inkscape:connector-curvature="0" class="TN" id="TN" data-name="Tennessee" data-id="TN"
     d="m 786.2572,300.48973 -27.76005,4.65903 -39.50469,5.24141 -3.30015,0.0971 0.97063,3.88252 -19.60675,2.6207 -2.81483,0.38826 0,0.0971 -0.7765,0.97063 -0.38826,-0.0971 0,-0.77651 0,-0.0971 -1.06769,0.0971 0.0971,0.0971 0.58238,2.71776 -1.94126,2.42658 -0.19413,4.46491 0,0.7765 0,0.0971 -2.91189,5.62966 0.58238,3.97959 -2.71777,4.27078 0.97063,3.88252 -3.49427,3.20309 0.19412,0.19412 2.13539,-0.19412 19.41263,-2.42658 8.54155,-1.16476 4.85316,-0.67944 0.19412,0 -0.0971,-0.19413 16.30661,-2.23245 7.76504,-0.97063 15.5301,-2.52364 2.9119,-0.48532 1.74713,-0.19412 8.25037,-1.55301 2.03832,-0.38825 7.57093,-1.45595 1.35888,-0.19413 0,-0.97063 -0.0971,-4.27078 3.59133,-1.94126 0.19413,-2.52364 4.07665,-3.78546 3.88253,-0.97063 7.95917,-7.18267 3.00896,-4.46491 2.32951,0.87357 5.24141,-5.14434 2.81483,-0.29119 2.52364,-5.14435 1.0677,0.0971 -0.0971,-4.17371 0.48532,-1.45595 -1.55301,0.29119 -5.5326,1.55301 -6.60029,1.35889 -16.59779,3.39721 -1.74714,0.29118 -0.38825,0.29119 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="tennessee.php"><text class="tennessee" x="730" y="331">TN</text></a>
  <path
     inkscape:connector-curvature="0"
     id="VA"
     data-name="Virginia"
     data-id="VA"
     d="m 908.75086,270.98255 0.29119,0 0.29118,-0.0971 0,0 -0.19412,-0.48531 -0.38825,0.58238 0,0 z m -3.30015,-10.87107 0,0.48531 0.48532,-0.29119 -0.48532,-0.19412 z m 1.74714,-3.39721 -0.0971,-0.77651 0,0 0.0971,0.77651 z m -0.58238,1.16475 -0.19413,1.26183 -0.29119,0.48531 0.48532,-1.74714 z m 0.87357,-2.52364 0.0971,-0.58238 -0.19413,0.58238 0.0971,0 z m 0.58237,-2.6207 0.29119,-0.67944 -0.48531,1.74713 0.19412,-1.06769 z m 0.0971,-1.45595 0.38825,-2.13539 -0.48532,0.48532 0.0971,1.65007 z m 1.74713,-9.60925 0.19413,-0.87356 -0.0971,0.19412 -0.0971,0.67944 z m -0.38825,-2.23245 -1.26182,0.48532 -1.94126,0.87357 -0.67944,0.87356 0.29119,0.0971 -2.32952,14.4624 0.87357,2.32952 1.35888,-6.01792 2.52364,-7.86211 1.16476,-5.14435 0,-0.0971 z m 1.94126,-0.7765 -0.29119,0.0971 -0.0971,0.38825 -0.48531,3.00896 0.38825,-1.0677 0.48531,-2.42657 z m -101.43096,37.17517 -0.67944,0.97063 -4.65903,5.92085 -3.6884,2.9119 -0.7765,2.52364 -5.62966,7.3768 -7.27974,3.88252 -0.67944,0.7765 1.74714,-0.29118 16.59779,-3.39721 6.60029,-1.35889 5.5326,-1.55301 1.55301,-0.29119 0.0971,0.19413 25.04229,-4.65903 24.75109,-6.3091 38.82525,-11.0652 0,0 -0.29119,-0.48531 -0.0971,-0.29119 0.67944,0.67944 0,0 0,0 0.77651,-0.19413 -0.0971,-0.0971 -0.67944,-3.30015 0.48532,0.0971 1.55301,2.91189 0,0 0,0 0.29119,-0.0971 0.19412,-0.0971 -0.38825,-0.7765 -3.97959,-6.11498 -4.95022,0.87357 -2.23245,1.8442 -2.13539,-1.94126 -7.27973,-2.42658 -5.04728,-0.19413 9.80337,-0.87357 5.43554,3.6884 1.55301,-2.42658 -4.36784,-5.53259 3.10602,0.19412 -1.65008,-4.4649 -3.88252,0.19413 -9.221,-7.47386 -1.16476,0 13.00646,6.40616 -0.87357,-4.4649 0.87357,-1.45595 -6.60029,-2.52364 -5.72672,-0.38825 -2.81483,-2.52364 -2.32952,1.45594 -0.87357,-6.69735 0.97063,0.19412 -0.19412,-5.43553 -0.19413,-0.19413 -0.19413,0.0971 -0.19412,-0.0971 -0.48532,-0.38825 -0.29119,-0.29119 -3.10602,-1.35888 -3.20308,-2.32952 -4.4649,-1.16475 -0.29119,-0.0971 0,0.0971 -0.58238,4.07665 -9.02687,-3.88253 0.19413,5.62966 -4.95022,9.41513 -3.00896,3.30014 -1.94126,5.72673 -5.92085,-2.03833 -2.9119,13.20058 -2.32951,4.46491 -0.38825,5.82379 -1.74714,2.81483 -6.50323,1.94126 -5.33847,4.17371 -2.52364,0.38825 -2.42658,2.13539 -6.11498,-2.23245 -1.06769,-3.00896 -0.19413,-0.0971 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="WI" id="WI" data-name="Wisconsin" data-id="WI"
     d="m 705.79187,134.80299 -2.42658,3.00896 -1.45594,4.36784 0.67944,2.42657 3.20308,-9.80337 z m -55.71423,-22.80983 1.45595,-2.03833 -1.0677,0.97063 -0.38825,1.0677 z m 2.23245,-3.20309 -0.48531,-0.58238 -1.0677,0.67945 1.55301,-0.0971 z m -21.15976,5.43554 -2.23245,2.52364 1.0677,11.64757 -6.21204,5.62966 -1.16476,5.43554 3.39721,3.10602 -0.97063,13.39471 3.59133,2.71777 2.32952,0.19412 7.37679,4.46491 4.65903,4.85315 5.92085,3.00896 1.35889,7.47386 0,0.48531 0,0 2.81483,3.39721 -0.77651,2.62071 0.97063,5.72672 2.9119,3.97959 5.33847,2.81483 -0.0971,0.48532 0,0 21.15976,-2.42658 7.86211,-0.97063 13.10352,-1.8442 -0.38825,-1.45595 0,-4.56197 -2.62071,-4.85315 -0.67944,-6.11498 1.26182,-6.79442 -0.67944,-5.24141 2.32952,-6.50322 -0.87357,-1.0677 0.19412,-6.01791 1.26182,-4.56197 -1.45594,-1.55301 -2.81483,0.97063 -1.55301,4.07665 -3.6884,2.13539 1.16476,-5.14434 3.30014,-4.36784 0.19413,-1.94127 0.0971,-0.0971 -4.65903,-4.65903 0,-6.60029 -5.24141,-4.27078 -7.18267,-0.48531 -7.3768,-1.94127 -15.91835,-4.85315 -3.10602,-1.74714 -0.29119,0.29119 -4.95022,-0.67944 -1.65007,0.97063 0.67944,-7.08561 -7.95917,4.07665 -9.70631,1.55301 -0.0971,-0.19412 z m 19.02437,-5.14435 -0.19412,-0.67944 -0.67944,0.29119 0.87356,0.38825 z m -3.49427,-0.67944 0.29119,-0.58238 -0.19413,-0.19413 -0.0971,0.77651 z m 7.08561,-1.65007 -0.29119,-1.35889 -0.29119,1.65008 0.58238,-0.29119 z"
     style="stroke-width:0.97063118000000004;"/>
     <text class="wisconsin" x="658" y="165">WI</text>
  <path inkscape:connector-curvature="0" class="WV" id="WV" data-name="West Virginia" data-id="WV"
     d="m 836.73002,223.71281 -13.78296,3.39721 -4.27078,-18.442 0,0 -0.19413,0.0971 -0.48531,21.25682 -3.10602,4.65903 -3.59134,2.71777 -0.67944,-0.77651 -3.97959,5.43554 0.29119,4.27077 -2.42658,0.38826 -3.30014,5.04728 1.16476,3.30014 -1.45595,3.20309 -4.17371,2.03832 0,0 0,0.19413 1.94126,6.79442 5.5326,6.69735 3.10602,1.74714 2.42657,0 0.29119,0.0971 0.19413,0.0971 1.06769,3.00896 6.11498,2.23245 2.42658,-2.13539 2.52364,-0.38825 5.33847,-4.17371 6.50323,-1.94126 1.74714,-2.81483 0.38825,-5.82379 2.32951,-4.46491 2.9119,-13.20058 5.92085,2.03833 1.94126,-5.72673 3.00896,-3.30014 4.95022,-9.41513 -0.19413,-5.62966 9.02687,3.88253 0.58238,-4.07665 0,-0.0971 0,0 -2.81483,-4.85315 -5.82379,-0.67945 -3.39721,2.62071 0,1.94126 -2.91189,0.67944 -4.27078,3.00896 -2.23245,0.48532 -4.46491,6.3091 -2.23245,-10.19163 -1.94126,0.48532 z"
     style="stroke-width:0.97063118000000004;"/>
    <a href="west-virginia.php"><text class="west-virginia" x="810" y="260">WV</text></a>
  <path
     inkscape:connector-curvature="0"
     id="DE"
     data-name="Delaware"
     data-id="DE"
     d="m 893.80314,207.69739 0.38825,1.45595 8.05624,23.00396 9.22099,-2.71777 -0.0971,-0.19413 0.19413,0 0.29119,0.0971 0,0 0.19412,-0.0971 -0.19412,-0.38825 -2.32952,-6.21204 -11.35638,-10.774 0.48531,-7.47386 0,0 -2.32951,0 -1.74714,1.35888 -0.7765,1.94126 0,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="DC" id="DC" data-name="District of Columbia" data-id="DC"
     d="m 878.17597,229.14834 0.48532,0.38825 0.19412,0.0971 0.19413,-0.0971 0.19413,0.0971 0.67944,0.38825 0.19413,0.29119 0,0.67944 0.19412,0.38825 1.26182,-2.32951 -1.35888,-0.77651 -1.65007,0.0971 -0.38826,0.7765 z"
     style="stroke-width:0.97063118000000004;"/>
     <text class="washington-dc" x="870" y="260">DC</text>
  <path
     inkscape:connector-curvature="0"
     id="MD"
     data-name="Maryland"
     data-id="MD"
     d="m 911.56569,238.27227 0.67944,-5.2414 -0.58238,3.88252 -0.38825,1.65007 -0.0971,0.19413 0.29119,-0.0971 0.0971,-0.38826 z m 0.48531,-9.02687 -0.19412,0.0971 0.19412,0.58238 0,1.16475 0,-1.8442 0,0 z m -73.37972,-6.01791 2.23245,10.19163 4.46491,-6.3091 2.23245,-0.48532 4.27078,-3.00896 2.91189,-0.67944 0,-1.94126 3.39721,-2.62071 5.82379,0.67945 2.81483,4.85315 0,0 0.29119,0.0971 4.4649,1.16475 3.20308,2.32952 3.10602,1.35888 0.29119,0.29119 0.38826,-0.7765 1.65007,-0.0971 1.35888,0.77651 -1.26182,2.32951 0,0.0971 -1.8442,5.62966 6.01792,3.88252 6.01791,0.29119 3.97959,1.8442 -1.65008,-4.65903 -5.14434,-1.74714 -1.26182,-3.97958 3.20308,4.27077 2.62071,0.38826 -2.32952,-2.32952 -1.8442,-6.89148 0.48532,-3.97959 -2.03833,-4.36784 2.13539,-1.74713 1.55301,-5.62967 -0.58238,8.34743 1.65007,2.81483 1.55301,-3.30014 0.87357,5.43553 -1.65007,3.97959 4.75609,1.74714 -4.07665,1.35888 2.13539,3.97959 3.49427,1.16475 1.94126,-3.3972 -0.19412,4.75609 3.30014,-0.0971 2.13539,2.42657 0.0971,0 0.67944,-0.87356 1.94126,-0.87357 1.26182,-0.48532 -0.0971,-0.19412 2.52364,-7.47386 0,-0.29119 -0.48532,-1.94127 0,-0.0971 -9.22099,2.71777 -8.05624,-23.00396 -0.38825,-1.45595 -1.65008,0.48532 -6.89148,2.13539 -37.95168,10.57988 -6.89148,1.8442 -1.74714,0.48531 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="NJ"
     data-name="New Jersey"
     data-id="NJ"
     d="m 916.80709,207.30914 -0.48531,-1.16476 0,1.16476 0.48531,0 z m 0.97064,-3.59134 0.29119,-2.91189 -0.58238,2.52364 0.29119,0.38825 z m -3.97959,-29.79837 -10.19163,-2.52365 -1.74714,-0.48531 -1.65007,-0.38825 0,0 -4.07665,9.02687 1.74714,2.13539 -0.0971,6.50322 1.8442,0.29119 3.78546,9.90044 -0.19412,0.29119 -4.75609,6.98855 0.48531,5.33847 11.45345,3.88252 0.0971,4.46491 2.62071,-3.6884 0.38825,-5.33847 2.71777,-1.8442 -1.0677,-3.97959 2.03833,-4.75609 0,-10.38576 -0.67944,-3.39721 -4.56197,0.0971 1.16476,-4.65903 0.67944,-7.47386 0,0 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="NY"
     data-name="New York"
     data-id="NY"
     d="m 913.50695,181.78154 -1.45595,2.03832 -0.38825,0.58238 1.8442,-2.6207 z m 13.39471,-4.75609 4.85316,-4.27078 0,-0.19413 -4.85316,4.46491 z m -12.71527,3.00895 0,-3.30014 -0.29119,1.74713 0.29119,1.55301 z m 22.51864,-15.5301 -1.16475,-0.29119 -0.19413,0.87357 1.35888,-0.58238 z m 2.62071,-1.74713 -0.0971,0.97063 0.19412,-0.58238 -0.0971,-0.38825 z m -2.71777,0.0971 -6.50323,6.01791 -9.9975,4.27078 -2.6207,2.23245 -0.19413,2.13539 -2.71777,2.23245 0.38826,2.9119 4.17371,-1.65008 6.11498,-4.95022 6.79441,-3.59133 10.2887,-9.70631 -7.27974,5.53259 -2.32951,0.97064 3.88252,-6.40617 z m 3.00896,-4.07665 0.38825,-0.58238 -1.16476,1.35888 0.77651,-0.7765 z m -109.09895,-3.59134 -1.55301,-0.19412 1.16476,1.55301 0.38825,-1.35889 z m 32.22496,-29.70131 0.19412,-1.0677 -0.7765,0.97064 0.58238,0.0971 z m 0.48531,-6.98855 -0.38825,0.19413 -0.48532,1.06769 0.87357,-1.26182 z m -41.0577,55.13186 0.67944,2.91189 5.14435,1.26182 29.50719,-8.05624 29.70131,-8.92981 5.43554,4.17372 1.06769,2.42658 6.3091,2.71776 0.19413,0.38826 1.65007,0.38825 1.74714,0.48531 10.19163,2.52365 -0.19413,-0.48532 0.87357,3.97959 1.94126,-0.48532 1.0677,-4.36784 0,-0.0971 -1.74714,-1.65007 2.52364,-3.10602 -1.16476,-1.45595 -3.68839,-14.26828 -0.19413,-0.97063 -0.48532,-0.29119 -0.29119,-4.27078 -0.29119,-4.65903 -0.29118,-5.04728 0,-0.29119 -0.19413,0.0971 -4.85316,-15.91835 -5.14434,-8.05624 -1.45595,-9.60924 -4.36784,-10.191633 -0.58238,0.29119 -20.28619,6.794418 -4.07665,4.367845 -4.56197,8.73568 0.19413,1.94126 -6.01791,9.12393 3.68839,1.26182 1.0677,6.89148 -4.27078,5.62967 -12.81233,7.76504 -2.42658,-0.97063 -9.51218,1.35889 -8.83275,5.33847 0.48532,2.81483 3.10602,2.71777 -1.74714,8.54155 -6.98854,8.1533 -0.0971,0.0971 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="PA"
     data-name="Pennsylvania"
     data-id="PA"
     d="m 900.01517,170.13396 -6.3091,-2.71776 -1.06769,-2.42658 -5.43554,-4.17372 -29.70131,8.92981 -29.50719,8.05624 -5.14435,-1.26182 -0.67944,-2.91189 -1.65007,1.26182 -2.6207,1.8442 -4.7561,4.85315 -0.58238,0.48532 2.71777,11.93876 0.48532,2.13539 2.42657,10.48282 0.48532,2.03832 0,0 4.27078,18.442 13.78296,-3.39721 1.94126,-0.48532 1.74714,-0.48531 6.89148,-1.8442 37.95168,-10.57988 6.89148,-2.13539 1.65008,-0.48532 0,0 0.7765,-1.94126 1.74714,-1.35888 2.32951,0 0.29119,-0.87357 3.78546,-4.27078 0.38825,-0.67944 0.29119,-0.19413 -3.78546,-9.90044 -1.8442,-0.29119 0.0971,-6.50322 -1.74714,-2.13539 4.07665,-9.02687 0,0 -0.19413,-0.38826 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path
     inkscape:connector-curvature="0"
     id="ME"
     data-name="Maine"
     data-id="ME"
     d="m 946.7996,118.39932 -0.0971,0 0.19412,0.0971 -0.0971,-0.0971 z m 7.18267,-20.674443 -0.77651,-1.164758 0,0.582379 0.77651,0.582379 z m -1.35888,-1.067695 0,-0.970631 -0.0971,-0.582379 0.0971,1.55301 z m 3.49427,-4.076651 -0.19413,-0.09706 0.0971,0.291189 0.0971,-0.194126 z m 9.70631,-4.853156 -0.19413,-1.455947 -0.38825,0.679442 0.58238,0.776505 z m -2.42658,0.582379 0.0971,-1.067694 -1.16476,0.194126 1.06769,0.873568 z m 3.59134,-3.203083 -0.38825,0 0,0.194126 0.38825,-0.194126 z m -4.85316,1.455947 -0.87357,-0.194126 -0.0971,0.873568 0.97063,-0.679442 z m 4.95022,-3.008957 0.87357,0.679442 -0.29119,-0.776505 -0.58238,0.09706 z m -2.6207,0.09706 -0.87357,1.650073 1.16476,-0.582379 -0.29119,-1.067694 z m -4.17372,0.09706 -0.38825,0.582379 0.29119,0.873568 0.0971,-1.455947 z m 5.72673,-3.203083 -0.0971,-0.776505 -0.29119,0.485316 0.38826,0.291189 z m -0.48532,0.388253 -0.87357,-0.776505 0,0.679442 0.87357,0.09706 z m -5.43553,2.232452 -0.19413,-1.067695 -0.38825,0.873568 0.58238,0.194127 z m 9.22099,-3.39721 -1.45594,2.135389 -0.0971,-1.55301 1.55301,-0.582379 z m 7.08561,-6.503229 -0.67944,-0.970631 -0.38825,0.194126 1.06769,0.776505 z m 2.6207,-4.36784 -0.58237,-0.291189 -0.0971,0.291189 0.67944,0 z m 1.26183,-7.570923 -0.87357,0 0.97063,0.291189 -0.0971,-0.291189 z m 1.45594,0.970631 -0.29119,-1.747136 -0.7765,-0.09706 1.06769,1.8442 z m -1.55301,-1.55301 -0.19412,-1.844199 -0.67945,1.26182 0.87357,0.582379 z m -56.29661,15.23891 14.07415,33.001458 0.19413,0.67944 6.11498,7.47386 0,-0.0971 0.97063,-0.29119 0.19413,-5.5326 1.55301,-1.94126 0.97063,-5.14435 -0.87357,-0.87357 1.65007,-5.047274 5.62966,-2.620704 3.6884,-4.464904 1.35888,-7.765049 5.92085,-0.388253 -0.7765,-3.979588 7.3768,-2.81483 0.48531,-4.36784 1.74714,0.388252 4.85315,-3.979588 2.13539,-5.144345 -4.95022,-4.950219 -5.2414,-1.067695 -1.94127,-3.979588 0,-2.329515 -3.20308,0.970632 -3.59134,-1.261821 0,-3.979588 -9.70631,-20.965634 -7.0856,-3.688398 -7.86212,6.600292 -2.13539,-0.388253 -1.8442,-3.397209 -2.52364,0.970631 -3.59133,17.859614 1.26182,5.823788 1.06769,11.8417 -2.81483,9.123934 1.94126,1.455946 -2.32951,4.464904 -2.52364,-0.388253 -0.19413,0.194127 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
  <path inkscape:connector-curvature="0" class="MI" id="MI" data-name="Michigan" data-id="MI"
     d="m 719.96309,138.2002 -0.48532,-0.77651 -0.0971,0.97063 0.58238,-0.19412 z m 1.55301,-1.74714 -1.16476,-1.55301 -0.19413,0.67944 1.35889,0.87357 z m 0.97063,-6.98854 -0.97063,-0.87357 0,0.19412 0.97063,0.67945 z m -2.42658,76.00042 12.03583,-1.94126 3.39721,-0.67944 14.85065,-2.62071 0.29119,1.26182 0.97063,-0.29119 6.40617,-1.35888 6.11498,-1.45595 6.21204,-1.55301 -0.0971,-0.29119 3.20309,-6.3091 -0.29119,-5.24141 3.59133,-9.02687 2.81483,1.65007 1.0677,-2.03832 -0.29119,-7.76505 -2.62071,-4.85316 -3.88252,-10.28869 -3.39721,-3.78546 -1.74714,-0.48531 -6.3091,4.36784 0.67944,0.87356 -3.30014,6.21204 -3.20309,-0.58238 -0.97063,-6.50322 1.35889,-0.48532 2.81483,-6.50323 0.29119,-11.45345 -4.36784,-9.70631 -9.70632,-1.65007 -0.97063,-1.45595 -9.02687,-2.6207 -4.07665,5.04728 0.38825,4.36784 -3.10602,3.88252 0.67945,6.01792 -3.00896,2.13539 0,-7.57093 -2.71777,5.72673 -3.20308,5.04728 -2.13539,1.65007 1.06769,5.33847 -1.35888,5.5326 0.77651,6.89148 -0.97064,3.39721 6.98855,13.39471 0.87357,5.14435 -0.87357,9.51218 -4.65903,10.67695 -0.58238,0.38825 z m 20.77151,-87.45387 -2.52364,0.19412 1.55301,1.16476 0.97063,-1.35888 z m -14.7536,2.52364 -0.7765,0 0.87357,0.38825 -0.0971,-0.38825 z m 16.98605,-12.32702 -0.97063,-1.55301 -0.38825,0.0971 1.35888,1.45594 z m -87.93919,7.08561 3.10602,1.74714 15.91835,4.85315 7.3768,1.94127 7.18267,0.48531 5.24141,4.27078 0,6.60029 4.65903,4.65903 0,-0.0971 3.78546,-10.96814 4.56197,-3.20308 3.49427,-3.88252 0.58238,3.49427 3.59134,-5.5326 8.63861,-3.30014 0.67945,-1.35889 8.73568,1.0677 3.39721,1.74713 1.65007,-4.27077 1.55301,0.97063 6.79442,-1.0677 -1.65008,-2.71777 -3.00895,-1.74713 0.58238,-6.3091 -5.92085,3.30014 -5.43554,-0.67944 -1.74714,-4.17371 0.58238,-1.358888 -7.37679,3.494268 -4.7561,0.29119 -8.54155,5.24141 -0.97063,1.94126 -5.24141,-1.26182 -3.30015,1.45595 -6.60029,-5.72672 -14.65653,-4.46491 -0.29119,-1.747133 -9.41512,9.026873 -5.33847,1.35888 -7.57093,5.72673 -0.29119,0.19412 z m 34.36035,-22.033327 -11.35639,5.629661 3.78546,3.688396 1.45595,-3.688396 3.88253,-4.756093 2.23245,-0.873568 z M 676.77,79.962326 l -7.76505,5.338471 -0.38825,2.620704 6.11497,-4.464903 2.03833,-3.494272 z"
     style="stroke-width:0.97063118000000004;"/>
     <a href="michigan.php"><text class="michigan" x="735" y="175">MI</text></a>
  <path
     inkscape:connector-curvature="0"
     id="AK"
     data-name="Alaska"
     data-id="AK"
     d="m 101.28276,542.95341 -0.48532,0.19412 0.38826,0.0971 0.0971,-0.29119 z m 3.59134,0.58238 0,0 0,0.0971 0,-0.0971 z m -1.74714,-1.65008 0,0.29119 0.19413,-0.0971 -0.19413,-0.19413 z m -0.87357,-0.48531 0,-0.0971 0,0 0,0.0971 z m 1.8442,0.97063 0,-0.19413 -0.0971,0.0971 0.0971,0.0971 z m -0.19413,-0.19413 0,-0.0971 -0.19412,0 0.19412,0.0971 z m -75.709229,-63.77047 -0.09706,0.67945 0.194126,1.94126 -0.09706,-2.62071 z m -0.485315,-2.6207 0.09706,0.87357 0.09706,-0.29119 -0.194126,-0.58238 z m 76.194544,65.22642 0.0971,-0.58238 -0.38825,0.19412 0.29118,0.38826 z m 11.0652,4.75609 -0.0971,-0.0971 0.19412,0.38825 -0.0971,-0.29119 z m -7.18267,-3.39721 -1.06769,-0.97063 0,2.32951 1.06769,-1.35888 z m 2.42658,2.13539 -0.0971,-0.67944 -1.65007,-0.0971 1.74714,0.77651 z m 5.82378,1.35888 -0.0971,0.19413 0.19413,0 -0.0971,-0.19413 z m 0.38826,0.0971 -0.19413,0 0.38825,0.0971 -0.19412,-0.0971 z m 1.16475,0.38826 -0.0971,0 -0.0971,0 0.19412,0 z m -85.70673,-65.8088 0.388252,0.0971 0.29119,-0.0971 -0.679442,0 z m 83.57135,64.44991 -0.77651,-0.0971 0.29119,0.29119 0.48532,-0.19413 z m -88.812759,-72.02083 -1.358883,-0.58238 -0.09706,0.29119 1.455947,0.29119 z m 91.239329,72.21496 -0.19412,-0.0971 0,0.0971 0.19412,0 z m 5.92085,1.16476 -3.78546,0.29119 -0.87357,0.38825 4.65903,-0.67944 z m -104.05166,-88.61863 -1.067695,0 0.194127,0.29119 0.873568,-0.29119 z m 115.7963,93.08353 0,-0.38825 -0.19412,0 0.19412,0.38825 z m 5.04728,0.0971 0.19413,-0.19412 -0.19413,-0.19413 0,0.38825 z m 3.78547,1.0677 0.19412,-0.0971 -0.0971,0 -0.0971,0.0971 z m -3.10602,-1.74714 -0.0971,-0.38825 -0.19412,0 0.29119,0.38825 z m 6.50322,1.45595 -0.0971,0.0971 0.0971,0 0,-0.0971 z m -127.443872,-98.90732 -1.455946,0.19413 1.844199,1.65007 -0.388253,-1.8442 z m 122.299532,97.45137 0.19413,-0.58238 -0.0971,0 -0.0971,0.58238 z m 16.40367,-1.45594 0.0971,-0.19413 -0.19413,-0.0971 0.0971,0.29119 z m -2.42658,-0.87357 -3.39721,3.00895 2.42658,-0.19412 2.81483,-2.23245 -1.8442,-0.58238 z m 6.11498,1.06769 -0.67945,-0.19412 0.48532,0.38825 0.19413,-0.19413 z m 1.35888,0.0971 -1.0677,-0.29118 -0.19412,0.0971 1.26182,0.19412 z m -3.6884,-1.35888 -1.06769,0 1.8442,0.48532 -0.77651,-0.48532 z m 4.4649,0.97063 -0.0971,-0.19412 -0.38825,0.0971 0.48531,0.0971 z m -2.91189,-1.16476 -0.38825,-0.19412 0,1.06769 0.38825,-0.87357 z m 12.42408,2.42658 -0.0971,-0.0971 -0.19413,0 0.29119,0.0971 z m 0.19413,-0.0971 0,-0.0971 -0.19413,-0.0971 0.19413,0.19413 z m -1.65008,-0.58238 0.19413,0.38825 0,-0.0971 -0.19413,-0.29119 z m 0.87357,0 -0.87357,-0.29119 1.0677,0.77651 -0.19413,-0.48532 z m 1.26182,-0.97063 0,0 0,0.0971 0,-0.0971 z m 11.55051,1.45595 -0.19412,-0.38826 -0.0971,0 0.29119,0.38826 z m 104.43992,-6.50323 -0.19413,-0.19413 0.0971,0.19413 0.0971,0 z m -117.6405,3.00895 0,-0.0971 -0.0971,0.0971 0.0971,0 z m 120.45533,-4.75609 0.29119,0.38825 0.19413,0 -0.48532,-0.38825 z m -106.08999,7.27974 -0.0971,0.0971 0,0.29119 0.0971,-0.38825 z m -12.03583,-1.74714 0.19413,-0.77651 -0.0971,0 -0.0971,0.77651 z m 123.75548,-7.76505 -0.87357,0.48532 0.77651,0.38825 0.0971,-0.87357 z m -122.00834,7.27973 -0.0971,-0.19412 0.0971,0.19412 0,0 z m -7.27973,-2.13539 -2.42658,0.48532 -2.13539,2.81483 4.56197,-3.30015 z m 17.37429,3.6884 -0.58237,0.48532 0.58237,-0.0971 0,-0.38826 z m 111.91378,-9.31806 -0.19412,-0.38825 -0.0971,0.19413 0.29119,0.19412 z m -121.23184,6.79442 -0.67944,-0.0971 0.67944,0.67944 0,-0.58238 z m 114.82568,-5.5326 -0.19413,0.19413 0.19413,0.67944 0,-0.87357 z m -113.27267,5.43554 -0.29118,0.0971 0.38825,0.29119 -0.0971,-0.38825 z m 7.18268,2.03832 -0.29119,0 -0.19413,-0.19412 0.48532,0.19412 z m -7.95918,-2.03832 -0.48532,-0.29119 0.19413,0.29119 0.29119,0 z m 6.50323,1.06769 -0.87357,0.29119 -0.58238,1.55301 1.45595,-1.8442 z m 105.41055,-6.79441 0,0.67944 0.38825,-0.48532 -0.38825,-0.19412 z m -116.864,3.68839 0.77651,-0.19412 -0.0971,0 -0.67944,0.19412 z m -0.97063,-0.58238 -0.19413,-0.19412 0,0.0971 0.19413,0.0971 z m 117.83463,-3.78546 -0.19413,-0.0971 -0.0971,0.29119 0.29119,-0.19413 z m -106.47825,5.82379 -0.19412,-0.0971 -0.19413,0.29119 0.38825,-0.19413 z m 105.50762,-5.62966 0.0971,-0.48532 -0.19413,-0.0971 0.0971,0.58238 z m -0.77651,-0.48532 -0.29119,0.38826 0.48532,0.0971 -0.19413,-0.48532 z m -100.65445,4.7561 -0.19413,-0.19413 -0.0971,0 0.29119,0.19413 z m 100.36326,-6.50323 0.77651,0.29119 0.29119,-0.38826 -1.0677,0.0971 z m 1.16476,-0.67944 -0.29119,0.19412 0.48532,0.29119 -0.19413,-0.48531 z m -2.23245,0.58237 -0.19413,-0.38825 -0.19413,0.19413 0.38826,0.19412 z m 9.70631,-3.59133 -1.26182,3.59133 1.26182,-0.7765 0,-2.81483 z m -115.0198,7.47386 -0.0971,0 0,0 0.0971,0 z m 106.47824,-6.11498 -0.87356,0.87357 0.19412,0.97063 0.67944,-1.8442 z m -90.36576,7.76505 0,-0.38825 -0.0971,0.19413 0.0971,0.19412 z m 89.29807,-8.73568 2.81483,4.27078 6.3091,3.97959 -1.45594,-3.39721 -6.01792,-5.14435 -1.65007,0.29119 z m -93.18059,7.18267 -0.0971,-0.29119 -0.19412,0.0971 0.29119,0.19412 z m 96.48074,-8.83274 -0.38826,1.45595 0.67945,-0.48532 -0.29119,-0.97063 z m 2.03832,0 -0.0971,0.97063 0.87357,0.29119 -0.77651,-1.26182 z m -95.41305,7.57092 -0.48531,-0.0971 -0.48532,0.19413 0.97063,-0.0971 z m 9.99751,0.77651 -0.38826,0.67944 0.19413,-0.58238 0.19413,-0.0971 z m 1.45594,0.0971 -0.87357,0.0971 0.48532,0.58238 0.38825,-0.67944 z m -58.82025,-12.42408 0.97063,0.48532 -0.19412,-0.19413 -0.77651,-0.29119 z m 38.53406,9.60925 0.0971,-0.0971 -0.0971,0.0971 0,0 z m 0.29119,-0.0971 0.0971,0 0,-0.0971 -0.0971,0.0971 z m 100.36327,-7.47386 0.48531,1.8442 0.97063,-0.58238 -1.45594,-1.26182 z m -97.74257,6.40616 0.0971,-0.0971 0,0 -0.0971,0.0971 z m 93.56885,-5.62966 0.48532,4.4649 0.97063,-0.97063 -1.45595,-3.49427 z m 0.48532,-1.45595 2.23245,3.10602 -0.29119,-2.03832 -1.94126,-1.0677 z m -6.89148,0.77651 -0.58238,1.8442 0.7765,-1.26182 -0.19412,-0.58238 z m -77.6505,4.75609 -0.0971,-0.0971 0.0971,0.0971 0,0 z m 9.221,0.19413 -0.19413,-0.29119 0.19413,0.38825 0,-0.0971 z m 68.62362,-6.40617 3.88253,6.40617 -0.58238,-4.36784 -3.30015,-2.03833 z m -63.18809,3.39721 -0.29119,0.29119 0.48532,0.19413 -0.19413,-0.48532 z m -1.26182,0.19413 0.0971,-0.29119 -0.38825,0 0.29119,0.29119 z m -0.97063,0 -2.52364,1.65007 -3.10602,4.07665 1.55301,1.65008 7.18267,-5.33848 -3.10602,-2.03832 z m 61.24683,-6.3091 -0.67944,-0.38826 0,0.58238 0.67944,-0.19412 z m -61.82921,5.14434 0.0971,0.38825 0.67945,0.38826 -0.77651,-0.77651 z m 63.67341,-6.98854 -1.94126,0.97063 1.84419,0.58238 0.0971,-1.55301 z m -1.26182,0 -0.19413,-0.19413 -0.0971,0.19413 0.29119,0 z m 5.92085,-1.55301 -0.77651,-0.29119 -0.19412,0.58238 0.97063,-0.29119 z m -4.17372,0.67944 -0.67944,-0.0971 0,0.19413 0.67944,-0.0971 z m 2.13539,-0.77651 3.97959,5.82379 -1.06769,-5.33847 -2.9119,-0.48532 z m -64.06166,6.30911 -2.32951,1.74713 1.06769,1.16476 3.10602,-2.32952 -1.8442,-0.58237 z m -26.40117,-3.6884 -0.0971,-0.0971 0,0.0971 0.0971,0 z m -1.06769,-0.48532 -0.0971,-0.48531 0,0.19412 0.0971,0.29119 z m 29.79838,1.26182 -0.19413,0.0971 0,0.0971 0.19413,-0.19413 z m -0.97063,-0.19412 -0.0971,0 -0.19412,0.29119 0.29119,-0.29119 z m 2.32951,-0.77651 -0.29119,-0.19413 0,0.0971 0.29119,0.0971 z m 0.77651,-0.0971 -0.29119,-0.19413 0,0.0971 0.29119,0.0971 z m -1.26182,-0.29119 -0.38826,0 0,0.0971 0.38826,-0.0971 z m 19.31556,-1.94126 0.0971,-0.29119 -0.19413,0.19412 0.0971,0.0971 z m 5.92085,-3.10602 1.16475,-1.45595 -0.38825,0.29119 -0.7765,1.16476 z m -11.8417,-0.19413 0.38825,-0.29119 0.0971,-0.38825 -0.48531,0.67944 z m 0,-1.06769 -0.38826,0.29118 0.67945,-0.19412 -0.29119,-0.0971 z m -15.91836,0 -0.0971,-0.38826 -0.0971,0 0.19412,0.38826 z m 15.5301,-0.0971 -0.38825,0.38825 -0.19412,0.38826 0.58237,-0.77651 z m 10.67695,-1.16476 0.0971,0 0.0971,0 -0.19412,0 z m 0.48531,0 -0.19412,-0.0971 0,0.0971 0.19412,0 z m -1.16475,-0.0971 0.0971,0.0971 0,-0.0971 -0.0971,0 z m -7.95918,0.58238 0.38825,-0.38825 -0.48531,0.38825 0.0971,0 z m 5.92085,-1.16476 0,0 0,0 0,0 z m -4.75609,0.29119 -2.32952,3.78546 3.00896,-3.49427 -0.67944,-0.29119 z m -3.00896,0.48532 -0.29119,-0.38825 -0.0971,0.19412 0.38825,0.19413 z m 7.3768,-0.87357 -0.19413,-0.0971 0.0971,0.0971 0.0971,0 z m 2.52364,0.19413 0,-0.67945 -0.19413,0.29119 0.19413,0.38826 z m -71.24433,-7.47386 -4.65903,-0.19413 3.20308,3.39721 1.45595,-3.20308 z m 66.29411,6.89148 0.19413,0.67944 0.48531,-0.77651 -0.67944,0.0971 z m -3.88253,-0.0971 -0.29119,2.13539 0.48532,-1.35888 -0.19413,-0.77651 z m -84.25078,-16.11247 0.0971,-0.38826 0,0 -0.0971,0.38826 z m 83.28015,14.75359 0.0971,0.29119 0.19412,-0.0971 -0.29119,-0.19413 z m -0.48531,0.38825 -0.19413,-0.58238 -0.29119,0.19413 0.48532,0.38825 z m 4.56196,-1.16475 0,-0.38826 -0.29119,0.19413 0.29119,0.19413 z m -4.36784,-0.58238 0,0.97063 0.29119,-0.67944 -0.29119,-0.29119 z m -7.37679,-1.16476 0,-0.29119 0,0 0,0.29119 z m -50.66695,-12.03583 0.19412,-0.58238 -0.0971,0.0971 -0.0971,0.48531 z m 0.29119,-0.97063 -0.0971,-0.0971 -0.0971,0.0971 0.19413,0 z m 4.27077,-2.32951 0,-0.0971 0,0 0,0.0971 z m 0,-0.38826 -0.0971,-0.19412 0,0 0.0971,0.19412 z m 1.74714,-2.52364 0,0 -0.0971,0 0.0971,0 z m 0.58238,0.19413 -0.38825,-0.19413 0,0.0971 0.38825,0.0971 z m -0.58238,-0.38825 0,-0.19413 -0.19413,0.19413 0.19413,0 z m -15.5301,-4.56197 -0.19412,-0.48532 -0.0971,-0.29118 0.29119,0.7765 z m 1.45595,-1.74714 0.0971,0 0.0971,0.0971 -0.19412,-0.0971 z m -2.62071,-0.48531 -0.7765,-0.97063 0.58238,0.7765 0.19412,0.19413 z m -1.55301,-1.55301 -0.19412,0 0.29119,0.0971 -0.0971,-0.0971 z m 0.19413,-1.0677 0,0 0,0 0,0 z m -0.19413,-0.0971 0,0 0.19413,0.0971 -0.19413,-0.0971 z m 25.72173,7.66799 -1.06769,0.0971 0.58238,0.29119 0.48531,-0.38825 z m -26.78942,-9.41513 -0.77651,2.9119 2.42658,0.38825 3.20309,3.30015 1.94126,-0.87357 -6.79442,-5.72673 z m 16.98605,1.16476 0,-0.19412 0,0.0971 0,0.0971 z m -4.85316,-10.28869 -0.19413,-0.0971 0.0971,0.0971 0.0971,0 z m 2.81483,0.97063 0.29119,-0.0971 -0.0971,0 -0.19413,0.0971 z m 1.94126,-0.58238 0.29119,0 0.87357,-0.38825 -1.16476,0.38825 z m 3.49428,-1.06769 0.19412,-0.19413 -0.29119,0.19413 0.0971,0 z m 0.48531,-0.0971 0.58238,-0.29119 -0.48532,0.0971 -0.0971,0.19413 z m 1.45595,-0.58238 -0.48532,0.0971 0,0.0971 0.48532,-0.19412 z m 0.58238,-0.0971 0,0 0,0 0,0 z m 61.73214,-17.47136 -0.38825,-0.29119 -0.67944,-0.29119 1.06769,0.58238 z m -50.86107,-2.13539 0.87356,-1.16475 -0.48531,0.38825 -0.38825,0.7765 z m 1.16475,-1.35888 0.38826,-0.58238 -0.19413,0.19413 -0.19413,0.38825 z m 0.58238,-0.7765 0.67944,-0.58238 -0.38825,0.19412 -0.29119,0.38826 z m 30.57488,0.19412 0.48532,0.48532 0.29119,0 -0.77651,-0.48532 z m -15.62716,-6.40616 -3.97959,3.30014 -2.42657,-0.67944 -5.62966,3.20308 -1.0677,-0.67944 -6.40616,7.18267 -6.50323,1.45595 0.58237,3.49427 2.9119,3.97959 5.43553,5.24141 -0.87356,2.03832 4.07665,1.74714 -2.13539,0.38825 -2.62071,-2.03832 1.35889,3.00895 -1.74714,1.0677 -5.5326,-5.04728 -4.36784,0.7765 -7.47386,2.81483 3.39721,3.78546 -0.48531,2.32952 2.23245,2.71776 7.37679,2.9119 5.33848,-2.71777 0.87356,2.03833 -1.45594,6.11497 -4.46491,0 -5.2414,2.32952 -0.29119,-1.65008 -2.71777,1.0677 -1.26182,2.81483 -4.46491,3.39721 0,4.95022 1.74714,0.7765 -1.35888,4.17372 5.82378,5.04728 3.6884,-1.55301 -0.7765,6.21204 1.06769,1.35888 4.46491,0.97063 1.65007,1.8442 3.88252,0.29119 1.8442,1.94127 3.97959,-1.16476 -1.8442,2.52364 -1.45595,5.14434 -11.8417,7.66799 -1.55301,1.55301 -2.23245,-0.87357 -3.59133,0.87357 -5.14435,3.39721 8.05624,-2.32952 1.16476,1.74714 10.38575,-3.39721 0.29119,1.35889 4.07665,-4.07666 8.54156,-5.92085 0.67944,0.38826 7.47386,-5.92085 -1.94126,-2.32952 2.52364,-4.17371 6.60029,-7.86212 5.04728,-0.97063 1.55301,1.0677 -6.11497,1.74713 -1.65008,6.50323 0.19413,3.49428 2.13539,-0.19413 10.28869,-6.21204 0.7765,-2.32952 -0.87356,-3.59133 3.10601,0.7765 2.23246,-1.45594 6.40616,3.88252 -0.48531,1.0677 14.55946,1.8442 3.39721,-1.0677 0.97064,1.45595 12.6182,6.01791 2.13539,-1.26182 0.19413,-7.27973 1.65007,3.30014 8.1533,5.92085 0.67944,2.42658 7.08561,3.97959 1.8442,5.14434 1.74714,-3.97958 3.59133,6.98854 2.42658,-3.97959 -1.94126,-4.95022 -7.47386,-0.7765 -11.45345,-10.96813 -6.21204,-4.56197 -4.75609,4.65903 -2.81483,0 -6.50323,-4.27078 -6.40617,-0.29119 -9.12393,-57.55843 -1.55301,-2.71776 -3.6884,-2.23246 -5.5326,1.0677 -4.27078,-0.87357 -5.43553,-2.13539 -5.72673,0.38825 -1.45594,-2.71776 -4.56197,-0.67945 -0.7765,-1.65007 -2.03833,2.32952 -0.58238,-4.36784 z"
     style="stroke-width:0.97063118000000004;fill:#f9f9f9" />
</svg>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'travel.js';
    ?>
</script>
</body>
</html>