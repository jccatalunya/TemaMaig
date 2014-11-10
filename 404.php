<?php get_header(); ?>
	
	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">

			<div class="type-page">
			<?php
				// Generates a random 404 page
				$random = rand(1,50);
				if ($random <=10){
					//Yuri Gagarin
					echo '<h2 class="page-title">Error 404: He mirat i mirat, però no he vist a Déu</h2>';
				
					echo '<div class="entry">';
						echo '<div class="gagarin"></div>';
					echo '</div>';
				}elseif(($random <=20) && ($random >10)){
					//Kruschev
					echo "<h2 class='page-title'>Error 404: Aquesta pàgina no es troba disponible després de la desestanilintació d'aquesta revista</h2>";
				
					echo'<div class="entry">';
						echo '<div class="kruschev"></div>';
					echo'</div>';
				}elseif(($random <=30) && ($random >20)){
					//El Che
					echo '<h2 class="page-title">Error 404: Crear dos, tres... moltes editorials és la consigna!</h2>';
				
					echo '<div class="entry">';
						echo '<div class="elche"></div>';
					echo '</div>';
				}elseif(($random <40) && ($random >=30)){
					//Lenin
					echo '<h2 class="page-title">Error 404: Acabem amb el contingut inexistent</h2>';
				
					echo '<div class="entry">';
						echo '<div class="lenin"></div>';
					echo '</div>';
				}else{
					//MIR
					echo '<h2 class="page-title">Error 404: No hem pogut trobar la pàgina als nostres servidors orbitals.</h2>';
				
					echo '<div class="entry">';
						echo '<div class="mir"></div>';
					echo '</div>';
				};
			?>
			</div>

		</section>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
