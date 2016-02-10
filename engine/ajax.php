<?php 
	# Подключаем конфигурацию
	include('engine/config.php');

	# Перенаправление на пользовательскую функцию
	if (isset($_POST['action']) && $_POST['action']!==''){
		$action = $_POST['action'];
		$result = $action();
		echo(json_encode($result));
	}

?>