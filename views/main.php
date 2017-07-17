<!DOCTYPE html>
<html>
<head>
	<title>Portfolio - <?= $page->title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<div class= "container">
		<div class= "row">
			<h1><?=$page->title; ?></h1>
		</div>
		<div class="row">
		<?php
			foreach ($menu as $link) {
				echo '<a class="btn btn-small btn-warning" href="?page='.$link->id.'">'.$link->title.'</a>';
			}
		?>
		</div>
		<div class="row">
			<p><?=$page->body; ?></p>
		</div>
	</div>

</body>
</html>