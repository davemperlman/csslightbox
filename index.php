<?php  
$result = array();
$dir = '_img/';
$result = preg_grep('/^([^.])/', scandir($dir)); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lightbox With CSS</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" href="_css/main.css">
	</head>
	<body>
		<h1>Responsive and Dynamic Image Gallery & CSS Lightbox</h1>
		<section id="info">
			<h2>About</h2>
			<p>This project is a photo gallery that dynamically gathers and parses file names from a directory, populates the images, and then provides a pure CSS lightbox functionality.</p>
			<p>It also utilizes the 7-1 SASS architecture designed by Hugo Girdaudel.</p>
		</section>
		<section id="img-container">
			<?php $j = 0; foreach ($result as $key => $value): ?>
					<input type="checkbox" name="lightbox-activate" id="lightbox-activate-<?php echo $j; ?>">
					<label class="img-wrap-label" for="lightbox-activate-<?php echo $j; ?>">
						<img src="_img/<?php echo $value; ?>" alt="">
					</label>
					<label id="lightbox-container-<?php echo $j; ?>" for="lightbox-activate-<?php echo $j; ?>">
						<section id="lightbox">
							<img src="_img/<?php echo $value; ?>" alt="">
						</section>
					</label>
					<?php $j++; ?>
			<?php endforeach ?>
		</section>
	</body>
</html>