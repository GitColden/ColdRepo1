<!DOCTYPE html>
<?php
include_once 'header.php';
?>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <!--TITLE AND STYLE LINKS -->
    <title>featured artist page</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <img src="Images/logo2.svg" class="header">
    <link rel="stylesheet" href="simplestylesheet.css">
    <link rel="stylesheet" href="simplestylesheet.css" section>
</head>

<body>
<!-- Navigation bar begins here-->
<div class="topnav">
    <li><a class="active" href="index.php">Home</a></li>
    <li><a class="feturedartist" href="Feturedartist.php">Fetured Artist Page</a></li>
    <li><a class="musicselection" href="Musicselection.php">Music section page</a><li>
    <li><a class="loginpage" href="loginpage.php">Login page</a><li>
    <li><a class="signup page" href="signup.php">Sign up page</a><li>
</div>
<!-- navigation bar ends here-->

    <!-- this is the top container-->
    <div id="welcome">
        <h1>Featured Artist Page</h1>
        <p1>
            Monarchy are a British rock band made up of Fred Vanus, Bryan June, Rojer Cobbler and Jon Vicars. They formed in Preston in 1970 after Bryan and Rojer left their previous band 'Chessy Grin'. They achieved moderate chart success and have played to large
            stadiums such as the Globe Arena, Deepdale Stadium and Gig Lane.
        </p1>
        <p2>
            Their first album 'Monarchy' reached a high point of 164 in the album charts in 1974, while their 1975 album 'Night as the Guildhall' brought them international success and was the top selling album that year in Liechtenstein. That album featured the
            single 'Slavic Symphony', which stayed at the number one in the UK for nine seconds
        </p2>
    </div>
    <!-- top container ends here-->


    <!-- this is the next container to store artist gallery-->
    <div id="artistTable">
        <h2>Artist Gallery</h2>


                <img src="images/monarchy-album.jpg " alt="crown picture" class="one">
                <img src="images/monarchy-DE.jpg " alt="clown picture" class="two ">
                <img src="images/monarchy-ES.jpg " alt="red flash picture" class="three ">
                <img src="images/monarchy-ludo.jpg " alt="ludo bored picture" class="four ">
                <img src="images/monarchy-NATG.jpg " alt="bulding picture" class="six">
                <img src="images/monarchy-RAAI.jpg " alt="news paper picture" class="seven">
                <img src="images/people-2561506_1920.jpg" alt="dj girl" class="eight">
                <img src="images/musician-349790_1920.jpg" alt="man with guitar" class="nine>
                <!-- Artist Gallery Container ends here-->



</body>









<?php
                include_once 'footer.php';
                ?>

</html>
