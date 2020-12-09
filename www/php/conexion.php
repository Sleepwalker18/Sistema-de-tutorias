<?php
	$servidor = "tutorias-backend";
	$usuario = "dbuser";
	$password = "dbpass";
	$db = "dbname";
	$conn = mysqli_connect($servidor,$usuario,$password,$db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
    }
	return $conn;
?>