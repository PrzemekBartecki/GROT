<?php get_header(); ?>

<section class="bgLight emptySite">


	<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
	<!-- post -->
	<?php the_post_thumbnail();?>
	<div class="readSpace" >
		<div class="container page">
			<h1 class="title beamBig marginB70"><?php the_title(); ?></h1>

			<?php the_content();?>
			<?php wp_nav_menu([
				'theme_location'	=>	'projectmenu'
			]); ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>

				<!-- no posts found -->
			<?php endif; ?>

		</div>
	</div>
</section>
<hr>
<?php get_footer(); ?>


