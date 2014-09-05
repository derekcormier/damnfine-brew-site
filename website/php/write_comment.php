<?php
	include_once './php/db_connect.php';

	$emailRegex = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
	
	if($_POST['user'] === '') {
		header('Location: http://www.damnfinebrew.com/blog?id='.$_POST['blog-id']);
		return false;
	}
	
	if($_POST['email'] === '' || !preg_match($emailRegex, $_POST['email'])) {
		header('Location: http://www.damnfinebrew.com/blog?id='.$_POST['blog-id']);
		return false;
	}
	
	if($_POST['comment-body'] === '') {
		header('Location: http://www.damnfinebrew.com/blog?id='.$_POST['blog-id']);
		return false;
	}
	
	$user = htmlentities($_POST["user"]);
	$emailAddress = $_POST["email"];
	$body = htmlentities($_POST["comment-body"]);
	
	$query = "INSERT INTO blog_comment (post_id, posted_date, name, email, comment, reply_level, approved, helpful_count, unhelpful_count) ".
			"VALUES (" . $_POST["post-id"] . ", NOW(), '" . $user . "', '" . $emailAddress . "', '" . $body . "', 1, 1, 0, 0)";
	
	$mysqli->query($query);
	
	header('Location: http://www.damnfinebrew.com/blog?id='.$_POST['blog-id']);
?>