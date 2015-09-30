<?php

/**
 * @file
 * Display Suite Two Colum Stack configuration.
 */

function ds_two_colum_stack() {
  return array(
    'label' => t('Two Colum Stack'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (two_colum_stack.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (two_colum_stack.png)
    // 'image' => TRUE,
  );
}
