<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

  <main class="main" role="main">
    <?php if ($page->coverimage()->isNotEmpty()): ?>
      <div class="row text-xs-center">
        <img class="my-2 img-fluid" src="<?php echo $page->coverimage()->toFile()->resize(450,0)->url() ?>">
      </div>
    <?php endif; ?>
    <div class="row">
      <h1 class="text-xs-center"><?= $page->title()->html() ?></h1>
      <p class="text-xs-center sans h5"><?php echo $page->date_display() ?></p></a>
    </div>
    <div class="row">
      <div class="lead col-sm-8 push-sm-2">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    <div class="row">
      <?php if ($page->hasModules()): ?>
          <?php $page->modules() ?>
      <?php else: ?>
        <?php pattern('article-list', array('articles' => $page->children()->visible())) ?>
      <?php endif; ?>
    </div>
  </main>

<?php snippet('footer') ?>
