<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session. Task 2 - Main page</title>
</head>
<body>
	<h1>Welcome at the homepage!</h1>
	<h4>Select page you want too visit:</h6>
	<a href="page2.php">Page 2</a><br>
	<a href="page3.php">Page 3</a><br>
	<a href="contacts.php">Contact page</a>
</body>
</html>

<?php
$name_page = "You have visited <b>main</b> page";
$link_page = "<a href='".$_SERVER['REQUEST_URI']."'>".$name_page."</a>";
 

session_start();
//Если в сессии есть ключ pages, можно с ним работать
if (isset($_SESSION['pages']))
{
    $_SESSION['pages'][] = $link_page;
//Если ключа pages нет, его надо создать как массив
} else {
        $_SESSION['pages'] = array();
        $_SESSION['pages'][] = $link_page;
}
?>