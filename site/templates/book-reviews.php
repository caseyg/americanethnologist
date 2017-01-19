<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

  <main class="main" role="main">
    <div class="row">
      <div class="lead col-sm-8 push-sm-2">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?php echo $site->index()->filterBy('template', 'bookreview')->count() ?>
        <?php foreach($site->index()->filterBy('template', 'review') as $r): ?>
          <h3><?php echo $r->title() ?></h3>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?php if ($page->hasModules()): ?>
            <?php $page->modules() ?>
        <?php endif; ?>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
