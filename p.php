<?php
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$i = 1;
$text = $_POST["subject"];
while(TRUE)
{
	if(!(file_exists("$i.txt")))
	{
		$file = fopen("$i.txt" , "w");
		fwrite($file , "$fname\n$lname\n$email\n$text\n");
		fclose($file);
		break;
	}
	$i = $i + 1;
}

?>