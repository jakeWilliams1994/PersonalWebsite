<!DOCTYPE html>
<html>
	<head>
		<title>Jake Williams Development Blog</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Blog.php">Blog</a></li>
			<li><a href="Projects.php">Projects</a></li>
			<li><a href="Profile.php">Profile</a></li>
		</ul>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/Blog.js"></script>
	</head>
	<body>
		<div id="blogs">
			<?php
				$str = file_get_contents('json/BlogPosts.json');
				$obj = json_decode($str, true);
				$start = 0;
				$end = ((count($obj['posts']) > 5) ? 5 : count($obj['posts']));
				for ($i = $start; $i < $end; $i++) {
			?>
					<div class="blogpost">
						<h2><?php print $obj['posts'][$i]['title']; ?></h2>
						<img src="<?php print $obj['posts'][$i]['image']; ?>" height="200" width="200">
						<p><?php print $obj['posts'][$i]['text']; ?></p>
					</div>
			<?php
				}
			?>
		<div>
	</body>
	<footer>
		<p>	Phone: 07882887939<br/>
			Email: jakefwilliams1994@gmail.com<br/>
			GitHub: jakeWilliams1994</p>
	</footer>
</html>
