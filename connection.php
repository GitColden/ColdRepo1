<?php

	$SName = "localhost";
	$DBUName = "root";
	$DBPword = "";
	$DBName = "musicstream";


	$Connection = mysqli_connect($SName, $DBUName, $DBPword, $DBName);

	if (!$Connection)
	{
	    echo"ERROR: could not connect to database: ";
	}
	else
	{
	    echo "All systems fully operational.";
	}
	?>
