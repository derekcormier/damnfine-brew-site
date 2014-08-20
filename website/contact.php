<?php include './php/db_connect.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Damnfine Brewing</title>
		<link rel="stylesheet" type="text/css" href="http://www.damnfinebrew.com/styles.css">
		<meta name="description" content="Home of Damnfine Brewing, the creation of a homebrew enthusiast, showcasing the beer recipes, label design, and passion behind the craft." />
		<meta charset="UTF-8">
		<script type="text/javascript">
			function checkContactInput () {
				subject = document.getElementById('subject').value;
				fromEmail = document.getElementById('fromEmail').value;
				body = document.getElementById('body').value;

				if(subject === "") {
					alert("Please enter a subject for the message.");
				} else if (fromEmail === "") {
					alert("Please enter a valid email for response.");
				} else if (body === "") {
					alert("Please enter something for the body of the message.");
				} else {
					document.getElementById("contactForm").submit();
				}
			}
		</script>
	</head>
	
	<body>
	
		<div id="background"></div>
	
		<?php include "./php/header.php"; ?>
		
		<div id="page">
		
			<?php include "./php/sidebar.php"?>
			
			<div id="content">
			
				<div id="inner-content" >
					<h1>Contact Me</h1>
					<h2>Feel free to contact me with any questions, comments, or suggestions!</h2>
					<form id="contactForm" method="post" action="./php/email_me.php">
						<div class="contact-label">Subject:</div> 
						<input type="text" id="subject" name="subject">
						<br>
						
						<div class="contact-label">From email:</div>
						<input type="email" id="fromEmail" name="email">
						<br>
						
						<div class="contact-label">Body:</div>
						<textarea class="contact-body" id="body" name="body"></textarea>
						<br>
						
						<input type="button" value="Submit" onClick="checkContactInput()"/>
					</form>
				</div>
				
				<?php include "./php/footer.php" ?>
				
			</div>
		</div>
	</body>
</html>