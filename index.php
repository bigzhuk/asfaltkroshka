<?php include('engine/ajax.php'); ?>	
<!DOCTYPE html>
<html lang="ru">
<head>
	<script>console.groupCollapsed('Загрузка');</script>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<meta charset="UTF-8">
	<title>АсфальтСтройДор</title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script src="js/script.js"></script>

	<link rel="stylesheet/less" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/style/style.less?q='.rand(1, 9999);?>">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
	<script src="js/script.js"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic,300italic,300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
	<?php
	// немного говнокода:(, подключаем стили и скрипты галлереи только для  страницы галлереи
		if($_SERVER['REQUEST_URI'] == '/photo') {
			?>
			<link rel="stylesheet" href="style/gallery_style.css" type="text/css" media="screen"/>
			<!--<script src="js/cufon-yui.js" type="text/javascript"></script>-->
			<!--<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>-->
			?>
			<script type="text/javascript">
				Cufon.replace('h1', {textShadow: '1px 1px #feec87'})('.footer');
			</script>
			<?php
		}
	?>
</head>
<body>

	<div id="background"></div>
	<div id="wrapper">
		<div id="mask" onclick="hidePopup();"></div>
		<?php include('static/header.php'); ?>	
		<div id="main_page_content">
			<?php include('engine/redirect.php'); ?>
		</div>
		<div id="wrapper_push"></div>
	</div>

	<?php include('static/footer.php'); ?>	

	

</body>
</html>

<script>
	console.groupEnd();
</script>

