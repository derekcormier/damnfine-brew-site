
<?php include 'php/db_connect.php'; ?>

<div id="sidebar">
	<ul>
		<li><a href="#"><div><span>Beers</span></div></a></li>
		<li><a href="#"><div><span>About</span></div></a></li>
		<li><a href="#"><div><span>Contact</span></div></a></li>
		<li><a href="#"><div><span>Blog</span></div></a></li>
	</ul>
	<div id="recent-posts">
		<div id="recent-posts-header">Recent Posts</div>
		<?php 
			$query = "SELECT title, DATE_FORMAT(posted_date, '%m-%d-%y %H:%i') AS posted_date, description ".
				"FROM blog_post ".
				"ORDER BY posted_date DESC ".
				"LIMIT 3";
		
			$rslt = $mysqli->query($query);
			
			$rows = array();
			while ($r = $rslt->fetch_object()) {
				$rows[] = array($r->title, $r->description, $r->posted_date);
			}
			
			for($i = 0; $i < count($rows); $i++) {

				if($i > 0) {
					echo "<div class=\"blog-preview-divider\"></div>";
				}

				echo "<div class=\"blog-preview\">".
						"<h1>{$rows[$i][0]}</h1>".
					 	"<p>{$rows[$i][1]}</p>".
						"<span>Posted: {$rows[$i][2]}</span>".
					"</div>";
			}
		?>
	</div>
</div>