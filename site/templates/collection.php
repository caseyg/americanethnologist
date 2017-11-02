<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>

<hr>

  <main class="main" role="main">
    <?php if ($page->coverimage()->isNotEmpty()): ?>
      <div class="row text-xs-center">
        <img class="my-2 img-fluid" style="box-shadow: 0 5px 10px rgba(0,0,0,.25);" src="<?php echo $page->coverimage()->toFile()->resize(350,0)->url() ?>">
      </div>
    <?php endif; ?>
    <div class="row text-xs-center">
      <h1><?= $page->title()->html() ?></h1>
      <?php if ($page->subtitle()->isNotEmpty()): ?><h2><?= $page->subtitle()->html() ?></h2><?php endif; ?>
      <?php if ($page->author()->isNotEmpty()): ?>
        <p class="gray--600"><em>Edited by</em>
          <?php snippet('author', array('author' => $page->author())) ?>
        </p>
      <?php endif; ?>
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
      <?php $articles = $page->children()->visible(); ?>
      <?php foreach ($articles as $a): ?>
        <?php $a = page($a); ?>
        <div class="row">
          <a href="<?php echo $a->url() ?>" class="mt-3 d-block text-xs-center">
            <h3 class="mb-0"><?php echo $a->title() ?></h3>
            <h4 class="mb-1 bentonsanscondensedregular"><?php echo $a->subtitle() ?></h4>
              <p class="gray--600"><em>by</em> <strong><?php snippet('author', array('author' => $a->author())) ?></strong></p>
            <?php if ($a->featuredImage()->isNotEmpty()): ?>
              <figure class="toc__figure">
                <img src="<?php echo $a->featuredImage()->toFile()->resize(500,500)->url() ?>" alt="<?php echo $a->featuredImage()->caption() ?>">
                <figcaption><?php echo $a->featuredImage()->toFile()->caption() ?> <?php if ($a->featuredImage()->toFile()->credit()->isNotEmpty()): ?>  (<?php echo $a->featuredImage()->toFile()->credit() ?>)<?php endif; ?></figcaption>
              </figure>
            <?php endif; ?>
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
