<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
    </header>
    <?php if ($page->children()->count() > 0 && $page->depth() == 1 || $page->depth() > 1 ): ?>
      <div class="row">
        <div class="col-sm-3 push-sm-9">
          <?php pattern('navigation/sibling_sidebar') ?>
        </div>
        <div class="col-sm-9 pull-sm-3">
          <div class="lead">
            <?= $page->intro()->kirbytext() ?>
          </div>
          <?= $page->text()->kirbytext() ?>
        </div>
      </div>
    <?php else: ?>
      <div class="row">
        <div class="col-xs-12">
          <?= $page->text()->kirbytext() ?>
        </div>
      </div>
    <?php endif; ?>

  </main>

<?php snippet('footer') ?>
