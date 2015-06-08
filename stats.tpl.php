<?php
/**
 * Place your custom markup here.
 *
 * Available variables:
 *  -
 */
?>

<div class="table-responsive">
<?php
$variables = array(
  'header' => $table_header,
  'rows' => stats_get_all_stats(),
  'attributes' => array(
    'class' => 'table-hover',
  ),
);
print theme('table', $variables);
?>
</div>

