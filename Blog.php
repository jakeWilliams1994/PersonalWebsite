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
				$str = file_get_contents('json/test.json');
				$obj = json_decode($str);
			?>
			<div class="blogpost">
				<h2><?php print $obj->{'title'}; ?></h2>
				<img src="<?php print $obj->{'image'}; ?>" alt="Placeholder" height="200" width="200">
				<p><?php print $obj->{'text'}; ?></p>
			</div>
			<div class="blogpost">
				<h2>header1</h2>
				<img src="placeholder.jpg" alt="Placeholder" height="200" width="200">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia lacus quis magna luctus condimentum. Nunc blandit rhoncus felis, laoreet egestas turpis rutrum nec. Etiam nec imperdiet nisl. Phasellus enim massa, convallis nec ex et, condimentum commodo nulla. Maecenas rhoncus sollicitudin consectetur. Integer euismod suscipit felis, a placerat est sollicitudin id. Etiam accumsan consequat erat id gravida.</p>
			</div>	
		<div>
	</body>
	<footer>
		<p>	Phone: 07882887939<br/>
			Email: jakefwilliams1994@gmail.com<br/>
			GitHub: jakeWilliams1994</p>
	</footer>
</html>
