<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<style>
	.mini_gallery{
		/*border-collapse: collapse;*/
		height: 200px;	
		max-width: 100% !important;	
		margin-bottom: 20px;	
		margin-left: auto;
		margin-right: auto;
		/*width: 100%;	*/
		/*cellspacing: 10px;*/
	}
	.mini_gallery>tbody>tr>td{
		max-width: 200px !important;
		box-shadow: 0 0 5px rgba(0,0,0,.33);
		border-radius: 3px;
		transition: width .5s, filter .5s;
		overflow: hidden;
		/*filter: grayscale(50%);*/
		background-position: center center;
		background-repeat: no-repeat;
		width: 70px;	
		/*min-width: 50px;*/
	}
	.mini_gallery>tbody>tr>td:hover{
		width: 200px !important;	
		cursor: pointer;
		/*filter: grayscale(0%);*/
		/*min-width: 190px;*/
	}
	.full{
		/*width: 250px !important;	*/
	}
</style>

<?php 

	$folder ['title'] = 'Асфальтирование';
	$folder ['folder'] = 'asfaltirovanie';
	$folders[] = $folder;

	$folder ['title'] = 'Асфальтирование стоянок и парковок';
	$folder ['folder'] = 'asfaltirovanie-stoyanok-i-parkovok';
	$folders[] = $folder;

	$folder ['title'] = 'Благоустройство';
	$folder ['folder'] = 'blagoustroistvo';
	$folders[] = $folder;

	$folder ['title'] = 'Земляные работы';
	$folder ['folder'] = 'zemlyanie-raboti';
	$folders[] = $folder;

	// $folder ['title'] = 'Кровельные работы';
	// $folder ['folder'] = 'krovelnie-raboti';
	// $folders[] = $folder;

	$folder ['title'] = 'Грунтовые работы';
	$folder ['folder'] = 'gruntovie-raboti';
	$folders[] = $folder;

	$folder ['title'] = 'Ямочный ремонт';
	$folder ['folder'] = 'yamochnii-remont';
	$folders[] = $folder;

	$folder ['title'] = 'Работы в частном секторе';
	$folder ['folder'] = 'raboti-v-chastnom-sektore';
	$folders[] = $folder;

	$folder ['title'] = 'Наша техника';
	$folder ['folder'] = 'nasha-tehnika';
	$folders[] = $folder;

?>

<h1>Галерея</h1>
<div class="container">


	<?php foreach ($folders as $key => $folder) { ?>

		<h2><?php echo $folder['title']; ?></h2>

		<table class="mini_gallery" cellspacing="10">
			<tbody>
			<tr class="parent-container">
				<?php for ($i=1; $i <= 10; $i++) { ?>
				<?php if ($i<10){$i='0'.$i;} ?>
					<?php if(is_file('images/photo/'.$folder['folder'].'/'.$i.'.jpg')){ ?>
						<td style="background-image: url('images/photo/<?php echo $folder['folder']; ?>/<?php echo $i; ?>.jpg');" href="images/photo_big/<?php echo $folder['folder']; ?>/<?php echo $i; ?>.jpg"></td>
					<? } ?>
				<? } ?>
			</tr>
			</tbody>
		</table>

	<?php } ?>

</div>

<script>
	$(document).ready(function() {
		$('.parent-container').each(function(index, el) {
			$(el).magnificPopup({
				delegate: 'td', // child items selector, by clicking on it popup will open
				type: 'image',
				gallery: {
			      enabled: true
			    },
			});
		});
		// $('.parent-container')
	});
</script>