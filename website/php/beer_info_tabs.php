<?php
	static $beer_id_start = 1;
	static $number_of_beers = 8;
	
	$beer_stories = getBeerStories($mysqli, $beer_id_start, $number_of_beers);
	$fermentables = getFermentables($mysqli, $beer_id_start, $number_of_beers);
	$hops = getHops($mysqli, $beer_id_start, $number_of_beers);
	$yeasts = getYeasts($mysqli, $beer_id_start, $number_of_beers);
	$extras = getExtras($mysqli, $beer_id_start, $number_of_beers);
	$steps = getSteps($mysqli, $beer_id_start, $number_of_beers);
	
	for($i = 0; $i < ($beer_id_start + $number_of_beers - 1); $i++) {
		echo '<div class="beerDetails" id="beerDetails' . $i . '">'.
				'<ul class="tabs">'.
					'<li><a class="recipeTab" href="#recipeBox' . $i . '"><div>Recipe</div></a></li>'.
					'<li><a class="storyTab" href="#story' . $i . '"><div>About</div></a></li>'.
				'</ul>'.
				'<div class="story" id="story' . $i . '">'.
					$beer_stories[$i].
				'</div>'.
				'<div class="recipeBox" id="recipeBox' . $i . '">';
		
		writeFermentables($fermentables, $i);
		
		writeHops($hops, $i);
		
		writeYeasts($yeasts, $i);
		
		writeExtras($extras, $i);
		
		writeSteps($steps, $i);
		
		echo 	'</div>'.
			'</div>';
	}
	
	function getBeerStories($mysqli, $beer_id_start, $number_of_beers) {
		$returnArray = array();
		
		$query = "SELECT beer_id, description ".
				"FROM beers ".
				"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
				"ORDER BY beer_id";
		
		$rslt = $mysqli->query($query);
		
		$Parsedown = new Parsedown();
		
		while ($r = $rslt->fetch_object()) {
			$textToParse = (string)$r->description;
			$parsedText = $Parsedown->text($textToParse);
			$returnArray[$r->beer_id-$beer_id_start] = $parsedText;
		}
		
		return $returnArray;
	}
	
	function getFermentables($mysqli, $beer_id_start, $number_of_beers) {
		
		$returnArray = array(array());
		
		$query = "SELECT beer_id, list_order, fermentable, amount, percent ".
				"FROM fermentables ".
				"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
				"ORDER BY beer_id, list_order";
		
		$rslt = $mysqli->query($query);
		
		while ($r = $rslt->fetch_object()) {
			$returnArray[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->fermentable,  $r->amount, $r->percent);
		}
		
		return $returnArray;
	}
	
	function getHops($mysqli, $beer_id_start, $number_of_beers) {
		
		$returnArray = array(array());
		
		$query = "SELECT beer_id, list_order, hop, amount, timing, used ".
				"FROM hops ".
				"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
				"ORDER BY beer_id, list_order";
		
		$rslt = $mysqli->query($query);
		
		while ($r = $rslt->fetch_object()) {
			$returnArray[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->hop,  $r->amount, $r->timing, $r->used);
		}
		
		return $returnArray;
	}
	
	function getYeasts($mysqli, $beer_id_start, $number_of_beers) {
		
		$returnArray = array(array());
		
		$query = "SELECT beer_id, list_order, name, company, style ".
				"FROM yeasts ".
				"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
				"ORDER BY beer_id, list_order";
		
		$rslt = $mysqli->query($query);
		
		while ($r = $rslt->fetch_object()) {
			$returnArray[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->name,  $r->company, $r->style);
		}
		
		return $returnArray;
	}
	
	function getExtras($mysqli, $beer_id_start, $number_of_beers) {
		
		$returnArray = array(array());
		
		$query = "SELECT beer_id, list_order, name, amount, used ".
				"FROM extras ".
				"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
				"ORDER BY beer_id, list_order";
		
		$rslt = $mysqli->query($query);
		
		while ($r = $rslt->fetch_object()) {
			$returnArray[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->name,  $r->amount, $r->used);
		}
		
		return $returnArray;
	}

	function getSteps($mysqli, $beer_id_start, $number_of_beers) {
		
		$returnArray = array(array());
		
		$query = "SELECT beer_id, list_order, step ".
				"FROM recipe_steps ".
				"WHERE beer_id BETWEEN " . $beer_id_start . " AND " . ($beer_id_start + $number_of_beers -1) . " " .
				"ORDER BY beer_id, list_order";
		
		$rslt = $mysqli->query($query);
		
		while ($r = $rslt->fetch_object()) {
			$returnArray[$r->beer_id-$beer_id_start][$r->list_order-1] = array($r->step);
		}
		
		return $returnArray;
	}
	
	function writeFermentables($fermentables, $beer_number) {
		for($j = 0; $j < count($fermentables[$beer_number]); $j++) {
			if($j == 0) {
				echo '<div class="recipeComponent fermentables">'.
						'<h1>Fermentables</h1>'.
						'<table>'.
							'<tr>'.
								'<th class="fermentable-table">Fermentable</th>'.
								'<th colspan="2">Amount</th>'.
							'</tr>';
			}
				
			echo 			'<tr>'.
								'<td>' . $fermentables[$beer_number][$j][0] . '</td>'.
								'<td>' . $fermentables[$beer_number][$j][1] . '</td>'.
								'<td>' . $fermentables[$beer_number][$j][2] . '%</td>'.
							'</tr>';
				
			if($j == (count($fermentables[$beer_number]) - 1)) {
				echo 	'</table>'.
					'</div>';
			}
		}
	}
	
	function writeHops($hops, $beer_number) {
		for($j = 0; $j < count($hops[$beer_number]); $j++) {
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
		
			echo 			'<tr>'.
								'<td>' . $hops[$beer_number][$j][0] . '</td>'.
								'<td>' . $hops[$beer_number][$j][1] . '</td>'.
								'<td>' . $hops[$beer_number][$j][2] . '</td>'.
								'<td>' . $hops[$beer_number][$j][3] . '</td>'.
							'</tr>';
		
			if($j == (count($hops[$beer_number]) - 1)) {
				echo 	'</table>'.
					'</div>';
			}
		}
	}
	
	function writeYeasts($yeasts, $beer_number) {
		for($j = 0; $j < count($yeasts[$beer_number]); $j++) {
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
		
			echo 			'<tr>'.
								'<td>' . $yeasts[$beer_number][$j][0] . '</td>'.
								'<td>' . $yeasts[$beer_number][$j][1] . '</td>'.
								'<td>' . $yeasts[$beer_number][$j][2] . '</td>'.
							'</tr>';
		
			if($j == (count($yeasts[$beer_number]) - 1)) {
				echo 	'</table>'.
					'</div>';
			}
		}
	}
	
	function writeExtras($extras, $beer_number) {
		for($j = 0; $j < count($extras[$beer_number]); $j++) {
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
		
			echo 			'<tr>'.
								'<td>' . $extras[$beer_number][$j][0] . '</td>'.
								'<td>' . $extras[$beer_number][$j][1] . '</td>'.
								'<td>' . $extras[$beer_number][$j][2] . '</td>'.
							'</tr>';
		
			if($j == (count($extras[$beer_number]) - 1)) {
				echo 	'</table>'.
					'</div>';
			}
		}
	}
	
	function writeSteps($steps, $beer_number) {
		for($j = 0; $j < count($steps[$beer_number]); $j++) {
			if($j == 0) {
				echo '<div class="recipeComponent brewingSteps">'.
						'<h1>Brewing Steps</h1>'.
						'<ol>';
			}
		
			echo 			'<li>' . $steps[$beer_number][$j][0] . '</li>';
		
			if($j == (count($steps[$beer_number]) - 1)) {
				echo 	'</ol>'.
					'</div>';
			}
		}
	}
?>