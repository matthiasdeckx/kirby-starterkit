<?php
//Get all variables
$pageTitle = $page->title()->value();
$siteName = $site->title()->value();

if (isset($page)) {
	if ($page->seodescription()->isNotEmpty() ) {
		$description = $page->seodescription()->value();
	} else {
		if ($page->description()->isNotEmpty() ) {
			$description = $page->description()->value();
		} else {
			$description = $site->description()->value();
		}
	}
	if ($page->seotitle()->isNotEmpty()) {
		$ogTitle = $page->seotitle()->value();
	} else {
		$ogTitle = $page->title()->value();
	}
	if ($page->seoimage()->isNotEmpty() ) {
		$ogImage = $page->images()->find($page->seoimage());
	} else {
		if ($page->hasImages() ) {
			$image = $page->image();
			if ($image) {
				$ogImage = $image;
			}
		} else {
			$ogImage = $site->images()->find($site->seoimage());
		}
	}
} else {
	$description = $site->description()->value();
	$ogTitle = $site->title();
	$ogImage = $site->images()->find($site->seoimage());
}
?>

<title><?php if($page->isHomePage()): ?><?= $siteName ?><?php else: ?><?= $ogTitle ?> - <?= $siteName ?><?php endif ?></title>

<meta name="description" content="<?php echo $description; ?>">

<!-- Facebook meta -->
<meta property="og:title" content="<?php echo $ogTitle; ?>" />
<meta property="og:site_name" content="<?php echo $siteName; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $page->url(); ?>" />
<meta property="og:image" content="<?php if($ogImage): ?><?= $ogImage->url(); ?><?php endif ?>" />
<?php if($ogImage): ?>
<meta property="og:image:width" content="<?= $ogImage->width(); ?>" />
<meta property="og:image:height" content="<?= $ogImage->height(); ?>" />
<?php endif ?>

<!-- Twitter meta -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?php echo $siteName; ?>">
<meta name="twitter:title" content="<?php echo $ogTitle; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:image" content="<?php if($ogImage): ?><?= $ogImage->url(); ?><?php endif ?>">
