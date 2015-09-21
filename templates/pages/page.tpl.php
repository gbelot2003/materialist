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
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Company Bio</h5>
				<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Settings</h5>
				<ul>
					<li><a class="white-text" href="#!">Link 1</a></li>
					<li><a class="white-text" href="#!">Link 2</a></li>
					<li><a class="white-text" href="#!">Link 3</a></li>
					<li><a class="white-text" href="#!">Link 4</a></li>
				</ul>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Connect</h5>
				<ul>
					<li><a class="white-text" href="#!">Link 1</a></li>
					<li><a class="white-text" href="#!">Link 2</a></li>
					<li><a class="white-text" href="#!">Link 3</a></li>
					<li><a class="white-text" href="#!">Link 4</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
		</div>
	</div>
</footer>