<?php snippet('header') ?>

<?php pattern('heading-title') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->children()->visible())) ?>

<hr>

<?php $page->modules() ?>

<?php snippet('footer') ?>
