<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>

<?php pattern('heading-title') ?>

<?php if ($page->children()->filterBy('name', '!=', 'modules')->count() > 0 && $page->depth() == 1 || $page->depth() > 1 ): ?>
  <div class="row">
    <div class="col-sm-3 push-sm-9">
      <?php pattern('navigation/sibling-sidebar') ?>
    </div>
    <div class="col-sm-8 pull-sm-3">
      <?php $page->modules() ?>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="lead">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
<?php endif; ?>

<?php snippet('footer') ?>
