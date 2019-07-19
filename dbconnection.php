<?php
 $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "books";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
if ($conn) {
		echo"connecton ok Ankit ";
	}
	else
	{
		die("Connection error: " . mysqli_connect_error());	
	}
	if(isset($_POST["submit"])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$edition = $_POST['edition']; 
		$publication = $_POST['publication'];
		
	$sql = "INSERT INTO 'books'('isbn','title', 'author', 'edition', 'publication' ) VALUES (NULL, '$isbn', $title', '$author', '$edition', '$publication' )";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();         
	}

?>
<br>