<?php 
	include './php/db_connect.php';
	include './php/parsedown/Parsedown.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="http://www.damnfinebrew.com/styles.css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		<script type="text/javascript" src="http://www.damnfinebrew.com/js/home.js"></script>
		<script type="text/javascript" src="http://www.damnfinebrew.com/js/slider.js"></script>
		<script type="text/javascript" src="http://www.damnfinebrew.com/js/meter.js"></script>
		<meta name="description" content="Home of Damnfine Brewing, the creation of a homebrew enthusiast, showcasing the beer recipes, label design, and passion behind the craft." />
		<meta charset="UTF-8">
	</head>
	
	<body>
		<div id="curtain"></div>
		<div id="background"></div>
	
		<div id="magnified">
			<div id="magnify-back"></div>
			<div id="magnify-window">
				<img id="zoomed-label" src="http://www.damnfinebrew.com/images/mcgbrew.svg" alt="Zoomed in label">
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
			
			<div id="content" class="highlighted_color">
				<div id="label-slider">
					<a href="javascript:void(0);" id="slider-previous">&lt;&lt;</a>
					<a href="javascript:void(0);" id="slider-next">&gt;&gt;</a>
					<a href="javascript:void(0);" id="magnify">
						<div>
							<img src="http://www.damnfinebrew.com/images/magglass.svg" alt="Label Magnifier">
						</div>
					</a>
					<ul>
						<?php 
							$rslt = $mysqli->query("SELECT id, name, label_image FROM beers ORDER BY beer_id DESC");
								
							$rows = array();
							while ($r = $rslt->fetch_object()) {
								$rows[] = array($r->label_image, $r->name);
							}
							
							for($i = 0; $i < count($rows); $i++) {
								echo '<li><img class="slide" src="http://www.damnfinebrew.com/images/' . $rows[$i][0] . '" '.
									'alt="The beer label for ' . $rows[$i][1] . '"/></li>';
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
						<img id="glass-logo" src="http://www.damnfinebrew.com/images/df.svg" alt="Damnfine initials on beer glass">
					</div>
					
					<?php include './php/beer_info_tabs.php'?>
					
				</div>
				
				<?php include "./php/footer.php" ?>
				
			</div>
		</div>
	</body>
</html>