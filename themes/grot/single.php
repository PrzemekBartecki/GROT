<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
	<!-- post -->
<?php the_title() ?>
<?php the_content() ?>
			


			<section class="navPost">
				<div>
					<strong><?php previous_post_link( '<strong>%link</strong>');?></strong>
				</div>
				<div>
					<strong><?php next_post_link( '<strong>%link</strong>');?></strong>
				</div>

			</section>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>

			<!-- no posts found -->
			<?php endif; ?>
		</article>

	</section>
</section>
<?php get_footer(); ?>


