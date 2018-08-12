<?php get_header(); ?>
<section class="wp">
	<div class="bg bgPilot" id="PageKontakt">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo-grot-z-cieniem.png" alt="LOGO GROT" />
		<p class="title textMobile">
			FUNDACJA GROT
		</p>
	</div>
	<section class="bgLight">
		<div class="readSpace">
			<div class="container">
				<h1 class="title marginB70 beamBig txtCenter">Kontakt</h1>
				<p class="part">Zapraszmy do kontaktu. Napisz, zadzwoń. Spotkajmy się.</p>
			</div>
		</div>
	</section>
	<section class="bgDark bgMapka">
		<div class="readSpace">
			<div class="container" id="kontakt">
				<?php
				$kontakt = new WP_Query ([
					'post_type' => 'page',
					'pagename'=>'kontakt'
				])
				?>
				<?php if ($kontakt-> have_posts() ) : while ($kontakt-> have_posts() ) :   $kontakt-> the_post(); ?>
					<!-- post -->

				<?php the_content() ?>
				<?php endwhile; ?>
					<!-- post navigation -->
				<?php else: ?>
					<!-- no posts found -->
				<?php endif; ?>

			</div>
		</div>
</section>
<section class="bgDark">
	<div class="readSpace">
		<div class="container">
			<div class="icon">
				<a href="tel:694 686 019"><span><img src="<?php echo get_template_directory_uri(); ?>/images/telefon-kontakt.png" alt="ikona telefonu" width="95px" height="95px" /><p>694 686 019</p></span></a>
				<a href="mailto:grotfundacja@gmail.com"><span><img src="<?php echo get_template_directory_uri(); ?>/images/mail-kontakt.png" alt="ikona kopery " width="95px" height="95px" /><p>grotfundacja@gmail.com</p></span>
					<a href="https://goo.gl/maps/fhLC8pC1QWo" target="_blank"><span><img src="<?php echo get_template_directory_uri(); ?>/images/lokalizacja-kontakt.png" alt="ikona punktu lokalizacyjnego" width="95px" height="95px" /><p>Siemianowice<br>Śląskie</p></span></a>
			</div>
			<div class="icon cnt ">
				<img src="<?php echo get_template_directory_uri(); ?>/images/karta-kontakt.png" alt="ikona karty kredytowej " width="95px" height="95px" />
				<p>ING Bank Ślaski 51 1050 1243 1000 0090 8031 1534 </p>
				<p>tytuł przelewu : DAROWIZNA NA CELE STATUTOWE</p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
