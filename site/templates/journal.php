<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
    </header>
    <div class="row">
      <div class="col-sm-9">
        <div class="lead">
          <?= $page->text()->kirbytext() ?>
        </div>
        <?php if ($page->hasModules()): ?>
            <?php $page->modules() ?>
        <?php else: ?>
          <?php pattern('article-list', array('articles' => $page->children()->visible())) ?>
        <?php endif; ?>
      </div>
      <div class="col-sm-3">
        <?php pattern('navigation/sibling_sidebar') ?>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
