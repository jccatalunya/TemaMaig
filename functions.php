<?php //functions.php del dynamicnews child theme

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}

if ( ! function_exists( 'dynamicnews_list_comments' ) ):
function dynamicnews_list_comments($comment, $args, $depth) {}
endif;

// Display Postmeta Data
// Elimina les etiquetes d'autor i comentaris de les pàgines de post
if ( ! function_exists( 'dynamicnews_display_postmeta' ) ):
	
	function dynamicnews_display_postmeta() { ?>
		
		<span class="meta-date">
		<?php printf(__('<a href="%1$s" title="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a>', 'dynamicnewslite'), 
				esc_url( get_permalink() ),
				esc_attr( get_the_time() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			);
		?>
		</span>
		
		<!--<span class="meta-author sep">
		<?php printf(__('<a href="%1$s" title="%2$s" rel="author">%3$s</a>', 'dynamicnewslite'), 
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'dynamicnewslite' ), get_the_author() ) ),
				get_the_author()
			);
		?>
		</span>
		
	<?php if ( comments_open() ) : ?>
		
		<span class="meta-comments sep">
			<?php comments_popup_link( __('Leave a comment', 'dynamicnewslite'),__('One comment','dynamicnewslite'),__('% comments','dynamicnewslite') ); ?>
		</span>
		
	<?php endif; ?>-->
	
	<?php
		edit_post_link(__( 'Edit Post', 'dynamicnewslite' ));
	}
	
endif;
