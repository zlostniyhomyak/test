<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список тестов</title>
</head>
<body>
	<?php 
	$file = file_get_contents('data.json'); 
	$taskList = json_decode($file,TRUE); 
	var_dump($taskList);
	 ?>
	 <h1>Список тестов:</h1>
		<form action="test.php"></form>
	 	<?php 
	 		foreach ($taskList as $key => $value) {
	 			# code...
	 		print_r ('<a href="test.php?'.$value.'">'.$value.'</a><br>');
	 		}
	 	?>
</body>
</html>