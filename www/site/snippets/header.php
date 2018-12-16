<!doctype html>
<!--

	Design & Development by Matthias Deckx
	http://matthiasdeckx.be
	@matthiasdeckx

-->
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=0">
	<meta name="author" content="<?= $site->title()->html() ?>">
	<meta name="publisher" content="<?= $site->title()->html() ?>">
	<meta name="copyright" content="<?= $site->title()->html() ?>">
	<meta name="robots" content="index,follow">
	<meta name="distribution" content="Global">
	<?php snippet('head/meta') ?>
	<!-- <?php snippet('head/favicon') ?> -->

	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<link rel="canonical" href="<?= $page->url() ?>">
	<?php echo liveCSS('assets/css/main.css') ?>
</head>
<body class="<?php if($page->isHomePage()): ?>is-homepage<?php endif ?> preload">

  <header class="c-site-header" role="banner">
    <a href="<?= page('home')->url() ?>">
      <?= $site->title()->html() ?>
    </a>
  	<?php snippet('menu') ?>
  </header>
