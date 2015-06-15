	
	<?php
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m-d H:i');
	?>
	<div class="content-text-area">
		<form name="commentform" method="post" action="insertcomment.php">
			<textarea class="" name="post_area" placeholder="O que você está pensando?"></textarea>
			<button class="enviar-post" type="submit" name="submit">Comentar</button>
			<input type="hidden" name="date_post" value="<?php echo $date; ?>"/>
		<form>
	</div>