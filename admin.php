<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
	<form action="admin.php" enctype="multipart/form-data" method="POST">
		<label for="filename">
			Желаемое имя файла
			<input id="filename" type="text" name="filename" required>
		</label>
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
		move_uploaded_file($_FILES['ourfile']['tmp_name'], ('tests/'.$_POST['filename'].'.json'));
		$file = file_get_contents('data.json');
		$taskList = json_decode($file,TRUE); 
		$taskList[] = $_POST['filename'];
		file_put_contents('data.json',json_encode($taskList));
		echo 'огонь';
	}

	else 
		var_dump($_FILES);

 ?>
</body>
</html>

