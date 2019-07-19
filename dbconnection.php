<?php
 $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "books";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
if ($conn) {
		echo" ";
	}
	else
	{
		die("Connection error: " . mysqli_connect_error());	
	}
	

?>
<br>