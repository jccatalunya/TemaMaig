<?php get_header(); ?>
	
	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">

			<div class="type-page">
			<?php
						$random = rand(1,10);
						if ($random <6){
							//Yuri Gagarin
							echo '<h2 class="page-title">Error 404: He mirat i mirat, però no he vist a Déu</h2>';
				
							echo '<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/gagarin.jpg" height="660" width="660">';
							echo '</div>';
							
						}else{
							//Kruschev
							echo "<h2 class='page-title'>Error 404: Aquesta pàgina no es troba disponible després de la desestanilintació d'aquesta revista</h2>";
				
							echo'<div class="entry">';
								echo '<img src="http://www.maig.cat/wp-content/uploads/2014/11/kruschev.jpg" height="267" width="369">';
							echo'</div>';
							
						};
					?>
			</div>

		</section>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
