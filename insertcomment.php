
<?php include "connect.php"; ?>

<?php
	$postagem=$_POST['post_area'];
	$cont = str_word_count($postagem, 0);
	$date=$_POST['date_post'];
?>

<?php
	if($cont == 0){
    	echo "<script>
    			alert('Digite um valor valido!');
    			document.location.href = 'index.php';
    			</script>";
    }else{
    	$postagem = ltrim($postagem);
    	$postagemValida = str_replace("'", '"', $postagem);
    	$postagem = $postagemValida;
		$insert = "INSERT INTO postagem_tb(campo_post, date_post)
		VALUES('$postagem', '$date')";
		$query = mysql_query($insert);
		echo "<script>
    			alert('Gravado com sucesso!');
    			document.location.href = 'index.php';
    			</script>";
	}
?>