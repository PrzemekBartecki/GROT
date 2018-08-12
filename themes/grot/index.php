<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
	
		Tekst ktry pojawi sie jak nei ma takie jstrony
	
  <!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>


