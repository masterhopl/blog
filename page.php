<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>
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
		'long' => 'ovg'
		],
		[
		'title' => 'Статья 3',
		'short' => 'рррррррр',
		'long' => 'vog'
		]
					];
		?>
<?php
$fff = $_GET['index'];


 ?>
		<h3><?php echo $database[$fff]['title']; ?></h3>
		<p><?php echo $database[$fff]['long']; ?></p>
	</div>
</body>
</html>