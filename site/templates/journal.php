<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

  <main class="main" role="main">
    <?php if ($page->coverimage()->isNotEmpty()): ?>
      <div class="row text-xs-center">
        <img class="my-2" style="box-shadow: 0 5px 10px rgba(0,0,0,.25);" src="<?php echo $page->coverimage()->toFile()->url() ?>" width="250" alt="">
      </div>
    <?php endif; ?>
    <div class="row">
      <h1 class="text-xs-center"><?= $page->title()->html() ?></h1>
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
