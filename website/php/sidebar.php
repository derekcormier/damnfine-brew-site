
<?php include 'php/db_connect.php'; ?>

<div id="sidebar">
	<ul>
		<li><a class="navigator" href="#"><div><span>Beers</span></div></a></li>
		<li><a class="navigator" href="#"><div><span>About</span></div></a></li>
		<li><a class="navigator" href="#"><div><span>Contact</span></div></a></li>
		<li><a class="navigator" href="#"><div><span>Blog</span></div></a></li>
	</ul>
	<div id="recent-posts">
		<div id="recent-posts-header">Recent Posts</div>
		<?php 
			$query = "SELECT title, DATE_FORMAT(posted_date, '%m-%d-%y') AS posted_date, DATE_FORMAT(posted_date, '%m-%d-%y-%H:%i') AS url_date, description ".
				"FROM blog_post ".
				"ORDER BY posted_date DESC ".
				"LIMIT 3";
		
			$rslt = $mysqli->query($query);
			
			$rows = array();
			while ($r = $rslt->fetch_object()) {
				$rows[] = array($r->url_date, $r->title, $r->description, $r->posted_date);
			}
			
			for($i = 0; $i < count($rows); $i++) {

				if($i > 0) {
					echo "<div class=\"blog-preview-divider\"></div>";
				}

				echo '<a href="http://www.damnfinebrew.com/blog/' . $rows[$i][0] . '">'.
						'<div class="blog-preview">'.
							'<h1>' . $rows[$i][1] . '</h1>'.
					 		'<p>' . $rows[$i][2] . '</p>'.
							'<span>Posted: ' . $rows[$i][3] . '</span>'.
						'</div>'.
					'</a>';
			}
		?>
	</div>
</div>