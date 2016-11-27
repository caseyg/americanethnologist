<?php snippet('header') ?>

<?php pattern('heading-title') ?>

<?php if ($page->children()->count() > 0 && $page->depth() == 1 || $page->depth() > 1 ): ?>
  <div class="row">
    <div class="col-sm-3 push-sm-9">
      <?php if ($page->depth() > 1): ?>
        <?php pattern('navigation/sidebar', array('pages' => $page->parent()->children()->visible())) ?>
      <?php else: ?>
        <?php pattern('navigation/sidebar', array('pages' => $page->children()->visible())) ?>
      <?php endif ?>
    </div>
    <div class="col-sm-8 pull-sm-3">
      <?php $page->modules() ?>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="col-xs-12">
      <?php $page->modules() ?>
    </div>
  </div>
<?php endif; ?>

<?php snippet('footer') ?>
