<?php snippet('header') ?>

<?php if ($page->parent()->title() != "News"): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>
  <hr>
<?php endif; ?>

<div class="col-xs-12">
  <?php pattern('heading-title') ?>

  <?php if ($page->hasModules()): ?>
      <?php $page->modules() ?>
  <?php else: ?>
    <div class="text">
      <?= $page->text()->kt() ?>
    </div>
  <?php endif; ?>
</div>

<?php snippet('footer') ?>
