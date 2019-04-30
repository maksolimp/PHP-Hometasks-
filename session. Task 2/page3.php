<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session.Task 2 - Page 3</title>
</head>
<body>
	<h2>Welcome at page 3!</h2>
	<a href="index.php">Go to the main page</a><br>
	<a href="page2.php">Go to page 2</a><br>
	<a href="contacts.php">Contacts page</a>
</body>
</html>

<?php
$name_page = "You have visited page <b>3</b>";
$link_page = "<a href='".$_SERVER['REQUEST_URI']."'>".$name_page."</a>";
 
session_start();

$_SESSION['pages'][] = $link_page;
/*
if (isset($_SESSION['pages']))
{
    

} else {
        $_SESSION['pages'] = array();
        $_SESSION['pages'][] = $link_page;
}*/
?>