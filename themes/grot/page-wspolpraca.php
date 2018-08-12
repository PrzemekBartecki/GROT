<?php get_header(); ?>

	<section class="wp">
		<div class="bg bgMarins" id="cooperation">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo-grot-z-cieniem.png" alt="LOGO GROT" />
			<p class="title textMobile">
				FUNDACJA GROT
			</p>
		</div>
		<!--Współpraca-->
		<section class="bgDark">
			<div class="readSpace">
				<div class="container">
					<h1 class="title marginB70 beamBig">Współpraca</h1>
					<p>
						Na mocy stosownych porozumień Fundacja GROT należy do grona organziacj
						proobronych. Posiadamy porozumienie o współpracy z WKU Chorzów, które możesz
						przeczytać <a href="#" target="_blank">tutaj>></a>
					</p>
					<h2 class="part marginTop beam partLeft">Działaj razem z nami i przekonaj się o korzyściach:</h2>
					<p class="item itemStar marginW">
						Będziesz miał prawo do noszenia polskiego munduru wz. 2010
					</p>
					<p class="marginW marginTop">
						<span id="atencion">UWAGA!</span>
						<br>
						Polski mundur mogą nosić jedynie członkowie organziacji proobronnych,
						dlatego ZAWSZE musisz mieć przy sobie legitymację to potwierdzającą. To tak
						na wypadek kontroli przez Żandarmerię Wojskową.
					</p>

					<p class="item itemStar marginW" >
						będziesz mógł brać udział w zamkniętych szkoleniach, prowadzonych przez
						żołdzierzy Wojska Polskiego, policjantów, instruktorów
					</p>
					<p class="item itemStar marginW">
						będzisz miał możliwość korzystania ze zniżek i bezpłatnych zajęć dla osób
						związanych z Fundacją
					</p>
					<p class="item itemStar marginW">
						będziesz miał pierwszeństwo do zapisu na aktywności organizowane przez
						Fundację
					</p>
					<p class="item itemStar marginW">
						będziesz miał spokojną głowę, że współpracujesz z prawdziwą,
						ustanowiona formalnie organizacją
					</p>

				</div>
			</div>
		</section>
	</section>

<!--JAK WSTĄPIĆ DO ORGANZIACJI-->

<section class="wp">
	<div class="bg bgPilot"><span id="how"></span></div>
	<section class="bgLight">
		<div class="readSpace">
			<div class="container">
				<h1 class="title beamBig beamPosition marginB70"><span>Jak wstąpić do organziacji proobronnej - GROT?</span></h1>
				<h2 class="part beam partLeft">To proste</h2>
				<p class="item itemStar nr1 marginW">
					Wypełnij formularz zgłoszeniowy - <a href="https://docs.google.com/forms/d/e/1FAIpQLSc3N4Xz5aJBNMcVaofIp4T9F9rnOEfjvUAJ7qiFMspyBcBQvQ/viewform" target="_blank">kliknij<span class="triangle"></span> </a>
				</p>
				<p class="item itemStar nr2 marginW">

					Opłać roczną składkę (na tej podstawie otrzymujesz ważność legitymacji, czyli możliwość noszenia munduru wz. 2010)
				</p>
				<p class="item itemStar nr3 marginW">
					Opłać legitymację i naszywkę, które są niezbędnymi elementami do identyfikacji (płatne jednorazowo).
				</p>
				<p class="marginTop">
					Zapraszamy osoby, które ukończyły 16 rok życia - konieczna zgoda rodziców/opiekunów
				</p>
				<p class="marginTop">
					<a href="#" target="_blank">Pobierz tutaj <span class="triangle"></span></a>
				</p>
				<p class="marginTop">
					a następnie - wypełnioną i podpisaną zgodę w formie skanu/czytelnego zdjęcia odeślij na adres: <a
							href="mailto:fundacjagrot@gmail.com" target="_blank">fundacjagrot@gmail.com</a>
				</p>

<!--				UWAGA z ciemnym tłem-->

				<div class="bgDark warning">
					<div id="warningContent">
						<h2 class="part item finger">
							Ważne
						</h2>
						<ul>
							<li>aby wstąpić do organziacji musisz posiadać obywatelstwo polskie.</li>
							<li>wpłaty należy dokonać według wzoru
								<br>

								<b>Suma:</b> 100zł składka + 100zł legitymacja i naszywka = 200zł
								<br>
								Tytuł przelewu: <b>Darowizna na cele statutowe</b>
								<br>
								Numer konta: IMG Bank Ślaski 51 1050 1243 1000 0090 8031 1534

							</li>


							<li>
								potwierdzenie przelewu należy wysłąć mailem na adres:
								<a href="mailto:fundacjagrot@gmail.com">fundacjagrot@gmail.com</a> Po wysłaniu przez Ciebie maila
								z potwierdzeniem, otrzymasz wiadomość zwrotną w terminie 7 dni roboczych.
							</li>
						</ul>
					</div>
				</div>

				<p class="part beam partLeft">Wzór legitymacji</p>
				<div id="document">
					<img src="<?php echo get_template_directory_uri(); ?>/images/legitymacjaa.png" alt="legitmacja członkowska awers" width="422px" height="266px" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/legitymacjar.png" alt="legitmacja członkowska rewers" width="422px" height="266px" />
				</div>
			</div>
		</div>
	</section>
</section>

<!--sekcja porozumienia-->

<section class="wp">
	<div class="bg bgTank" id="porozumienia"></div>
	<section class="bgDark">
		<div class="readSpace">
			<div class="container">
				<?php
				$poro = new WP_Query ([
					'post_type' => 'page',
					'pagename'=>'porozumienia'
				])
				?>
				<?php if ($poro-> have_posts() ) : while ($poro-> have_posts() ) :   $poro-> the_post(); ?>
					<!-- post -->
					<h1 class="title beamBig beamPosition2 agreement"><span> <?php the_title() ?> </span></h1>
					<?php the_content() ?>
				<?php endwhile; ?>
					<!-- post navigation -->
				<?php else: ?>
					<!-- no posts found -->
				<?php endif; ?>

			</div>
		</div>
	</section>

</section>
<!--sekcja w mediach-->
<section class="wp" style="
    display: none;">
	<div class="bg bgPeople" id="media"></div>
	<section class="bgLight">
		<div class="readSpace">
			<div class="container">
				<?php
				$media = new WP_Query ([
					'post_type' => 'page',
					'pagename'=>'media'
				])
				?>
				<?php if ($media-> have_posts() ) : while ($media-> have_posts() ) :   $media-> the_post(); ?>
					<!-- post -->
					<h1 class="title beamBig beamPosition beamMedia"><span> <?php the_title() ?> </span></h1>
					<?php the_content() ?>

				<?php endwhile; ?>
					<!-- post navigation -->
				<?php else: ?>
					<!-- no posts found -->
				<?php endif; ?>

			</div>
		</div>
	</section>
	<hr>
</section>





<?php get_footer(); ?>
