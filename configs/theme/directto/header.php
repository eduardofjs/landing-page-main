<!DOCTYPE html>
<html lang="<?php echo get_language(); ?>" class="scroll-smooth">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="title" content="Directto">
	<meta name="description" content="Mercado digital Parceiros de negócio Tudo em um único lugar Convergência De ponta a ponta Solução completa Bioeconomia">
	<meta name="keywords" content="bioeconomia, mercado,cultura, inteligencia, solucao, plataforma">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="app">

		<div id="page">

			<?php do_action('tailpress_header'); ?>

			<?php get_template_part('template-parts/navbar'); ?>

			<div id="content" class="site-content flex-grow">

				<?php do_action('tailpress_content_start'); ?>

				<main class="overflow-x-hidden">