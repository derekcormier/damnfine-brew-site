<?php include './php/db_connect.php'; ?>

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
	
		<?php include "./php/header.php"; ?>
		
		<div id="page">
		
			<?php include "./php/sidebar.php"?>
			
			<div id="content">
			
				<div id="inner-content" />
					<h1>Contact Me</h1>
					<h2>Feel free to contact me with any questions, comments, or suggestions!</h2>
					<form method="post" action="./php/email_me.php">
						<div class="contact-label">Subject:</div> 
						<input type="text" name="subject">
						<br>
						
						<div class="contact-label">From email:</div>
						<input type="email" name="email">
						<br>
						
						<div class="contact-label">Body:</div>
						<textarea class="contact-body" columns="300" rows="6" name="body"></textarea>
						<br>
						
						<button type="submit" value="Submit">Send</button>
					</form>
				</div>
				
				<?php include "./php/footer.php" ?>
				
			</div>
		</div>
	</body>
</html>