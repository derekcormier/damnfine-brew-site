<?php
	include './php/db_connect.php';
	
	static $beer_id_start = 1;
	static $number_of_beers = 8;
	
	$fermentables = array(array());
	$hops = array(array());
	$yeasts = array(array());
	$extras = array(array());
	
	$query = "SELECT beer_id, list_order, fermentable, amount, percent ".
			"FROM fermentables ".
			"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
			"ORDER BY beer_id, list_order";
	
	$rslt = $mysqli->query($query);
	
	while ($r = $rslt->fetch_object()) {
		$fermentables[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->fermentable,  $r->amount, $r->percent);
	}
	
	$query2 = "SELECT beer_id, list_order, hop, amount, timing, used ".
			"FROM hops ".
			"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
			"ORDER BY beer_id, list_order";
	
	$rslt2 = $mysqli->query($query2);
	
	while ($r = $rslt2->fetch_object()) {
		$hops[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->hop,  $r->amount, $r->timing, $r->used);
	}
	
	$query3 = "SELECT beer_id, list_order, name, company, style ".
			"FROM yeasts ".
			"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
			"ORDER BY beer_id, list_order";
	
	$rslt3 = $mysqli->query($query3);
	
	while ($r = $rslt3->fetch_object()) {
		$yeasts[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->name,  $r->company, $r->style);
	}
	
	$query4 = "SELECT beer_id, list_order, name, amount, used ".
			"FROM extras ".
			"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
			"ORDER BY beer_id, list_order";
	
	$rslt4 = $mysqli->query($query4);
	
	while ($r = $rslt4->fetch_object()) {
		$extras[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->name,  $r->amount, $r->used);
	}
	
	for($i = 0; $i < ($beer_id_start + $number_of_beers - 1); $i++) {
		echo '<div class="beerDetails" id="beerDetails' . $i . '">'.
			'<ul class="tabs">'.
				'<li><a class="recipeTab" href="#recipeBox' . $i . '"><div>Recipe</div></a></li>'.
				'<li><a class="storyTab" href="#story' . $i . '"><div>The Story</div></a></li>'.
			'</ul>'.
			'<div class="story" id="story' . $i . '">'.
				'<p>This is a story about a beer I made.</p>'.
			'</div>'.
			'<div class="recipeBox" id="recipeBox' . $i . '">';
		
		for($j = 0; $j < count($fermentables[$i]); $j++) {
			if($j == 0) {
				echo '<div class="recipeComponent fermentables">'.
						'<h1>Fermentables</h1>'.
						'<table>'.
							'<tr>'.
								'<th class="fermentable-table">Fermentable</th>'.
								'<th colspan="2">Amount</th>'.
							'</tr>';
			}
			
			echo '<tr>'.
					'<td>' . $fermentables[$i][$j][0] . '</td>'.
					'<td>' . $fermentables[$i][$j][1] . '</td>'.
					'<td>' . $fermentables[$i][$j][2] . '%</td>'.
				'</tr>';
			
			if($j == (count($fermentables[$i]) - 1)) {
				echo '</table>'.
					'</div>';
			}
		}
		
		
		for($j = 0; $j < count($hops[$i]); $j++) {
			if($j == 0) {
				echo '<div class="recipeComponent hops">'.
						'<h1>Hops</h1>'.
						'<table>'.
						'<tr>'.
						'<th class="hop-table">Hop</th>'.
						'<th>Amount</th>'.
						'<th>Time</th>'.
						'<th>Use</th>'.
						'</tr>';
			}
				
			echo '<tr>'.
					'<td>' . $hops[$i][$j][0] . '</td>'.
					'<td>' . $hops[$i][$j][1] . '</td>'.
					'<td>' . $hops[$i][$j][2] . '</td>'.
					'<td>' . $hops[$i][$j][3] . '</td>'.
					'</tr>';
				
			if($j == (count($hops[$i]) - 1)) {
				echo '</table>'.
						'</div>';
			}
		}
		
		for($j = 0; $j < count($yeasts[$i]); $j++) {
			if($j == 0) {
				echo '<div class="recipeComponent yeast">'.
						'<h1>Yeast</h1>'.
						'<table>'.
						'<tr>'.
						'<th class="yeast-name-table">Name</th>'.
						'<th>Company</th>'.
						'<th>Type</th>'.
						'</tr>';
			}
				
			echo '<tr>'.
					'<td>' . $yeasts[$i][$j][0] . '</td>'.
					'<td>' . $yeasts[$i][$j][1] . '</td>'.
					'<td>' . $yeasts[$i][$j][2] . '</td>'.
					'</tr>';
				
			if($j == (count($yeasts[$i]) - 1)) {
				echo '</table>'.
						'</div>';
			}
		}
		
		for($j = 0; $j < count($extras[$i]); $j++) {
			if($j == 0) {
				echo '<div class="recipeComponent extras">'.
						'<h1>Extras</h1>'.
						'<table>'.
						'<tr>'.
						'<th class="extras-name-table">Name</th>'.
						'<th>Amount</th>'.
						'<th>Use</th>'.
						'</tr>';
			}
		
			echo '<tr>'.
					'<td>' . $extras[$i][$j][0] . '</td>'.
					'<td>' . $extras[$i][$j][1] . '</td>'.
					'<td>' . $extras[$i][$j][2] . '</td>'.
					'</tr>';
		
			if($j == (count($extras[$i]) - 1)) {
				echo '</table>'.
						'</div>';
			}
		}
		
		echo '</div>'.
				'</div>';
	}

?>