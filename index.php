<?php
class App {
	public static  $pages = array(
		'/about' => 'О компании',
		'/contacts' => 'Контактная информация',
		'/price_list' => 'Цены',
		'/photo' => 'Галерея работ',
		'/tecknology' => 'Технология строительсва дорог',
		'/service/asfaltirovanie_dorog' => 'Асфальтирование дорог',
		'/service/asfaltirovanie_malih_ploshadei' => 'Асфальтирование малых площадей',
		'/service/prodaja_asfaltovoi_kroshki' => 'Продажа асфальтовой крошки',
		'/service/remont_dachnih_i_kottedjnih_dorog' => 'Ремонт дачных и коттеджных дорог',
		'/service/stroitelstvo_dorog' => 'Строительство дорог',
		'/service/ukladka_asfaltovoi_kroshki' => 'Укладка асфальтовой крошки',
		'/service/ukladka_tratuarnoi_plitki' => 'Укладка тратуарной плитки',
		'/service/ustanovka_bortovih_kamnei' => 'Установка бортовых камней',
		'/service/yamochnii_remont_dorog' => 'Ямочный ремонт дорог'
	);

	public static function getPageTitle() {
		$current_page = $_SERVER['REQUEST_URI'];
		if(!empty(self::$pages[$current_page])) {
			return self::$pages[$current_page];
		}
		return 'Строительсвтво и ремонт дорог';
	}
}
?>

<?php include('engine/ajax.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<script>console.groupCollapsed('Загрузка');</script>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<meta charset="UTF-8">
	<title><?=App::getPageTitle();?></title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script src="js/script.js"></script>

	<link rel="stylesheet/less" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/style/style.less?q='.rand(1, 9999);?>">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
	<script src="js/script.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	
	
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic,300italic,300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
</head>
<body>

	<div id="background"></div>
	<div id="wrapper">
		<div id="mask" onclick="hidePopup();"></div>
		<?php include('static/header.php'); ?>	
		<div id="content">
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

