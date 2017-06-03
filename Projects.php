<!DOCTYPE html>
<html>
	<head>
		<title>Jake Williams Development Projects</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Blog.php">Blog</a></li>
			<li><a href="Projects.php">Projects</a></li>
			<li><a href="Profile.php">Profile</a></li>
		</ul>
	</head>
	<body>
		<div>
			<?php
				$str = file_get_contents('json/Projects.json');
				$obj = json_decode($str, true);
				$start = 0;
				$end = count($obj['projects']);
				for ($i = $start; $i < $end; $i++) {
			?>
					<div class="project">
						<h2><?php print $obj['projects'][$i]['title']; ?></h2>
						<img src="<?php print $obj['projects'][$i]['image']; ?>" height="200" width="200">
						<p><?php print $obj['projects'][$i]['text']; ?></p>
					</div>
			<?php
					echo ((($i + 1) % 3) == 0);
					if ((($i + 1) % 3) == 0) {
			?>
						<br>
			<?php	}
				}
			?>
		</div>
	</body>
	<footer>
		<p>	Phone: 07882887939<br/>
			Email: jakefwilliams1994@gmail.com<br/>
			GitHub: jakeWilliams1994</p>
	</footer>
</html>
