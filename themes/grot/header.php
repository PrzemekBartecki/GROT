<!doctype html>
<html lang="pl-PL">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="opis strony dla google">
	<meta name="keywords" content="słowa kluczowe dla wyszukiwarki">
	<meta name="viewport"
		  content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>
		<?php	echo	get_bloginfo('name');	?>
	</title>
	<?php wp_head(); ?>

</head>
<body>
<!--==============================-->
<!--******Skrypt do Cookie********-->
<!--==============================-->	

<div id="simplecookienotification_v01" style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(43, 54, 67) none repeat scroll 0% 0%; border-color: rgb(160, 178, 192); border-style: outset none none; border-width: 2px 0px 0px; border-image: none 100% / 1 / 0 stretch; text-align: center; right: 0px; color: rgb(119, 119, 119); bottom: 0px; left: 0px; border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.8) 0px 0px 4px 1px;">
<div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
<span id="simplecookienotification_v01_powiadomienie">Używamy cookies w celach funkcjonalnych, aby ułatwić użytkownikom korzystanie z witryny oraz w celu tworzenia anonimowych statystyk serwisu. Jeżeli nie blokujesz plików cookies, to zgadzasz się na ich używanie oraz zapisanie w pamięci urządzenia.</span><span id="br_pc_title_html"><br></span>
<a id="simplecookienotification_v01_polityka" href="http://grot.e-ngo.pl/polityka-prywatnosci/" style="color: rgb(160, 178, 192);">Polityka Prywatności</a><span id="br_pc2_title_html"> &nbsp;&nbsp; </span>
<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/" style="color: rgb(160, 178, 192);">Jak wyłączyć cookies?</a><div id="jwc_hr1" style="height: 10px; display: none;"></div>
<a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,7);" style="position: absolute; background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(160, 178, 192); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 1px solid rgb(160, 178, 192); border-radius: 5px; top: 5px; right: 5px;">AKCEPTUJĘ</a><div id="jwc_hr2" style="height: 10px; display: none;"></div>
</div>
</div>
<script type="text/javascript">var galTable= new Array(); var galx = 0;</script><script type="text/javascript">function simplecookienotification_v01_create_cookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==" ") c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }return null;}var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");if(simplecookienotification_v01_jest==1){ document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>	
	
	
<header class="topMenu ">
	<div class="nav-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="container">
		<nav>
			<?php wp_nav_menu(['menu' => 'mainMenu']); ?>
		</nav>
	</div>
</header>
<!--==============================-->
<!--******boczny pasek********-->
<!--==============================-->
<div class="blockMenu"></div>
<div class="sidebar">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/tel-icon.png" alt="ikona telefonu" width="55px" height="55px"/>
		<a href="tel:+48694686019">694 686 019</a>
	</div>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png" alt="ikona maila" width="55px" height="55px" />
		<a href="mailto:grotfundacja@gmail.com">grotfundacja@gmail.com</a>
	</div>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png" alt="ikona facebook'a" width="55px" height="55px" />
		<a href="https://www.facebook.com/FundacjaGrot/" target="_blank">Polub nas!</a>
	</div>
</div>




