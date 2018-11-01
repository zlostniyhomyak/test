<?php 

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список тестов</title>
</head>
<body>
	<?php 

session_start();
	$dir = 'tests';
	$filees = scandir($dir);
	 ?>
	 <h1>Список тестов:</h1>
	 <h2><?php echo "Привет {$_SESSION['name']}"; ?></h2>
		<form action="test.php"></form>
	 	<?php 
	 		foreach ($filees as $key => $value) {
	 		if (($key!=0)&&($key!=1)) {	 	
	 			$j = substr($value, 0, -5);	
	 			echo '<a href="test.php?', $value,'">', $j,'</a><br>';
	 			}
	 		}
	 		if (isset($_SESSION['pw'])){
	 		echo '<a href="admin.php"> Добавить тест</a><br>';}
	 		?>
</body>
</html>
