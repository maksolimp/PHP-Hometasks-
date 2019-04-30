<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session.Task 2 - Page 2</title>
</head>
<body>
	<h2>Welcome at page 2!</h2>
	<a href="index.php">To the main page</a><br>
	<a href="page3.php">Next Page 3</a><br>
	<a href="contacts.php">Contacts page</a>
	
</body>
</html>

<?php
$name_page = "You have visited page <b>2</b>";
$link_page = "<a href='".$_SERVER['REQUEST_URI']."'>".$name_page."</a>";
 
session_start();
$_SESSION['pages'][] = $link_page;
?>