<?php 
	include './php/db_connect.php';
	include './php/parsedown/Parsedown.php';
?>

<?php
	$query = "SELECT id, title, description, DATE_FORMAT(posted_date, '%M %d, %Y, %l:%i %p') AS posted_date, thumb_image, content ".
		"FROM blog_post ".
		"WHERE posted_date BETWEEN CAST('" . $_GET["id"] . ":00' AS DATETIME) AND CAST('" . $_GET["id"] . ":59' AS DATETIME) ".
		"LIMIT 1";

	$rslt = $mysqli->query($query);
	
	$r = $rslt->fetch_object();
	$blogContent = array($r->id, $r->title, $r->description, $r->posted_date, $r->thumb_image, $r->content);
	
	$viewsQuery = "UPDATE blog_post SET visits=visits+1 ".
			"WHERE title='" . $blogContent[1] . "'";
	
	$mysqli->query($viewsQuery)
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $blogContent[1]; ?> - Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="http://www.damnfinebrew.com/styles.css">
		<meta name="description" content="<?php echo $description; ?>" />
		<meta charset="UTF-8">
		<?php include './php/set_highlight_color.php'; ?>
		<script type="text/javascript">
			function checkCommentInput() {
				name = document.getElementById('user').value;
				fromEmail = document.getElementById('email').value;
				body = document.getElementById('comment-body').value;

				var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				
				if(name === "") {
					alert("Please enter a name to be displayed with your comment.");
				} else if (fromEmail === "" || !emailRegex.test(fromEmail)) {
					alert("Please enter a valid email for verification.");
				} else if (body === "") {
					alert("Please enter a message for your comment!");
				} else {
					document.getElementById("commentForm").submit();
				}
			}
		</script>
	</head>
	
	<body>
	
		<div id="background"></div>
	
		<?php include "./php/header.php"; ?>
		
		<div id="page">
		
			<?php include "./php/sidebar.php"; ?>
			
			<div id="content" class="highlighted-color">
			
				<div id="inner-content" >
					
					<div id="blog-content">
				
						<h1 id="damnfine-blog">Damnfine Blog</h1>
						
						<div class="blog-divider"></div>
						
						<?php 
							echo '<h1 class="blog-title">' . $blogContent[1] . '</h1>';
							echo '<h2 class="blog-description">' . $blogContent[2] . '</h2>';
						?>
						
						<div class="blog-divider-2"></div>
						
						<?php
							echo '<h3 class="blog-date">Posted: '. $blogContent[3] . '</h3>';
							echo ''
						?>
						
						<div class="blog-divider-2"></div>
						
						<?php
							$Parsedown = new Parsedown();
						
								echo '<img class="blog-image" src="http://www.damnfinebrew.com/images/blog/' . $blogContent[4] . '" alt="Blog Image">';
	
							echo $Parsedown->text($blogContent[5]);
						?>
					
					</div>
				</div>
				
				<div id="comments-box">
					<div id="comment-header">Comments</div>
					<div class="blog-comment-divider"></div>
					
					<?php 
						$rslt = $mysqli->query("SELECT name, comment, posted_date ".
							"FROM blog_comment ".
							"WHERE post_id=" . $blogContent[0]);
				
						$comments = array();
						while ($r = $rslt->fetch_object()) {
							$comments[] = array($r->name, $r->comment, $r->posted_date);
						}
						
						for($i = 0; $i < count($comments); $i++) {
							echo '<div class="comment">';
								echo '<h1 class="comment-user">' . $comments[$i][0] . '</h1>';
								echo '<p class="comment-text">' . $comments[$i][1] . '</p>';
								echo '<span class="comment-date">Posted: ' . $comments[$i][2] . '</span>';
							echo '</div>';
							echo '<div class="blog-comment-divider-2"></div>';
						}
					?>
					<div class="comment">
						<h1 class="comment-user">Your Comment:</h1>
						<form id="commentForm" method="post" action="../php/write_comment.php">
							<div class="comment-label">Name:</div>
							<input type="text" id="user" name="user">
							<br>
						
							<div class="comment-label">Email:</div>
							<input type="email" id="email" name="email">
							<br>
						
							<div class="comment-label">Comment:</div>
							<textarea class="comment-body" id="comment-body" name="comment-body"></textarea>
							<br>
							
							<input type="hidden" name="post-id" value="<?php echo $blogContent[0] ?>">
							<input type="hidden" name="blog-id" value="<?php echo $_GET["id"] ?>">
						
							<input type="button" value="Submit" onClick="checkCommentInput()"/>
						</form>
					</div>
				</div>
				
				<?php include "./php/footer.php"; ?>
				
			</div>
		</div>
	</body>
</html>