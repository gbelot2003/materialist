<nav class="light-blue lighten-1" role="navigation">
	<div class="nav-wrapper container"><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><?php print $site_name; ?></a>

		<?php if ($main_menu): ?>
				<?php print theme('links__system_main_menu', array(
					'links' => $main_menu,
					'attributes' => array(
						'id' => 'main-menu-links',
						'class' => array('right', 'hide-on-med-and-down'),
					),
					'heading' => array(
						'text' => t('Main menu'),
						'level' => 'h2',
						'class' => array('element-invisible'),
					),
				)); ?>

		<?php endif; ?>

		<?php if ($main_menu): ?>
			<?php print theme('links__system_main_menu', array(
				'links' => $main_menu,
				'attributes' => array(
					'id' => 'nav-mobile',
					'class' => array('side-nav'),
				),
				'heading' => array(
					'text' => t('Main menu'),
					'level' => 'h2',
					'class' => array('element-invisible'),
				),
			)); ?>

		<?php endif; ?>

		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav>

<div class="container">
	<div class="row">
		<section class="col s12 m8">
			<div class="row">

				<div class="col s12">
					<span class="col s12">
						<?php print render($title_prefix); ?>
					</span>
					<h2 class="title header" id="page-title">
						<?php print $title; ?>
					</h2>
					<span class="col s12">
						<?php print render($title_suffix); ?>
					</span>
				</div>

				<div class="col s12">
					<div class="row">

						<?php if ($tabs): ?>
							<div class="col s12">
								<div class="tabs">
									<?php print render($tabs); ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="col s12">
							<?php print render($page['content']); ?>
							<?php print $feed_icons; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<aside class="col s12 m4">
			<?php print render($page['sidebar_first']); ?>
		</aside>
	</div>
</div>

<footer class="page-footer orange">
	<div class="container">
		<?php if ($page['footer_firstcolumn']): ?>
		<div class="row">
			<?php print render($page['footer']); ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Made with <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a> by <a class="orange-text text-lighten-3" href="https://www.drupal.org/u/gbelot2003">Gerardo Belot</a> for
			<a class="teal-text text-lighten-3" href="http://drupal.org">Drupal 7</a>
		</div>
	</div>
</footer>