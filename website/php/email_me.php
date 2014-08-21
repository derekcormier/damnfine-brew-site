<?php
	$emailRegex = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
	
	if($_POST['subject'] === '') {
		header('Location: http://www.damnfinebrew.com/contact?status=subjecterror');
		return false;
	}
	
	if($_POST['email'] === '' || !preg_match($emailRegex, $_POST['email'])) {
		header('Location: http://www.damnfinebrew.com/contact?status=emailerror');
		return false;
	}
	
	if($_POST['body'] === '') {
		header('Location: http://www.damnfinebrew.com/contact?status=bodyerror');
		return false;
	}
	
	$subject = htmlentities($_POST["subject"]);
	$emailAddress = $_POST["email"];
	$body = wordwrap(htmlentities($_POST["body"]));
	$body = "<html>" .
				"<body>".
					"<p>Message from Damnfine User:</p>".
					"<p>" . $emailAddress . "</p>".
					"<p>" . $body . "</p>".
				"</body>".
			"</html>";
	
	$headers = "From: noreply@damnfinebrew.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail("derek@derekcormier.com", $subject, $body, $headers);
	
	header('Location: http://www.damnfinebrew.com/contact?status=success');
?>