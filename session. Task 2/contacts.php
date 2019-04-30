<?php

session_start();
echo "You have visited those pages: <br>";
echo "<ul>";
foreach ($_SESSION['pages'] as $page)
{        
	 echo "<li>" . $page . "<br></li>";;
}
echo "</ul>";
