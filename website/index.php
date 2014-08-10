<!DOCTYPE html>
<html>
	<head>
		<title>Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		<script type="text/javascript" src="./js/home.js"></script>
		<script type="text/javascript" src="./js/slider.js"></script>
		<script type="text/javascript" src="./js/meter.js"></script>
		<meta name="description" content="Home of Damnfine Brewing, the creation of a homebrew enthusiast, showcasing the beer recipes, label design, and passion behind the craft." />
		<meta charset="UTF-8">
	</head>
	
	<body>
		<div id="curtain"></div>
	
		<div id="magnified">
			<div id="magnify-back"></div>
			<div id="magnify-window">
				<img id="zoomed-label" src="./images/mcgbrew.svg" alt="Zoomed in label">
				<a href="javascript:void(0);" id="unmagnify">
					<div>
						<img src="./images/magglass.svg" alt="Label Magnifier">
					</div>
				</a>
			</div>
		</div>
	
		<?php include "./php/header.php"; ?>
		
		<div id="page">
		
			<?php include "./php/sidebar.php"?>
			
			<div id="content">
				<div id="label-slider">
					<a href="javascript:void(0);" id="slider-previous">&lt;&lt;</a>
					<a href="javascript:void(0);" id="slider-next">&gt;&gt;</a>
					<a href="javascript:void(0);" id="magnify">
						<div>
							<img src="./images/magglass.svg" alt="Label Magnifier">
						</div>
					</a>
					<ul>
						<?php 
							$rslt = $mysqli->query("SELECT id, name, label_image FROM beers");
								
							$rows = array();
							while ($r = $rslt->fetch_object()) {
								$rows[] = array($r->label_image, $r->name);
							}
							
							for($i = 0; $i < count($rows); $i++) {
								echo "<li><img class=\"slide\" src=\"./images/{$rows[$i][0]}\" ".
									"alt=\"The beer label for {$rows[$i][1]}\"/></li>";
							}
						?>
					</ul>
				</div>
				<div id="beer-info">
					<div id="info-box">
						<div id="meter-box">
							<div class="meter" id="abv">
								<div class="scale-tag">ABV:</div>
								<div class="scale"></div>
								<div class="needle">
									<div class="circle"></div>
									<div class="meter-value">0</div>
								</div>
							</div>
							<div class="meter" id="ibu">
								<div class="scale-tag">IBU:</div>
								<div class="scale"></div>
								<div class="needle">
									<div class="circle"></div>
									<div class="meter-value">0</div>
								</div>
							</div>
							<div class="meter" id="srm">
								<div class="scale-tag">SRM:</div>
								<div class="scale"></div>
								<div class="needle">
									<div class="circle"></div>
									<div class="meter-value">0</div>
								</div>
							</div>
						</div>
						<div id="glass"></div>
						<div id="beer"></div>
						<div id="beer-head"></div>
						<div id="beer-head-bulge"></div>
						<img id="glass-logo" src="./images/df.svg" alt="Damnfine initials on beer glass">
					</div>
					<div class="beerDetails" id="beerDetails0">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox0"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story0"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story0">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox0">
							<div class="batchSize">
								<strong>Batch Size:</strong> 5 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>Light LME</td>
										<td>6.6 lb.</td>
										<td>100%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>2 oz.</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Citra</td>
										<td>1 oz.</td>
										<td>5 mins.</td>
										<td>Boil</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>BRY-97</td>
										<td>Danstar</td>
										<td>Dry Yeast</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Caramel 20L</td>
										<td>1 lb.</td>
										<td>Steep</td>
									</tr>
									<tr>
										<td>Grain Bag</td>
										<td>1 bag</td>
										<td>Steep</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Add at least 2.5 gallons of water to your brew kettle. Adding as close to 6 gallons of water is recommended, but not necessary. The amount of water to add is limited by kettle size. Make sure to leave about 2 gallons of head space to avoid boiling over.</li>
									<li>Bring the water in your kettle to a temperature between 150&deg; and 165&deg;. Be sure not to bring the water temperature above 170&deg;, as you may introduce off-flavors from tannins. Steep the pound of Caramel 20L in the grain bag for about 20 minutes. Be sure that the grains are not compacted in the bag so that the water can soak the grains evenly. When you remove the bag, let the liquid drain from the bag without squeezing.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Light LME</td>
												<td>3.3 lb.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Cascade Hops</td>
												<td>2 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Light LME</td>
												<td>3.3 lb.</td>
												<td>20 mins.</td>
											</tr>
											<tr>
												<td>Citra Hops</td>
												<td>1 oz.</td>
												<td>5 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. If necessary, add room temperature water to the fermenter until you have 5 gallons. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for at least a week or until the final gravity is about 1.012. Bottle with priming sugar or keg.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails1">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox1"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story1"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story1">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox1">
							<div class="batchSize">
								<strong>Batch Size:</strong> 5 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>Special Dark LME</td>
										<td>3.3 lb.</td>
										<td>43%</td>
									</tr>
									<tr>
										<td>Amber LME</td>
										<td>3.3 lb.</td>
										<td>43%</td>
									</tr>
									<tr>
										<td>Amber DME</td>
										<td>1 lb.</td>
										<td>14%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Magnum</td>
										<td>1 oz.</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Simcoe</td>
										<td>1 oz.</td>
										<td>20 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Simcoe</td>
										<td>1 oz.</td>
										<td>5 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>2 oz.</td>
										<td>5-7 days</td>
										<td>Dry Hop</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>BRY-97</td>
										<td>Danstar</td>
										<td>Dry Yeast</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Victory</td>
										<td>8 oz.</td>
										<td>Steep</td>
									</tr>
									<tr>
										<td>Caramel 80L</td>
										<td>8 oz.</td>
										<td>Steep</td>
									</tr>
									<tr>
										<td>Grain Bag</td>
										<td>1 bag</td>
										<td>Steep</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Add at least 2.5 gallons of water to your brew kettle. Adding as close to 6 gallons of water is recommended, but not necessary. The amount of water to add is limited by kettle size. Make sure to leave about 2 gallons of head space to avoid boiling over.</li>
									<li>Bring the water in your kettle to a temperature between 150&deg; and 165&deg;. Be sure not to bring the water temperature above 170&deg;, as you may introduce off-flavors from tannins. Steep the crushed grains in the grain bag for about 20 minutes. Be sure that the grains are not compacted in the bag so that the water can soak the grains evenly. When you remove the bag, let the liquid drain from the bag without squeezing.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Special Dark LME</td>
												<td>3.3 lb.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Amber LME</td>
												<td>3.3 lb.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Amber DME</td>
												<td>1 lb.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Magnum Hops</td>
												<td>1 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Simcoe Hops</td>
												<td>1 oz.</td>
												<td>20 mins.</td>
											</tr>
											<tr>
												<td>Simcoe Hops</td>
												<td>1 oz.</td>
												<td>5 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. If necessary, add room temperature water to the fermenter until you have 5 gallons. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for at least a week or until the final gravity is about 1.012.</li>
									<li>Add the 2 oz. of Cascade hops to the fermented beer. Optionally, rerack the beer to a secondary fementer before adding hops.</li>
									<li>After about a week, bottle with priming sugar or keg.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails2">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox2"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story2"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story2">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox2">
							<div class="batchSize">
								<strong>Batch Size:</strong> 3 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>2-Row</td>
										<td>4 lb.</td>
										<td>68%</td>
									</tr>
									<tr>
										<td>Munich 20L</td>
										<td>1 lb.</td>
										<td>17%</td>
									</tr>
									<tr>
										<td>Caramel 60L</td>
										<td>8 oz.</td>
										<td>8%</td>
									</tr>
									<tr>
										<td>Chocolate Malt</td>
										<td>6 oz.</td>
										<td>6%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Fuggles</td>
										<td>0.5 oz</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Fuggles</td>
										<td>0.5 oz</td>
										<td>30 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>0.5 oz</td>
										<td>5 mins.</td>
										<td>Boil</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>British Ale 1098</td>
										<td>Wyeast</td>
										<td>Liquid</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Unsweetened Cocoa Powder</td>
										<td>1 tablespoon</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cocoa Nibs</td>
										<td>5 oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Canned Sour Cherries</td>
										<td>32 fl. oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Dried Crushed Chipotle Chili</td>
										<td>3 oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Well Vodka</td>
										<td>Very little</td>
										<td>Soaking Additions</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.</li>
									<li>While mashing, heat 3 gallons of water to 170&deg; for sparging.</li>
									<li>Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Fuggles Hops</td>
												<td>0.5 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Fuggles Hops</td>
												<td>0.5 oz.</td>
												<td>30 mins.</td>
											</tr>
											<tr>
												<td>Cascade Hops</td>
												<td>0.5 oz.</td>
												<td>5 mins.</td>
											</tr>
											<tr>
												<td>Unsweetened Cocoa Powder</td>
												<td>1 tablespoon</td>
												<td>5 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for 5 days in the primary fermenter</li>
									<li>Three days after your brew day, get two shot glasses or similar containers with little witdth. In one glass add 5 oz. of cocoa nibs. In the other glass, add 3 oz. of Dried Crushed Chipotle Chilis. Cover each of the ingredients with just enough well vodka to cover them. Cover the glasses with plastic wrap and let sit until reracking.</li>
									<li>Just before reracking, blend two cans (32 fl. oz.) of sour cherries until fairly smooth. Bring the blend to a boil for 10 minutes.</li>
									<li>After the beer has been fermenting for 5 days, rerack the beer into three separate secondary fermenters. Split the fermented beer evenly among the fermenters.</li>
									<li>Split the cocoa nibs into three equal parts. Split the cherries into two equal parts. Add one part of the cocoa nibs (including the vokda) to each of the fermenters. Add oine part of the cherries to two of the fermenters. Add the chili pepper (including the vodka) to one of the fermenters with cocoa nibs and cherries.</li>
									<li>After a week, bottle each of the beers with priming sugar.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails3">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox3"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story3"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story3">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox3">
							<div class="batchSize">
								<strong>Batch Size:</strong> 3 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>2-Row</td>
										<td>4 lb.</td>
										<td>68%</td>
									</tr>
									<tr>
										<td>Munich 20L</td>
										<td>1 lb.</td>
										<td>17%</td>
									</tr>
									<tr>
										<td>Caramel 60L</td>
										<td>8 oz.</td>
										<td>8%</td>
									</tr>
									<tr>
										<td>Chocolate Malt</td>
										<td>6 oz.</td>
										<td>6%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Fuggles</td>
										<td>0.5 oz</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Fuggles</td>
										<td>0.5 oz</td>
										<td>30 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>0.5 oz</td>
										<td>5 mins.</td>
										<td>Boil</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>British Ale 1098</td>
										<td>Wyeast</td>
										<td>Liquid</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Cocoa Powder</td>
										<td>1 tablespoon</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cocoa Nibs</td>
										<td>5 oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Canned Sour Cherries</td>
										<td>32 fl. oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Dried Crushed Chipotle Chili</td>
										<td>3 oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Well Vodka</td>
										<td>Very little</td>
										<td>Soaking Additions</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.</li>
									<li>While mashing, heat 3 gallons of water to 170&deg; for sparging.</li>
									<li>Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Fuggles Hops</td>
												<td>0.5 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Fuggles Hops</td>
												<td>0.5 oz.</td>
												<td>30 mins.</td>
											</tr>
											<tr>
												<td>Cascade Hops</td>
												<td>0.5 oz.</td>
												<td>5 mins.</td>
											</tr>
											<tr>
												<td>Unsweetened Cocoa Powder</td>
												<td>1 tablespoon</td>
												<td>5 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for 5 days in the primary fermenter</li>
									<li>Three days after your brew day, get two shot glasses or similar containers with little witdth. In one glass add 5 oz. of cocoa nibs. In the other glass, add 3 oz. of Dried Crushed Chipotle Chilis. Cover each of the ingredients with just enough well vodka to cover them. Cover the glasses with plastic wrap and let sit until reracking.</li>
									<li>Just before reracking, blend two cans (32 fl. oz.) of sour cherries until fairly smooth. Bring the blend to a boil for 10 minutes.</li>
									<li>After the beer has been fermenting for 5 days, rerack the beer into three separate secondary fermenters. Split the fermented beer evenly among the fermenters.</li>
									<li>Split the cocoa nibs into three equal parts. Split the cherries into two equal parts. Add one part of the cocoa nibs (including the vokda) to each of the fermenters. Add oine part of the cherries to two of the fermenters. Add the chili pepper (including the vodka) to one of the fermenters with cocoa nibs and cherries.</li>
									<li>After a week, bottle each of the beers with priming sugar.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails4">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox4"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story4"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story4">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>					
						<div class="recipeBox" id="recipeBox4">
							<div class="batchSize">
								<strong>Batch Size:</strong> 3 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>2-Row</td>
										<td>4 lb.</td>
										<td>68%</td>
									</tr>
									<tr>
										<td>Munich 20L</td>
										<td>1 lb.</td>
										<td>17%</td>
									</tr>
									<tr>
										<td>Caramel 60L</td>
										<td>8 oz.</td>
										<td>8%</td>
									</tr>
									<tr>
										<td>Chocolate Malt</td>
										<td>6 oz.</td>
										<td>6%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Fuggles</td>
										<td>0.5 oz</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Fuggles</td>
										<td>0.5 oz</td>
										<td>30 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>0.5 oz</td>
										<td>5 mins.</td>
										<td>Boil</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>British Ale 1098</td>
										<td>Wyeast</td>
										<td>Liquid</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Cocoa Powder</td>
										<td>1 tablespoon</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cocoa Nibs</td>
										<td>5 oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Canned Sour Cherries</td>
										<td>32 fl. oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Dried Crushed Chipotle Chili</td>
										<td>3 oz.</td>
										<td>Secondary</td>
									</tr>
									<tr>
										<td>Well Vodka</td>
										<td>Very little</td>
										<td>Soaking Additions</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.</li>
									<li>While mashing, heat 3 gallons of water to 170&deg; for sparging.</li>
									<li>Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Fuggles Hops</td>
												<td>0.5 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Fuggles Hops</td>
												<td>0.5 oz.</td>
												<td>30 mins.</td>
											</tr>
											<tr>
												<td>Cascade Hops</td>
												<td>0.5 oz.</td>
												<td>5 mins.</td>
											</tr>
											<tr>
												<td>Unsweetened Cocoa Powder</td>
												<td>1 tablespoon</td>
												<td>5 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for 5 days in the primary fermenter</li>
									<li>Three days after your brew day, get two shot glasses or similar containers with little witdth. In one glass add 5 oz. of cocoa nibs. In the other glass, add 3 oz. of Dried Crushed Chipotle Chilis. Cover each of the ingredients with just enough well vodka to cover them. Cover the glasses with plastic wrap and let sit until reracking.</li>
									<li>Just before reracking, blend two cans (32 fl. oz.) of sour cherries until fairly smooth. Bring the blend to a boil for 10 minutes.</li>
									<li>After the beer has been fermenting for 5 days, rerack the beer into three separate secondary fermenters. Split the fermented beer evenly among the fermenters.</li>
									<li>Split the cocoa nibs into three equal parts. Split the cherries into two equal parts. Add one part of the cocoa nibs (including the vokda) to each of the fermenters. Add oine part of the cherries to two of the fermenters. Add the chili pepper (including the vodka) to one of the fermenters with cocoa nibs and cherries.</li>
									<li>After a week, bottle each of the beers with priming sugar.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails5">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox5"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story5"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story5">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox5">
							<div class="batchSize">
								<strong>Batch Size:</strong> 3 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>2-Row</td>
										<td>5 lbs.</td>
										<td>76%</td>
									</tr>
									<tr>
										<td>Rye</td>
										<td>1 lb.</td>
										<td>15%</td>
									</tr>
									<tr>
										<td>Caramel 40L</td>
										<td>8 oz.</td>
										<td>7%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Columbus</td>
										<td>.25 oz.</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Columbus</td>
										<td>.25 oz.</td>
										<td>30 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Amarillo</td>
										<td>.5 oz.</td>
										<td>3 days</td>
										<td>Dry Hop</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>American Ale WLP060</td>
										<td>White Labs</td>
										<td>Liquid</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.</li>
									<li>While mashing, heat 3 gallons of water to 170&deg; for sparging.</li>
									<li>Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Columbus Hops</td>
												<td>0.25 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Columbus Hops</td>
												<td>0.25 oz.</td>
												<td>30 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.</li>
									<li>After fermenting for 3 days, add the 0.5 oz. of Amarillo hops to the fermenter.</li>
									<li>After fermenting for a week total, bottle beer with priming sugar.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails6">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox6"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story6"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story6">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox6">
							<div class="batchSize">
								<strong>Batch Size:</strong> 2 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>Grains</td>
										<td>Some</td>
										<td>100%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Hops</td>
										<td>Some</td>
										<td>Yes</td>
										<td>Hopping</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>Ale Yeast</td>
										<td>Yes</td>
										<td>Cellular</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Tomatoes</td>
										<td>Lots</td>
										<td>Flavor</td>
									</tr>
									<tr>
										<td>Black Pepper</td>
										<td>Too Much</td>
										<td>Overpowering</td>
									</tr>
									<tr>
										<td>Prepared Horseradish</td>
										<td>Some</td>
										<td>Not Sure</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps (New Time Saving Steps!)</h1>
								<ol>
									<li>Buy all ingredients</li>
									<li>Place directly in toilet</li>
									<li>Flush</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="beerDetails" id="beerDetails7">
						<ul class="tabs">
							<li><a class="recipeTab" href="#recipeBox7"><div>Recipe</div></a></li>
							<li><a class="storyTab" href="#story7"><div>The Story</div></a></li>
						</ul>
						<div class="story" id="story7">
							This is a story about a beer I made.
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
							<p>This is a story about a beer I made.</p>
						</div>
						<div class="recipeBox" id="recipeBox7">
							<div class="batchSize">
								<strong>Batch Size:</strong> 5.5 gallons
							</div>
							<div class="recipeComponent fermentables">
								<h1>Fermentables</h1>
								<table>
									<tr>
										<th class="fermentable-table">Fermentable</th>
										<th colspan="2">Amount</th>
									</tr>
									<tr>
										<td>2-Row</td>
										<td>11 lbs.</td>
										<td>84%</td>
									</tr>
									<tr>
										<td>Caramel 40L</td>
										<td>1 lb.</td>
										<td>7%</td>
									</tr>
									<tr>
										<td>Carapils</td>
										<td>8 oz.</td>
										<td>3%</td>
									</tr>
									<tr>
										<td>Victory</td>
										<td>8 oz.</td>
										<td>3%</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent hops">
								<h1>Hops</h1>
								<table>
									<tr>
										<th class="hop-table">Hop</th>
										<th >Amount</th>
										<th >Time</th>
										<th >Use</th>
									</tr>
									<tr>
										<td>Simcoe</td>
										<td>1 oz.</td>
										<td>60 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>0.5 oz</td>
										<td>30 mins.</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Amarillo</td>
										<td>0.4 oz.</td>
										<td>5 min</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>0.4 oz.</td>
										<td>5 min</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Simcoe</td>
										<td>0.4 oz.</td>
										<td>5 min</td>
										<td>Boil</td>
									</tr>
									<tr>
										<td>Amarillo</td>
										<td>0.4 oz.</td>
										<td>7 days</td>
										<td>Dry Hop</td>
									</tr>
									<tr>
										<td>Cascade</td>
										<td>0.4 oz.</td>
										<td>7 days</td>
										<td>Dry Hop</td>
									</tr>
									<tr>
										<td>Simcoe</td>
										<td>0.4 oz.</td>
										<td>7 days</td>
										<td>Dry Hop</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent yeast">
								<h1>Yeast</h1>
								<table>
									<tr>
										<th class="yeast-name-table">Name</th>
										<th>Company</th>
										<th>Type</th>
									</tr>
									<tr>
										<td>California Ale Yeast WLP001</td>
										<td>White Labs</td>
										<td>Liquid</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent extras">
								<h1>Extras</h1>
								<table>
									<tr>
										<th class="extras-name-table">Name</th>
										<th>Amount</th>
										<th>Use</th>
									</tr>
									<tr>
										<td>Grapefruit Zest</td>
										<td>1 fruit</td>
										<td>Boil</td>
									</tr>
								</table>
							</div>
							<div class="recipeComponent brewingSteps">
								<h1>Brewing Steps</h1>
								<ol>
									<li>Using a mash tun, mash all grains with 4.5 gallons of water for 60 minutes at 154&deg;.</li>
									<li>While Mashing, heat 4.5 gallons of sparge water to 170&deg;.</li>
									<li>Vorlauf until wort runs fairly clear of debris. Empty runnings into kettle.</li>
									<li>Add all sparge water to the mash tun and mix the grain. Vorlauf immediately until wort runs fairly clear of debris. Empty runnings into kettle.</li>
									<li>
										Follow the Boil Schedule:
										<table>
											<tr>
												<th  class="boil-ingredient-table">Ingredient</th>
												<th >Amount</th>
												<th >Time</th>
											</tr>
											<tr>
												<td>Simcoe Hops</td>
												<td>1 oz.</td>
												<td>60 mins.</td>
											</tr>
											<tr>
												<td>Cascade Hops</td>
												<td>0.5 oz.</td>
												<td>30 mins.</td>
											</tr>
											<tr>
												<td>Amarillo Hops</td>
												<td>0.4 oz.</td>
												<td>5 mins.</td>
											</tr>
											<tr>
												<td>Cascade Hops</td>
												<td>0.4 oz.</td>
												<td>5 mins.</td>
											</tr>
											<tr>
												<td>Simcoe Hops</td>
												<td>0.4 oz.</td>
												<td>5 mins.</td>
											</tr>
											<tr>
												<td>Grapefruit Zest</td>
												<td>1 fruit</td>
												<td>5 mins.</td>
											</tr>
										</table>
									</li>
									<li>Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.</li>
									<li>After fermenting for 7 days, add 0.4 oz. of Amarillo hops, 0.4 oz. of Cascade hops, and 0.4 oz. of Simcoe hops to the fermenter.</li>
									<li>After fermenting for two weeks total, keg beer or bottle beer with priming sugar.</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include "./php/footer.php" ?>
		
	</body>
</html>