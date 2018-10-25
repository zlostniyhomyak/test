<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
	<form action="admin.php" enctype="multipart/form-data" method="POST">
		<br>
		<label for="ourfile">
			Выберете файл
			<input id="ourfile" type="file" name="ourfile">
		</label>
		<br>
		<input type="submit" value="Отправить">
	</form>
<?php 
	
	if (!empty($_FILES) && array_key_exists('ourfile', $_FILES)) {
		$filename = $_FILES['ourfile']['name'];
		move_uploaded_file($_FILES['ourfile']['tmp_name'], ('tests/'.$filename.'.json'));
		$file = file_get_contents('data.json');
		$taskList = json_decode($file,TRUE); 
		$taskList[] = $filename;
		file_put_contents('data.json',json_encode($taskList));
		echo 'огонь';
	}

	else 
		var_dump($_FILES);

 ?>
</body>
</html>

