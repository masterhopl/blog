<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
</head>
<body>
	<h1 class="maintext">БЛОГ</h1>
	<hr>
<?php
$database = [
		[
		'title' => 'Статья 1', 
		'short' => 'Привет ребята сегодня я расскажу как заварить идеальный доширак', 
		'long' => 'gov'
		],
		[
		'title' => 'Статья 2',
		'short' => 'апывльтпыволт',
		'long' => 'godasdav'

		],
		[
		'title' => 'Статья 3',
		'short' => 'рррррррр',
		'long' => 'goffffffffffv'
		]
	];
?>

<?php
	for ($i=0; $i < count($database); $i++) { 
		echo '<h3>' . $database[$i]['title'] . '</h3>';
		echo '<p>' . $database[$i]['short'] . '</p>';
		echo '<a href="page.php?index=' . $i . ' ">Далее</a>';
	}

?>

</body>
</html>