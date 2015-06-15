<?php include "connect.php"; ?>


	<div class="content-post">
		<div class="header-content-post">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			<span class="user-header-content-post">User</span>
			<span class="date-header-content-post">12/06/1922</span>
		</div>
		<div class="conteudo-content-post">
			
		</div>
		<div class="coments">
			<span>comentários sobre a última postagem.</span>
			<div class="fb-comments" data-href="http://localhost/Projects/responsive/" data-width="" data-numposts="5" data-colorscheme="light"></div>

			
				
		</div>
	</div>


	<?php
        /*$sql = mysql_query("SELECT * FROM postagem_tb ORDER BY id desc");
        $row = mysql_num_rows($sql);
        if($row > 0){
          while($linha = mysql_fetch_array($sql)){
          	echo '<div class="content-post">';
          		$date = $linha['date_post'];
          		$id = $linha['id'];
          	
				echo '<div class="header-content-post">';
					echo "<span class='user-header-content-post'>Anonimo</span>";
					echo "<span class='date-header-content-post'>$date</span>";
				echo '</div>';
					$postagem = $linha['campo_post'];
				echo '<div class="conteudo-content-post">';
		            echo "<span>$postagem</span>";
				echo '</div>';
				echo "<div class='coments'>";
					echo '<div class="fb-comments" data-href="http://localhost/Projects/responsive/" data-width="" data-numposts="5" data-colorscheme="light"></div>';
				echo "</div>";
        	echo '</div>';
          }
        }else{
          echo "Ainda nao exite comentarios! Seja o primeiro.";
        }*/
      ?>

      <?php

        $sql = mysql_query("SELECT * FROM postagem_tb ORDER BY id desc");
        $row = mysql_num_rows($sql);
        $count = $row / 5;
        if($row  > ceil($count) ){
          while($linha = mysql_fetch_array($sql)){
          	echo '<div class="content-post">';
          		$date = $linha['date_post'];
          		$id = $linha['id'];
          	
				echo '<div class="header-content-post">';
					echo "<span class='user-header-content-post'>Anônimo</span>";
					echo "<span class='date-header-content-post'>$date</span>";
				echo '</div>';
					$postagem = $linha['campo_post'];
				echo '<div class="conteudo-content-post">';
		            echo "<span>$postagem</span>";
				echo '</div>';
				echo "<div class='coments'>";
					echo '<div class="fb-comments" data-href="http://localhost/Projects/responsive/" data-width="" data-numposts="5" data-colorscheme="light"></div>';
				echo "</div>";
				echo ceil($count);
				echo $row;
        	echo '</div>';
          }
        }else{
          echo "Ainda nao exite comentarios! Seja o primeiro.";
        }
      ?>

	