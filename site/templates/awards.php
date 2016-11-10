<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

      <div class="row">
        <div class="col-sm-9">
          <?= $page->text()->kirbytext() ?>
        </div>
        <div class="col-sm-3">
          <?php pattern('navigation/sibling_sidebar') ?>
        </div>
      </div>

  </main>

<?php snippet('footer') ?>
