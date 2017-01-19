<?php snippet('header') ?>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $page->parent()->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <h1><?php echo $page->theme() ?></h1>
    <p class="sans"><?php echo $page->dates() ?></p>
    <p class="sans"><?php echo $page->location() ?></p>

    <?php $page->modules() ?>
    <?php echo $page->text()->kt() ?>
  </div>
</div>

<?php snippet('footer') ?>
