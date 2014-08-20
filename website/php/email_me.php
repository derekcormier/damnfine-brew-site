<?php 
	$subject = $_POST["subject"];
	$emailAddress = $_POST["email"];
	$body = wordwrap($_POST["body"]);
	$body = "<html>" .
				"<body>".
					"<p>Message from Damnfine User:</p>".
					"<p>" . $emailAddress . "</p>".
					"<p>" . $body . "</p>".
				"</body>".
			"</html>";
	
	$headers = "From: " . $emailAddress . "\r\n";
	$headers .= "Reply-To: ". $emailAddress . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail("derek@derekcormier.com", $subject, $body, $headers);
	
	echo "Thanks!";
?>