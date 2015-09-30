<?php

/**
 * @file
 * Display Suite Single Column configuration.
 */

function ds_single_column() {
  return array(
    'label' => t('Single Column'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (single_column.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (single_column.png)
    // 'image' => TRUE,
  );
}
