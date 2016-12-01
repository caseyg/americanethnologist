<?php snippet('header') ?>

<?php if ($page->depth() > 1): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>
<?php else: ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->children()->visible())) ?>
<?php endif; ?>

<?php pattern('heading-title') ?>

<?php $page->modules() ?>

<?php snippet('footer') ?>
