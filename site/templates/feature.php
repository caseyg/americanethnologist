<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>

<?php pattern('heading-title') ?>

<?php echo $page->modules() ?>

<?php snippet('footer') ?>
