<?php require_once('counter.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<title>Счетчик просмотра изображения</title>
</head>
<body class="body">
	<main class="main">
		<section>
			<div>
				<h1 class="counterTitle">Счетчик просмотра изображения</h1>
			</div>
			<div>
				<img class="image" src="image.php"/>
			</div>
			<div>
				<p class="counterResult">
					<?= ($counterResult = counter($path)) ? "Число просмотров составляет: " . $counterResult : ""; ?></p>
			</div>
		</section>
	</main>
</body>
</html>