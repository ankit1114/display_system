<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="87ceeb">
<center><h2>Online Library Management system</h2></center>
 <br>
 <?php
 include("dbconnection.php");
 $isbn=$_POST["isbn"];
 $title=$_POST["title"];
 $edition=$_POST["edition"];
 $author=$_POST["author"];
 $publication=$_POST["publication"];
 </body>
</html>