<?php 

	$redirect = '';

	if (isset($_SERVER['REDIRECT_URL'])){
		$redirect_ = explode('/', $_SERVER['REDIRECT_URL']);
		foreach ($redirect_ as $key => $value) {
			if ($value !== ''){
				$redirect .= '/'.$value;
			}
		}
	}

	if ($redirect !== ''){
		if (file_exists('pages'.$redirect.'.php')){
			include 'pages'.$redirect.'.php';
		} else if (file_exists('pages'.$redirect.'/index.php')){
			include 'pages'.$redirect.'/index.php';
		} else {
			include 'pages/error404.php';
		}
	} else {
		include 'pages/home.php';
	}
	
?>