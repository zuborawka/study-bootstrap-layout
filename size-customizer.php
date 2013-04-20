<?php

$args = array(
	'width' => '1920',
	'height' => '786',
);

if (isset($_GET)) {
	$args = array_merge($args, $_GET);
}

$width = $args['width'];
$height = $args['height'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrap">
		<div style="width:<?php echo $width; ?>px; height: <?php echo $height; ?>px; background: #2766a9;">
			<h1 style="color: white; text-align: center;"><?php echo $width; ?> x <?php echo $height; ?></h1>
		<div>
	</div>
</body>
</html>