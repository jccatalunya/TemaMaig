
	<div id="footer-wrap">
	
		<footer id="footer" class="container clearfix" role="contentinfo">
			<nav id="footernav" class="clearfix" role="navigation">
				<?php 
					// Get Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'menu_id' => 'footernav-menu', 'echo' => true, 'fallback_cb' => '', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 1));
				?>
			</nav>
			<div id="llicencia"><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Llicència de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Revista Maig</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.jcc.cat" property="cc:attributionName" rel="cc:attributionURL">Joventut Comunista de Catalunya</a> està subjecta a una llicència de <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Reconeixement-NoComercial-SenseObraDerivada 4.0 Internacional de Creative Commons</a><br /></div>
			<div id="credit-link"><?/*php dynamicnews_credit_link(); */?>Utilitzant <a href=​"http:​/​/​wordpress.org" title=​"WordPress">​WordPress​</a> a partir del Tema <a href=​"http:​/​/​themezee.com/​themes/​dynamicnews/​" title=​"Dynamic News WordPress Theme">​Dynamic News​</a>​</div>
		</footer>
		
	</div>

</div><!-- end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
