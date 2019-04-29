<?php

$filename = $_FILES['file']['name'];
$arr_name = [];

$img_dir = __DIR__."\img"."\/";
$txt_dir = __DIR__."\doc"."\/";
$rest_dir = __DIR__."\/etc"."\/";

$img_allowed =  array('gif','png' ,'jpg','jpeg');
$txt_allowed =  array('txt','rtf' ,'doc','docx');
$allowed_items = array_merge($img_allowed, $txt_allowed);

for ($i=0; $i < count($filename); $i++) { 
			
	$filenames = strtolower($_FILES['file']['name'][$i]);
	$ext = pathinfo($filenames, PATHINFO_EXTENSION);

	if(!in_array($ext, $allowed_items)) {

		$tmp_name = $_FILES["file"]["tmp_name"][$i];
		$name = basename($_FILES["file"]["name"][$i]);
		move_uploaded_file($tmp_name, $rest_dir.$name);
		$arr_name[] = $name;

	} elseif (in_array($ext, $txt_allowed)) {
			
		$tmp_name = $_FILES["file"]["tmp_name"][$i];
		$name = basename($_FILES["file"]["name"][$i]);
		move_uploaded_file($tmp_name, $txt_dir.$name);
		$arr_name[] = $name;

	} else {

		$tmp_name = $_FILES["file"]["tmp_name"][$i];
		$name = basename($_FILES["file"]["name"][$i]);
		move_uploaded_file($tmp_name, $img_dir.$name);
		$arr_name[] = $name;

	}

};

// creating uploading history

echo '<h1>Downloadable files by user:</h1>';
echo '<ol>';

foreach ($arr_name as $item)
{
	$item = (string)$item;
	$new_arr_items = pathinfo(strtolower($item), PATHINFO_EXTENSION);

	if (in_array($new_arr_items, $img_allowed)){
		echo '<li><img width="300" height="200" src="./img/'. $item .'"></li>';
	} else {
		echo '<li>'.$item.'</li>';
	}
	
}
echo '</ol>';
echo "<button><a href='main.html'>Back to the Homepage!</a></button>";

