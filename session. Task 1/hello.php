<?php 
session_start();

if (!empty($_SESSION['username'])) {
	echo "Hello " . $_SESSION['username'];
} else {
	echo "Hello anonymous!";
}