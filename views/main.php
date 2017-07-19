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
				echo '<a class="btn btn-small btn-warning" href="?page='.$link->id.'">'.$link->title.'</a>&nbsp';
			}
		?>
		</div>
		<div class="row">
			<div class="col-md-9"><?=$page->body; ?></div>
			<div calss="col-md-3">
				<?php
			foreach ($banners as $banner) {
				if ($banner->img != Null) {
					echo '<a href="'.$banner->link.'"><img alt="images/'.$banner->title.'" src="'.$banner->img'"</a><br />';
				} else {
					echo '<a href="'.$banner->link.'">'.$banner->title.'</a><br />';
				}
				
			}
		?>

			</div>
			
		</div>
	</div>

</body>
</html>