<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>

<?php pattern('heading-title') ?>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $page->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <?php echo $page->intro() ?>
    <?php $page->modules() ?>
  </div>
</div>

<?php snippet('footer') ?>
