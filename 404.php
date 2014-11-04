<?php get_header(); ?>
	
	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">

			<div class="type-page">
			<?php
						$random = rand(1,50);
						if ($random <=10){
							//Yuri Gagarin
							echo '<h2 class="page-title">Error 404: He mirat i mirat, però no he vist a Déu</h2>';
				
							echo '<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/gagarin.jpg" height="660" width="660">';
							echo '</div>';
						}elseif(($random <=20) && ($random >10)){
							//Kruschev
							echo "<h2 class='page-title'>Error 404: Aquesta pàgina no es troba disponible després de la desestanilintació d'aquesta revista</h2>";
				
							echo'<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/kruschev.jpg" height="267" width="369">';
							echo'</div>';
						}elseif(($random <=30) && ($random >20)){
							//El Che
							echo '<h2 class="page-title">Error 404: Crear dos, tres... moltes editorials és la consigna!</h2>';
				
							echo '<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/elche.jpg" height="387" width="580">';
							echo '</div>';
						}elseif(($random <40) && ($random >=30)){
							//Lenin
							echo '<h2 class="page-title">Error 404: Acabem amb el contingut inexistent</h2>';
				
							echo '<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/lenin.png" height="382" width="500">';
							echo '</div>';
						}else{
							//MIR
							echo '<h2 class="page-title">Error 404: No hem pogut trobar la pàgina als nostres servidors espacials.</h2>';
				
							echo '<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/Mir.jpg" height="660" width="660">';
							echo '</div>';
						};
					?>
			</div>

		</section>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
