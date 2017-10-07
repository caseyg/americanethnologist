<?php snippet('header') ?>

<div class="row">
  <div class="col-lg-4 welcome_message mb-1">
    <h6 class="mt-1"><?= $page->welcome_header() ?></h6>
    <?= $page->welcome_text()->kt() ?>
    <small class="carousel-captions mt-3">
      <h6>Research Snapshots <i class="fa fa-chevron-right" aria-hidden="true"></i></h6>
      <figcaption class="caption">&nbsp;</figcaption>
    </small>
  </div>
  <div class="col-lg-8">
    <div class="carousel">
      <?php foreach ($page->images() as $i): ?>
        <div class="carousel-cell"><img src="<?php echo $i->crop(730,487)->url() ?>" alt="<?php echo $i->caption() ?> (<?php echo $i->credit() ?>)"></div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<hr class="mt-3">
<div class="row">
  <?php $page->modules() ?>
</div>
</div>

<?php snippet('footer') ?>
