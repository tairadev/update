<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link href="https://updateconsultoria.com.br/wp-content/themes/update/css/bootstrap.min.css?v=<?= rand(10,100) ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://updateconsultoria.com.br/wp-content/themes/update/css/index.css?v=<?= rand(10,100) ?>">
		<link rel="stylesheet" href="https://updateconsultoria.com.br/wp-content/themes/update/css/owl.carousel.min.css?v=<?= rand(10,100) ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/mstile-310x310.png" />

	</head>

	<body <?php body_class(); ?>>

		<? if(is_home()) { ?>
		<nav class="d-lg-none" id="navMobile">
			<a href="<?= get_home_url() ?>">
				<img src="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/logo-menu.png" onclick="$('html, body').animate({ scrollTop: $('#introducao').offset().top }, 'fast');" alt="Update Consultoria">
			</a>
			<div class="toggle-menu">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
		</nav>
		<div id="menu-mobile" class="hide d-lg-none">
			<ul>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#introducao').offset().top }, 'fast'); $('.toggle-menu').click()">Home</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#quem-somos').offset().top }, 'fast'); $('.toggle-menu').click()">Quem somos</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#servicos').offset().top }, 'fast'); $('.toggle-menu').click()">Serviços</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#cursos').offset().top }, 'fast'); $('.toggle-menu').click()">Cursos</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#time').offset().top }, 'fast'); $('.toggle-menu').click()">Time&Parceiros</a>
				</li>
				<li class="azul">
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#contato').offset().top }, 'fast'); $('.toggle-menu').click()">Contate-nos</a>
				</li>
			</ul>
		</div>
		<div class="pre-menu">
			<ul>
				<li>
					<a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook-f"></i> </a>
				</li>
				<li>
					<a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i> </a>
				</li>
				<li>
					<a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fab fa-linkedin-in"></i> </a>
				</li>
			</ul>
		</div>
		<nav class="d-none d-lg-block menu-desktop">
			<a href="<?= get_home_url() ?>">
				<img src="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/logo-menu.png" alt="">
			</a>
			<ul>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#introducao').offset().top }, 'fast');">Home</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#quem-somos').offset().top }, 'fast');">Quem somos</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#servicos').offset().top }, 'fast');">Serviços</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#cursos').offset().top }, 'fast');">Cursos</a>
				</li>
				<li>
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#time').offset().top }, 'fast');">Time&Parceiros</a>
				</li>
				<li class="azul">
					<a href="#" onclick="$('html, body').animate({ scrollTop: $('#contato').offset().top }, 'fast');">Contate-nos</a>
				</li>
			</ul>
		</nav>
		<? } else { ?>
		<nav class="d-lg-none" id="navMobile">
			<a href="<?= get_home_url() ?>">
				<img src="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/logo-menu.png" onclick="$('html, body').animate({ scrollTop: $('#introducao').offset().top }, 'fast');" alt="Update Consultoria">
			</a>
			<div class="toggle-menu">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
		</nav>
		<div id="menu-mobile" class="hide d-lg-none">
			<ul>
				<li>
					<a href="<?= get_home_url() ?>/#introducao" >Home</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#quem-somos">Quem somos</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#servicos">Serviços</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#cursos">Cursos</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#time">Time&Parceiros</a>
				</li>
				<li class="azul">
					<a href="<?= get_home_url() ?>/#contato">Contate-nos</a>
				</li>
			</ul>
		</div>
		<div class="pre-menu">
			<ul>
				<li>
					<a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook-f"></i> </a>
				</li>
				<li>
					<a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i> </a>
				</li>
				<li>
					<a href="http://" target="_blank" rel="noopener noreferrer"> <i class="fab fa-linkedin-in"></i> </a>
				</li>
			</ul>
		</div>
		<nav class="d-none d-lg-block menu-desktop">
			<a href="<?= get_home_url() ?>">
				<img src="https://updateconsultoria.com.br/wp-content/themes/update/assets/images/logo-menu.png" alt="">
			</a>
			<ul>
				<li>
					<a href="<?= get_home_url() ?>/#introducao" >Home</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#quem-somos">Quem somos</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#servicos">Serviços</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#cursos">Cursos</a>
				</li>
				<li>
					<a href="<?= get_home_url() ?>/#time">Time&Parceiros</a>
				</li>
				<li class="azul">
					<a href="<?= get_home_url() ?>/#contato">Contate-nos</a>
				</li>
			</ul>
		</nav>
		<? } ?>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
