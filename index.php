
<?php
session_start();
$user = '123';
$pass = '123';
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.1 401 Unauthorized');
    echo 'Текст, отправляемый в том случае,
    если пользователь нажал кнопку Cancel';
    exit;
} else {
	if (($_SERVER['PHP_AUTH_USER'] == $user) && ($_SERVER['PHP_AUTH_PW']) == $pass) {
    		$_SESSION['name'] = $_SERVER['PHP_AUTH_USER'];
    		$_SESSION['pw'] = $_SERVER['PHP_AUTH_PW'];
    		header('Location: /netology/test/list.php ');
    exit;
	} elseif (isset($_SERVER['PHP_AUTH_USER'])) {
    		$_SESSION['name'] = $_SERVER['PHP_AUTH_USER'];    		
    		header('Location: ./list.php ');
    exit;

	} else {	
    echo "<p>ну хоть имя бы написал... а впрочем иди нахрен</p>";
     exit;
	}
    setcookie($_SERVER['PHP_AUTH_USER']);
}
?>
