<?php 
	$query = "SELECT highlight_color ".
			"FROM beers ".
			"ORDER BY RAND() ".
			"LIMIT 1";
	
	$rslt = $mysqli->query($query);
		
	while($r = $rslt->fetch_object()) {
		$highlightColor = $r->highlight_color;
	}
	
	echo '<style type="text/css">'.
			'.highlighted-color {background-color:' . $highlightColor . '}'.
			'a.navigator:hover>div>span {color:' . $highlightColor . '}'.
			'a.blog-preview-link:hover>div>h1 {color:' . $highlightColor . '}'.
			'a.recipeTab:hover>div {color:' . $highlightColor . '}'.
			'a.storyTab:hover>div {color:' . $highlightColor . '}'.
		'</style>';
?>