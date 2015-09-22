<div class="navbar-fixed" xmlns="http://www.w3.org/1999/html">
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
</div>

<?php if ($page['banner']): ?>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<?php print render($page['banner']); ?>
		</div>
	</div>
<?php endif ?>


<?php if ($page['top_a'] || $page['top_b'] || $page['top_c']): ?>
	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">

				<?php if ($page['top_a']): ?>
					<div <?php print $top_column_class ?>>
						<?php print render($page['top_a']); ?>
					</div>
				<?php endif ?>

				<?php if ($page['top_b']): ?>
					<div <?php print $top_column_class ?>>
						<?php print render($page['top_b']); ?>
					</div>
				<?php endif ?>

				<?php if ($page['top_c']): ?>
					<div <?php print $top_column_class ?>>
						<?php print render($page['top_c']); ?>
					</div>
				<?php endif ?>

			</div>
		</div>
	</div>
	<br>
<?php endif ?>

<div class="content grey lighten-4">
	<div class="container">
		<div id="breadcrumbs" class="">
			<?php if ($breadcrumb): ?>
				<div id="breadcrumb"><?php print $breadcrumb; ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<section <?php print $content_column_class ?>>
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
					<?php if ($messages): ?>
						<div class="row">
							<div id="messages"><div class="section clearfix">
									<?php print $messages; ?>
								</div></div> <!-- /.section, /#messages -->
						</div>
					<?php endif; ?>

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

		<?php if($page['sidebar_first']): ?>
		<aside class="col s12 m4">
			<?php print render($page['sidebar_first']); ?>
		</aside>
		<?php endif ?>

	</div>
</div>

<footer class="page-footer orange">
	<div class="container">

		<?php if ($page['footer']): ?>
			<div class="row">
				<?php print render($page['footer']); ?>
			</div>
		<?php endif; ?>

		<?php if ($page['sub_footer_a'] || $page['sub_footer_b'] || $page['sub_footer_c']): ?>
			<div class="row">

				<?php if ($page['sub_footer_a']): ?>
					<div <?php print $sub_footer_column_class_first ?>">
						<?php print render($page['sub_footer_a']); ?>
					</div>
				<?php endif; ?>

				<?php if ($page['sub_footer_a']): ?>
					<div <?php print $sub_footer_column_class_others ?>>
						<?php print render($page['sub_footer_b']); ?>
					</div>
				<?php endif; ?>


				<?php if ($page['sub_footer_a']): ?>
					<div <?php print $sub_footer_column_class_others ?>>
						<?php print render($page['sub_footer_c']); ?>
					</div>
				<?php endif; ?>

			</div>
		<?php endif ?>

	</div>

	<div class="footer-copyright">
		<div class="container">
			Made with <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a> by <a class="orange-text text-lighten-3" href="https://www.drupal.org/u/gbelot2003">Gerardo Belot</a> for
			<a class="teal-text text-lighten-3" href="http://drupal.org">Drupal 7</a>
		</div>
	</div>
</footer>