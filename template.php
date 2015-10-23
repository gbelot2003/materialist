<?php
/**
 *
 * 09/20/2015 $Gerardo A. Belot
 * Materialist Drupal theme
 * Based on Materialize css framework
 *
 * @file
 * template.php
 */

/**
 * hook_css_alter implementation
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

/**
 * hook_preprocess_page
 * @param $var
 */
function materialist_process_page(&$variables){

	if (!empty($variables['page']['sidebar_first'])) {
		$variables['content_column_class'] = ' class="col s12 m8"';
	} else {
		$variables['content_column_class'] = ' class="col s12"';
	}

	if(!empty($variables['page']['top_a']) && !empty($variables['page']['top_b']) && !empty($variables['page']['top_c'])){
		$variables['top_column_class'] = ' class="col s12 m4"';
	} elseif(
		!empty($variables['page']['top_a']) && !empty($variables['page']['top_b']) && empty($variables['page']['top_c']) ||
		!empty($variables['page']['top_a']) && empty($variables['page']['top_b']) && !empty($variables['page']['top_c']) ||
		empty($variables['page']['top_a']) && !empty($variables['page']['top_b']) && !empty($variables['page']['top_c'])
	){
		$variables['top_column_class'] = ' class="col s12 m6"';
	} elseif(
		!empty($variables['page']['top_a']) && empty($variables['page']['top_b']) && empty($variables['page']['top_c']) ||
		empty($variables['page']['top_a']) && !empty($variables['page']['top_b']) && empty($variables['page']['top_c']) ||
		empty($variables['page']['top_a']) && empty($variables['page']['top_b']) && !empty($variables['page']['top_c'])
	){
		$variables['top_column_class'] = ' class="col s12"';
	}

	if(!empty($variables['page']['sub_footer_a']) && !empty($variables['page']['sub_footer_b']) && !empty($variables['page']['sub_footer_c'])){
		$variables['sub_footer_column_class_first'] = ' class="col s12 m6"';
		$variables['sub_footer_column_class_others'] = ' class="col s12 m3"';
	} elseif(
		!empty($variables['page']['sub_footer_a']) && !empty($variables['page']['sub_footer_b']) && empty($variables['page']['sub_footer_c']) ||
		!empty($variables['page']['sub_footer_a']) && empty($variables['page']['sub_footer_b']) && !empty($variables['page']['sub_footer_c']) ||
		!empty($variables['page']['sub_footer_a']) && !empty($variables['page']['sub_footer_b']) && empty($variables['page']['sub_footer_c'])
	){
		$variables['sub_footer_column_class_first'] = ' class="col s12 m6"';
		$variables['sub_footer_column_class_others'] = ' class="col s12 m6"';
	} elseif(
		!empty($variables['page']['sub_footer_a']) && empty($variables['page']['sub_footer_b']) && empty($variables['page']['sub_footer_c']) ||
		empty($variables['page']['sub_footer_a']) && !empty($variables['page']['sub_footer_b']) && empty($variables['page']['sub_footer_c']) ||
		empty($variables['page']['sub_footer_a']) && empty($variables['page']['sub_footer_b']) && !empty($variables['page']['sub_footer_c'])
	){
		$variables['sub_footer_column_class_first'] = ' class="col s12"';
		$variables['sub_footer_column_class_others'] = ' class="col s12"';
	}
}

/**
 * hook_form_alter implementation
 * @param $form
 * @param $form_state
 * @param $form_id
 */
function materialist_form_alter(&$form, &$form_state, $form_id){

	if ($form_id == 'search_block_form')
	{
		$form['search_block_form']['#attributes']['placeholder'] = t('Search');
		$form['search_block_form']['#attributes']['title'] = t('Add search string');
		$form['actions']['submit']['#attributes']['class'][] = 'btn btn-primary blue';
	}
		$form['actions']['submit']['#attributes']['class'][] = 'btn btn-primary blue';
		$form['actions']['preview']['#attributes']['class'][] = 'btn btn-flat';
}

/**
 * hook_breadcrumb implementation
 * this conf. is perfect for "breadcrumb module" installation
 * @param $variables
 * @return string
 */
function materialist_breadcrumb($variables) {
	if (count($variables['breadcrumb']) > 0) {
		$lastitem = sizeof($variables['breadcrumb']);
		$title = drupal_get_title();
		$crumbs = '<ol class="breadcrumb">';
		$a=1;
		foreach($variables['breadcrumb'] as $value) {
			if ($a!=$lastitem){
				$crumbs .= '<li>'. $value . ' ' . '</li>';
				$a++;
			}
			else {
				$crumbs .= '<li>'.$value.'</li>';
			}

		}
		$crumbs .= '</ol>';
		return $crumbs;
	}
	else {
		return t("Home");
	}
}

/**
 * hook_menu_tree implementation
 * Change the ul class variable for menus
 * @param $variables
 * @return string
 */
function materialist_menu_tree(&$variables) {
	return '<ul class="collection">' . $variables['tree'] . '</ul>';
}

/**
 * hook_menu_link
 * all menus exept primary menu have li tag modified
 * @param array $variables
 * @return mixed
 */
function materialist_menu_link(array $variables) {

	$variables['element']['#attributes']['class'][] = 'collection-item';
	return theme_menu_link($variables);

	return $output;
}

/**
 * hook_preprocess_node
 * @param $variables
 * @param $hook
 */
function materialist_preprocess_node(&$variables, $hook) {
	if($variables['elements']['#view_mode'] == 'teaser'){
		$variables['theme_hook_suggestions'][]= 'node__teaser';
	}
}

/**
 * Implements Theme fields
 * reference from https://api.drupal.org/comment/43858#comment-43858
 * Overwrite the theme function to clear the output variable, with less divs and we can
 * chose the output format
 *
 * @param $variables
 * @param string $tag
 * @param string $itemsep
 * @return string
 */
function materialist_field($variables, $tag='div', $itemsep='') {

	$isempty    = true;
	$output     = '';
	$sep        = '';

	// Render the items.
	$output = '<'.$tag.' class="field-items"' . $variables['content_attributes'] . '>';
	foreach ($variables['items'] as $delta => $item) {
		$classes    = 'field-item chip ' . ($delta % 2 ? 'odd' : 'even');
		$rendered   = drupal_render($item);
		$isempty    = $isempty && (strlen(trim($rendered))==0);
		$output     .= '<'.$tag.' class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>';
		$output     .= $sep.$rendered;
		$output     .= '</'.$tag.'>';
		$sep        = $itemsep;
	}
	$output .= '</'.$tag.'>';

	if ($isempty) return '<!-- '.$variables['label'].': empty -->';

	// Prepend the label, if it's not hidden.
	if (!$variables['label_hidden']) {
		$label  = '<'.$tag.' class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</'.$tag.'>';
		$output = $label.$output;
	}

	// Render the top-level DIV.
	$output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

	return $output;

}

function materialist_field__field_tags__article($variables)
{
	return materialist_field($variables,'span');
}
