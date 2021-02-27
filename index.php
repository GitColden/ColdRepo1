<!DOCTYPE html>
<?php
include_once 'header.php';
?>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <!--title-->
    <title>WELCOME TO THE MUSIC ACADEMY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <img src="Images/logo2.svg" alt="Logo2" class="header">
    <!--Style sheet links-->
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
            <h1>Welcome to the music academy</h1>
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
            <p>We have all the artist you like to listen too. You can also Listen to our Fetured artist Monarchy</p>
        </div>
        <!-- top container ends here-->

            <!-- this is the next container to store artist gallery-->
            <h2>Artist Gallery</h2>
            <div class="container">
            <img src="images/monarchy-album.jpg " alt="crown picture" class="one">
            <img src="images/monarchy-DE.jpg " alt="clown picture" class="two ">
            <img src="images/monarchy-ES.jpg " alt="red flash picture" class="three ">
            <img src="images/monarchy-ludo.jpg " alt="ludo bored picture" class="four ">

            <img src="images/monarchy-NATG.jpg " alt="bulding picture" class="six">
            <img src="images/people-2561506_1920.jpg" alt="dj girl" class="eight">
            <img src="images/musician-349790_1920.jpg" alt="man with guitar" class="nine">
            </div>

        <!-- Artist Gallery Container ends here-->
        <!--Music table starts here-->
        <div id="genreTable">
            <h3>ARTIST'S AND MUSIC</h3>
            <div id="t01 ">
                <div>
                    <table id="musictable">
                        <tr>
                            <th>Genre</th>
                            <th>Artist Album</th>
                            <th>Album</th>
                        </tr>
                        <tr>
                            <td>Rap</td>
                            <td>Disoriented Scoundrel</td>
                            <td>Chap in the the Recess</td>
                        </tr>
                        <tr>
                            <td>Rap</td>
                            <td>Skittlz</td>
                            <td>The True Thin Ghosty</td>
                        </tr>
                        <tr>
                            <td>Chart</td>
                            <td>Slow Hatter</td>
                            <td>Not Scared</td>
                        </tr>
                        <tr>
                            <td>Chart</td>
                            <td>Mallard</td>
                            <td>Models and Controllers</td>
                        </tr>
                        <tr>
                            <td>RnB</td>
                            <td>Frank Saturn</td>
                            <td>Non Orthodox Sound System</td>
                        </tr>
                        <tr>
                            <td>RnB</td>
                            <td>Creepy Cat</td>
                            <td>Catstyle</td>
                        </tr>
                        <tr>
                            <td>Rock</td>
                            <td>Watering Hole</td>
                            <td>Daybreak Triumph</td>
                        </tr>
                        <tr>
                            <td>Classic Rock</td>
                            <td>Mains Power</td>
                            <td>Pathway to Purgatory</td>
                        </tr>
                        <tr>
                            <td>Classic Rock</td>
                            <td>Monarchy</td>
                            <td>Read All About It</td>
                        </tr>
                        <tr>
                            <td>Indie</td>
                            <td>The Boulder Perennials</td>
                            <td>The Boulder Perennials</td>
                        </tr>
                        <tr>
                            <td>Indie</td>
                            <td>Polar Primates</td>
                            <td>What People Claim About Me Is Incorrect</td>
                        </tr>
                        <tr>
                            <td>Dance</td>
                            <td>Old Chaos</td>
                            <td>Entity</td>
                        </tr>
                        <tr>
                            <td>Dance</td>
                            <td>Deceased Rod3nt</td>
                            <td>Get Abraded</td>
                        </tr>
                        <tr>
                            <td>Metal</td>
                            <td>Hellsinkers</td>
                            <td>En Fin Samling Av Latar</td>
                        </tr>
                        <tr>
                            <td>Metal</td>
                            <td>Killurz</td>
                            <td>Below Utopia</td>
                        </tr>
                    </table>
                </div>
                <!--Muisic table ends here-->
                <div id="priceTable">
                    <!--Price table starts here-->
                    <table style="width:100% ">
                        <tr>
                            <th>Offer</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <th>Gold Level</th>
                            <th>£4.99</th>
                            <th>Unlimited access to our entire catalogue</th>
                        </tr>
                        <tr>
                            <th>Silver Level</th>
                            <th>£2.99</th>
                            <th>Unlimited usage with ad support</th>
                        </tr>
                        <tr>
                            <th>Platinum Level</th>
                            <th>£6.99</th>
                            <th>Unlimited Music streaming on unlimited devices</th>
                        </tr>
                        <tr>
                            <th>Family Pack</th>
                            <th>£9.99</th>
                            <th>Up to 4 seprate gold accounts in one pack</th>
                        </tr>
                    </table>
                    <!--Price table ends here-->

                </div>
            </div>
        </div>
    </div>
</body>

<?php
include_once 'footer.php';
?>

</html>
