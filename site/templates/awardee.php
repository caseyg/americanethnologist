<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>

<hr>

<div class="row">
  <?php if ($page->images()->count() > 0): ?>
    <figure class="col-sm-4">
      <img src="<?php echo $page->images()->first()->url() ?>" class="img-fluid" alt="">
    </figure>
  <?php endif; ?>
  <div class="col-sm-8">
    <p class="h6 mt-3"><?php echo $page->award_year() ?> <?php echo $page->award_type() ?></p>
    <h1><?php echo $page->awardee_title() ?></h1>
    <h2><?php echo $page->awardee_subtitle() ?></h2>
    <p class="lead mb-2"><em>by</em> <?php echo $page->awardee_name() ?></p>

    <div class="lead">
      <?= $page->intro()->kt() ?>
    </div>

    <?= $page->text()->kt() ?>

  </div>

</div>

<?php snippet('footer') ?>
