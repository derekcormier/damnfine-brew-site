<?php 
	$query = "SELECT highlight_color ".
			"FROM beers ".
			"ORDER BY RAND() ".
			"LIMIT 1";
	
	$rslt = $mysqli->query($query);
		
	while($r = $rslt->fetch_object()) {
		$highlightColor = $r->highlight_color;
	}
	
	echo '<STYLE type="text/css">'.
			'.highlighted-color {background-color:' . $highlightColor . '}'.
		'</STYLE>';
?>