<?php include './php/db_connect.php'; ?>

<?php
	$query = "SELECT title, description, DATE_FORMAT(posted_date, '%M %d, %Y, %l:%i %p') AS posted_date, DATE_FORMAT(posted_date, '%y-%m-%d-%H:%i') AS url_date, thumb_image ".
		"FROM blog_post ".
		"ORDER BY posted_date DESC ".
		"LIMIT 10";

	$rslt = $mysqli->query($query);
	
	$blogPosts = array();
	
	while($r = $rslt->fetch_object()) {
		$blogPosts[] = array($r->title, $r->description, $r->posted_date, $r->thumb_image, $r->url_date);
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="http://www.damnfinebrew.com/styles.css">
		<meta name="description" content="Home of Damnfine Brewing, the creation of a homebrew enthusiast, showcasing the beer recipes, label design, and passion behind the craft." />
		<meta charset="UTF-8">
		<?php include './php/set_highlight_color.php'; ?>
		<style type="text/css">
			h1.blog-list-title a:hover {color: <?php echo $highlightColor ?>}
		</style>
	</head>
	
	<body>
	
		<div id="background"></div>
	
		<?php include "./php/header.php"; ?>
		
		<div id="page">
		
			<?php include "./php/sidebar.php"?>
			
			<div id="content" class="highlighted-color">
			
				<div id="inner-content">
					<h1 id="damnfine-blog">Damnfine Blog</h1>
					
					<div class="blog-divider"></div>
						<?php 
							for($i = 0; $i < count($rows); $i++) {
							
								if($i > 0) {
									echo "<div class=\"blog-list-divider\"></div>";
								}
							
								echo '<div class="blog-list-item">'.
										'<img class="blog-list-image" src="http://www.damnfinebrew.com/images/blog/' . $blogPosts[$i][3] . '" alt="">'.
										'<h1 class="blog-list-title"><a href="http://www.damnfinebrew.com/blog/' . $blogPosts[$i][4] . '">' . $blogPosts[$i][0] . '</a></h1>'.
										'<h2 class="blog-list-description">' . $blogPosts[$i][1] . '</h2>'.
										'<p class="blog-list-date">Posted: ' . $blogPosts[$i][2] . '</p>'.
									'</div>';
								
							}
						?>
				</div>
				
				<?php include "./php/footer.php" ?>
				
			</div>
		</div>
	</body>
</html>