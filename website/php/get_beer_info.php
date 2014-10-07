<?php
	// Connect to the Damnfine Brew database
	include 'db_connect.php';
	
	$rslt = $mysqli->query("SELECT beers.name, beers.abv, beers.ibu, beers.srm, beers.highlight_color, beers.label_image, srm_color.color AS beer_color ".
			"FROM beers ".
			"LEFT OUTER JOIN srm_color ".
			"ON beers.srm=srm_color.srm ".
			"ORDER BY beers.beer_id DESC");
	
	$rows = array();
	while($r = $rslt->fetch_object()) {
		$rows[] = $r;
	}
	echo json_encode($rows);
?>