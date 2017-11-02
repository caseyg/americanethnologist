<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>

<hr>

  <main class="main" role="main">
    <?php if ($page->coverimage()->isNotEmpty()): ?>
      <div class="row text-xs-center">
        <img class="my-2 img-fluid" style="box-shadow: 0 5px 10px rgba(0,0,0,.25);" src="<?php echo $page->coverimage()->toFile()->resize(350,0)->url() ?>">
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
      <h6 class="bentonsansreregular text-xs-center mt-2"><?php echo $page->date("M d, Y") ?></h6>
    </div>
    <div class="row">
      <?php foreach ($page->children()->visible() as $a): ?>
        <?php $a = page($a); ?>
        <div class="row">
          <a href="<?php echo $a->url() ?>" class="mt-3 d-block text-xs-center">
            <h3 class="mb-0"><?php echo $a->title() ?></h3>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if($page->affiliations()->isNotEmpty()): ?>
      <div class="row">
        <section class="bodyText col-lg-8 offset-lg-2">
          <hr class="mt-3">
          <small><?= $page->affiliations()->kirbytext() ?></small>
        </section>
      </div>
    <?php endif; ?>
  </main>

<?php snippet('footer') ?>
