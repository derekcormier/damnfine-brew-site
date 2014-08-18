<?php include '../php/db_connect.php'; ?>

<?php
	$query = "SELECT title, description, DATE_FORMAT(posted_date, '%m-%d-%y') AS posted_date, content ".
		"FROM blog_post ".
		"WHERE posted_date BETWEEN CAST('" . $_GET["id"] . ":00' AS DATETIME) AND CAST('" . $_GET["id"] . ":59' AS DATETIME) ".
		"LIMIT 1";

	$rslt = $mysqli->query($query);
	
	$r = $rslt->fetch_object();
	$blogContent = array($r->title, $r->description, $r->posted_date, $r->content);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="http://www.damnfinebrew.com/styles.css">
		<meta name="description" content="Home of Damnfine Brewing, the creation of a homebrew enthusiast, showcasing the beer recipes, label design, and passion behind the craft." />
		<meta charset="UTF-8">
	</head>
	
	<body>
	
		<div id="background"></div>
	
		<?php include "../php/header.php"; ?>
		
		<div id="page">
		
			<?php include "../php/sidebar.php"?>
			
			<div id="content">
			
				<div id="inner-content" />
				
					<h1 id="damnfine-blog">Damnfine Blog</h1>
					
					<div class="blog-divider"></div>
					
					<?php 
						echo '<h1 class="blog-title">' . $blogContent[0] . '</h1>';
						echo '<h2 class="blog-description">' . $blogContent[1] . '</h2>';
						echo '<p>' . $blogContent[3] . '</p>';
					?>
					
				</div>
				
				<?php include "../php/footer.php" ?>
				
			</div>
		</div>
	</body>
</html>