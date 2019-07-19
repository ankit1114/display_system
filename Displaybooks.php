<!DOCTYPE html>
<html>
<head>
	<title>online library management system</title>
</head>
<body bgcolor="0000FF">
	<center><h2>Online Library Management System</h2></center><br>
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
		
	$sql = "INSERT INTO 'books_info'('isbn','title', 'author', 'edition', 'publication' ) VALUES (NULL, '$isbn', $title', '$author', '$edition', '$publication' )";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();         
	}

	?>
	<table border="2" align="center" cellpadding="5" cellspacing="5">

		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Edition</th>
		    <th>Publication</th>

		</tr>

	</table>



</body>
</html>