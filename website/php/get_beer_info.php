<?php
	// Connect to the Damnfine Brew database
	include 'db_connect.php';
	
	$rslt = $mysqli->query("SELECT name, abv, ibu, srm, highlight_color FROM beers");

	$rows = array();
	while($r = $rslt->fetch_object()) {
		$rows[] = $r;
	}
	echo json_encode($rows);
?>