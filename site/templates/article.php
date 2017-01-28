<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>
<h6 class="bentonsansrebold mb-2" style="opacity:.65"><a href="<?php echo $page->parent()->url() ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> <?php echo $page->parent()->title() ?></a></h6>

<main class="main" role="main">

  <article class="article row">

    <div class="text col-md-6">
      <header class="article-header">
        <h1><?= $page->title()->html() ?></h1>
        <?php if ($page->subtitle()->isNotEmpty()): ?><h2><?= $page->subtitle()->html() ?></h2><?php endif; ?>
        <?php if ($page->author()->isNotEmpty()): ?><p class="gray--600"><em>by</em> <?php echo $page->author() ?></p><?php endif; ?>
        <?php if ($page->wiley()->isNotEmpty()): ?>
          <a class="btn btn-secondary btn-outline bg-background" href="<?php echo $page->wiley() ?>">Read Article</a>
        <?php endif; ?>
        <hr />
      </header>

      <?= $page->text()->kirbytext() ?>
    </div>

    <?php if ($page->hasImages()): ?>
      <figure class="col-md-6 mt-0">
        <img src="<?php echo $page->images()->first()->url() ?>" class="img-fluid" alt="<?php echo $page->images()->first()->caption() ?>">
        <figcaption><?php echo $page->images()->first()->caption() ?> <?php if ($page->images()->first()->caption()->isNotEmpty()): ?>  (<?php echo $page->images()->first()->credit() ?>)<?php endif; ?></figcaption>
      </figure>
    <?php endif; ?>

  </article>

</main>

<?php snippet('footer') ?>
