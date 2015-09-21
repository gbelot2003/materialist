<?php
/**
 *
 * 09/20/2015
 * Materialist Drupal theme
 * Based on Materialize css framework
 *
 */


/**
 * remove default css from drupal core.
 */

function materialist_css_alter(&$css) {
	// Remove defaults.css file.
	$exclude = [
		'modules/aggregator/aggregator.css' => FALSE,
		'modules/block/block.css' => FALSE,
		'modules/book/book.css' => FALSE,
		'modules/comment/comment.css' => FALSE,
		'modules/dblog/dblog.css' => FALSE,
		'modules/file/file.css' => FALSE,
		'modules/filter/filter.css' => FALSE,
		'modules/forum/forum.css' => FALSE,
		'modules/help/help.css' => FALSE,
		'modules/menu/menu.css' => FALSE,
		'modules/node/node.css' => FALSE,
		'modules/openid/openid.css' => FALSE,
		'modules/poll/poll.css' => FALSE,
		'modules/profile/profile.css' => FALSE,
		'modules/search/search.css' => FALSE,
		'modules/statistics/statistics.css' => FALSE,
		'modules/system/maintenance.css' => FALSE,
		'modules/system/system.admin.css' => FALSE,
		'modules/system/system.maintenance.css' => FALSE,
		'modules/system/system.menus.css' => FALSE,
		'modules/taxonomy/taxonomy.css' => FALSE,
		'modules/tracker/tracker.css' => FALSE,
		'modules/update/update.css' => FALSE,
		'modules/user/user.css' => FALSE,
	];
	$css = array_diff_key($css, $exclude);
}


function materialist_form_alter(&$form, &$form_state, $form_id){
	//$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Buscar';}";
	if ($form_id == 'search_block_form')
	{
		$form['search_block_form']['#attributes']['placeholder'] = t('Search');
		$form['search_block_form']['#attributes']['title'] = t('Ingresa el texto que deseas buscar');
		$form['actions']['submit']['#attributes']['class'][] = 'btn btn-primary blue';
	}
}

/**
 * Implements theme_menu_tree().
 */
function materialist_menu_tree(&$variables) {
	return '<ul class="collection">' . $variables['tree'] . '</ul>';
}


function materialist_menu_link__navigation(array $variables) {

	//add class for li
	$variables['element']['#attributes']['class'][] = 'collection-item';
	return theme_menu_link($variables);

	return $output;
}