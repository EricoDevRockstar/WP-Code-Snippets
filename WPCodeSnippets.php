<?php
// GENERAL WP POST LOOP
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if


// OR THIS ONE TOO --> The loop starts here
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

// and ends here
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif;