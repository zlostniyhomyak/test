<?php 
$test = $_GET;
var_dump($test);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>TEST</title>
 </head>
 <body>
 	<form action="test.php" method="POST">
  <?php 
    // $file1 = fopen('C:/wamp64/www/Netology/form/tests/123.json', 'r');
    $file = file_get_contents('tests/123.json'); 
    $taskList = json_decode($file,TRUE); 
    var_dump($taskList);
    
    $i = 0;
    foreach ($taskList as $key1 => $value1)  {  
      foreach ($value1 as $key => $value) 
      {              
        print_r('<legend>'.$key.'</legend>');
        foreach ($value as $key3 => $value3) {
        print_r('<label><input type="radio" name="q'.$i.'">'.$value3.'</label><br>');
      }
      print_r('<br><br>');
      $i++;
    }
   } ?>  
  <input type="submit" value="Отправить">  
</form>
 </body>
 </html>
 <?php 
  if (!empty($_POST)){
   var_dump($_POST);
  }
 ?>