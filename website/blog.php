<?php include './php/db_connect.php'; ?>

<?php
	$query = "SELECT title, description, DATE_FORMAT(posted_date, '%M %d, %Y, %l:%i %p') AS posted_date, thumb_image, content ".
		"FROM blog_post ".
		"WHERE posted_date BETWEEN CAST('" . $_GET["id"] . ":00' AS DATETIME) AND CAST('" . $_GET["id"] . ":59' AS DATETIME) ".
		"LIMIT 1";

	$rslt = $mysqli->query($query);
	
	$r = $rslt->fetch_object();
	$blogContent = array($r->title, $r->description, $r->posted_date, $r->thumb_image, $r->content);
	
	$viewsQuery = "UPDATE blog_post SET visits=visits+1 ".
			"WHERE title='" . $blogContent[0] . "'";
	
	$mysqli->query($viewsQuery)
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="http://www.damnfinebrew.com/styles.css">
		<meta name="description" content="<?php echo $description ?>" />
		<meta charset="UTF-8">
	</head>
	
	<body>
	
		<div id="background"></div>
	
		<?php include "./php/header.php"; ?>
		
		<div id="page">
		
			<?php include "./php/sidebar.php"?>
			
			<div id="content">
			
				<div id="inner-content" >
				
					<h1 id="damnfine-blog">Damnfine Blog</h1>
					
					<div class="blog-divider"></div>
					
					<?php 
						echo '<h1 class="blog-title">' . $blogContent[0] . '</h1>';
						echo '<h2 class="blog-description">' . $blogContent[1] . '</h2>';
					?>
					
					<div class="blog-divider-2"></div>
					
					<?php
						echo '<h3 class="blog-date">Posted: '. $blogContent[2] . '</h3>';
						echo ''
					?>
					
					<div class="blog-divider-2"></div>
					
					<?php
						//if($blogContent[3] == '') {
							echo '<img class="blog-image" src="http://www.damnfinebrew.com/images/blog/' . $blogContent[3] . '" alt="Blog Image">';
						//}
						echo $blogContent[4];
					?>
					
				</div>
				
				<?php include "./php/footer.php" ?>
				
			</div>
		</div>
	</body>
</html>