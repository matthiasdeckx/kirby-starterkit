<?php snippet('header') ?>

	<main class="c-main l-container" role="main">

	  <header>
			<h1 class="u-hidden"><?php echo $page->title()->html() ?></h1>
		</header>

		<section class="l-section--padding">
			<header>
				<div class="l-row">
					<div class="l-col-6 l-col-md-12">
						<h2 class="o-title--large">
							<?php echo $page->intro()->html() ?>
						</h2>
					</div>
				</div>
			</header>
			<div class="l-row">
				<div class="l-col-6 l-col-md-12">
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
		</section>

	</main>

<?php snippet('footer') ?>
