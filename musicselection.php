<!DOCTYPE html>
<?php
include_once 'header.php';
?>
<html lang="en">

<head>
    <!--title-->
    <title>WELCOME TO THE MUSIC ACADEMY</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <!--style sheet links-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <img src="Images/logo2.svg" class="header">
    <link rel="stylesheet" href="simplestylesheet.css">
    <link rel="stylesheet" href="simplestylesheet.css" section>
</head>
<!-- Navigation bar begins here-->
<div class="topnav">
    <li><a class="active" href="index.php">Home</a></li>
    <li><a class="feturedartist" href="Feturedartist.php">Fetured Artist Page</a></li>
    <li><a class="musicselection" href="Musicselection.php">Music section page</a><li>
    <li><a class="loginpage" href="loginpage.php">Login page</a><li>
    <li><a class="signup page" href="signup.php">Sign up page</a><li>
</div>
<!-- navigation bar ends here-->



    <!--Could not get the search table to work with having the CSS on the main page-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
    </head>

    <body>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Bands.." title="Type in a name">
        <!--Muisc selection table taken and edited form W3SCHOOLS https://www.w3schools.com/howto/howto_js_filter_table.asp-->
        <table id="myTable">
            <tr class="header">
                <th style="width:40%;">Genre</th>
                <th style="width:40%;">Artist</th>
                <th style="width:40%;">Album</th>
            </tr>
            <tr>
                <td>Rap</td>
                <td>Disoriented Scoundrel</td>
                <td>Chap in the the Recess</td>

                <tr>
                    <td>Rap</td>
                    <td>Skttlz</td>
                    <td>The true This Ghosty</td>

                </tr>
                <tr>
                    <td>Chart</td>
                    <td>Mallard</td>
                    <td>Models and Controllers</td>
                </tr>
                <tr>
                    <td>RNB</td>
                    <td>Frank Saturn</td>
                    <td>Non Orthodox Sound System</td>
                </tr>
                <tr>
                    <td>RNB</td>
                    <td>Creepy Cat</td>
                    <td>Catstyle</td>
                </tr>
                <tr>
                    <td>Rock</td>
                    <td>Wartering Hole</td>
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
                    <td>Kïllurz</td>
                    <td>Below Utopia</td>
                </tr>
        </table>

        <!--JAVA SCRIPT FOR THE TABLE -->
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

    </body>

</html>
