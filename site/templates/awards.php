<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </header>

    <div class="row">
      <?php foreach ($page->children()->visible() as $p): ?>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-block">
              <h3><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></h3>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </main>

<?php snippet('footer') ?>
