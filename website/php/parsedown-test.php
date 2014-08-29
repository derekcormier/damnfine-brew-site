<?php 
	include './php/parsedown/Parsedown.php';

	$parseThis = "#Welcome to my parse demo\n".
			"\n".
			"##Let's see what happens when I do this\n".
			"\n".
			"How about a list:\n".
			"\n".
			"- Yeah\n".
			"- Okay\n".
			"- Alright\n";
	
	$Parsedown = new Parsedown();
	
	echo $Parsedown->text($parseThis);
?>