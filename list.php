<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список тестов</title>
</head>
<body>
	<?php 
	$dir = 'tests';
	$filees = scandir($dir);
	 ?>
	 <h1>Список тестов:</h1>
		<form action="test.php"></form>
	 	<?php 
	 		foreach ($filees as $key => $value) {
	 		if (($key!=0)&&($key!=1)) {	 		
	 			print_r ('<a href="test.php?'.$value.'">'.substr($value, 0, -5).'</a><br>');
	 			}
	 		}
	 	?>
</body>
</html>
