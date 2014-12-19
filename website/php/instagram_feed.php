<?php
  function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch); 
    return $result;
  }
  $result = fetchData("https://api.instagram.com/v1/users/1479402156/media/recent/?access_token=1479402156.ed3786f.b1eb075be8704a54857734c128c189c5&count=8");
  $result = json_decode($result, JSON_UNESCAPED_SLASHES);
?>

<div id="instagramfeed">
	<a href="http://instagram.com/damnfinebrew/"><img id="instagramicon" src="http://www.damnfinebrew.com/images/instagramicon.png"/></a>
	<?php
		foreach ($result['data'] as $post) {
			echo '<a href="' . $post['link'] . '"><img class="instagramphoto" src="'. $post['images']['low_resolution']['url'] . '"/></a>';
		}
	?>
</div>