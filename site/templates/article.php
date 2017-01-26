<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>
<h6 class="bentonsansrebold" style="opacity:.65"><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></h6>

  <main class="main" role="main">

    <article class="article single wrap">

      <header class="article-header">
        <?php if ($page->hasImages()): ?><img src="<?php echo $page->images()->first()->url() ?>" alt=""><?php endif; ?>
          <h1><?= $page->title()->html() ?></h1>
          <?php if ($page->subtitle()->isNotEmpty()): ?><h2><?= $page->subtitle()->html() ?></h2><?php endif; ?>
        <?php if ($page->wiley()->isNotEmpty()): ?>
          <a class="btn btn-secondary btn-outline bg-background" href="<?php echo $page->wiley() ?>">Read Article</a>
        <?php endif; ?>
        <div class="intro text">
          <?= $page->date('F jS, Y') ?>
        </div>
        <hr />
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </article>

  </main>

<?php snippet('footer') ?>
