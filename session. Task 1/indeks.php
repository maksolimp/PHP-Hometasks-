<form action="" method="post">
	<label for="username">Enter your name below:</label>
	<input type="text" name="username" placeholder="Your name..">
	<input type="submit" name="submit" value="Enter">
</form>

<?php 

if (!empty($_REQUEST['username'])) {
	session_start();
	$_SESSION['username'] = $_REQUEST['username'];
}

?>