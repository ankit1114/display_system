<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="87ceb">
<center><h2>Online Library Management System</h2></center>
  
	<form action="Displaybooks.php" method="post">
	<table border="2" align="center" cellpadding="5" cellspacing="5">
		<tr>
			<td>Enter ISBN:</td>
			<td><input type="text" name="ISBN" size="48"></td>
		</tr>
		<tr>
			<td>Enter Title:</td>
			<td><input type="text" name="title" size="48"></td>
		</tr>
		<tr>
			<td>Enter Author:</td>
			<td><input type="text" name="author" size="48"></td>
		</tr>
		<tr>
			<td>Enter Edition:</td>
			<td><input type="text" name="edition" size="48"></td>
		</tr>
		<tr>
			<td>Enter Publication:</td>
			<td><input type="text" name="Publication" size="48"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="Submit" value="Submit" >
				<input type="submit" name="Reset" value="Reset" >
			</td>
			
		</tr>
		<?php
	//include("EnterBooks.php");
	include("dbconnection.php");
//include("Insertboos.php");

	//$search = $_REQUEST["search"];
    if(isset($_POST["submit"])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$edition = $_POST['edition']; 
		$publication = $_POST['publication'];
		
	$sql = "INSERT INTO 'books_info'('isbn','title', 'author', 'edition', 'publication' ) VALUES (NULL, '1254', xyz', 'abc', '2001', 'nootan' )";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();         
	}

	?>
		

	</table>
	
</form>
</body>
</html>