<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row mb-3">
  <div class="col-sm-3 push-sm-9">
    <h3><a href="/features">Features</a></h3>
    <p><em>Online-only interviews, news, and resources.</em></p>
    <?php foreach ($pages->find('features')->grandchildren()->visible()->flip()->limit(3) as $f): ?>
      <a href="<?php echo $f->url() ?>">
        <!--<img src="http://placehold.it/300x200" class="img-fluid" alt="">-->
        <h6 class="mt-1"><?php echo $f->title() ?></h6>
      </a>
      <hr>
    <?php endforeach; ?>
    <a href="/features" class="btn bg-background btn-secondary btn-outline mt-1 float-xs-right">More features <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <h1>American Ethnologist</h1>
    <h5 class="mb-2">Journal of the American Ethnological Society</h5>
    <?php foreach ($pages->find('read/journal')->children()->visible()->limit(1) as $j): ?>
      <?php if ($j->coverimage()->isNotEmpty()): ?>
        <img class="float-sm-right ml-1 mb-1 img-fluid" src="<?php echo $j->coverimage()->toFile()->url() ?>" width="200" height="400"  style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
      <?php else: ?>
        <img class="float-sm-right ml-1 mb-1 img-fluid" src="http://placehold.it/200x256" width="200" height="400"  style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
      <?php endif; ?>
      <p><em>Current Issue:</em>&nbsp;  <strong><?php echo date('F Y', $j->date()) ?></strong> — Volume <?php echo $j->volume() ?> | Issue <?php echo $j->issue() ?></p>
      <p class="lead"><?php echo $j->text() ?></p>
      <a href="<?php echo $j->url() ?>" class="btn bg-background btn-secondary btn-outline">Table of Contents <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    <?php endforeach; ?>
    <hr>

    <h2 class="mb-1">Recent Issues</h2>

    <div class="row">
      <?php foreach ($pages->find('read/journal')->children()->visible()->sortBy('date', 'desc')->limit(4) as $j): ?>
        <a href="<?php echo $j->url() ?>" class="col-xs-3">
          <?php if ($j->coverimage()->isNotEmpty()): ?>
            <img class="float-sm-right ml-1 mb-1 img-fluid" src="<?php echo $j->coverimage()->toFile()->url() ?>" style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
          <?php else: ?>
            <img class="float-sm-right ml-1 mb-1 img-fluid" src="http://placehold.it/200x256" style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
          <?php endif; ?>
          <h6 class="mt-1"><?php echo $j->title() ?></h6>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <a href="/read/browse/issue" class="btn bg-background btn-secondary btn-outline mt-1 float-xs-right">More issues <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
      </div>
    </div>

<!--    <hr>

    <h2 class="mb-1">Browse the AE Archive...</h2>

    <div class="row">
      <div class="col-sm-6">
        <a href="/read/browse/author">
          <h6>by Author</h6>
          <img class="img-fluid" src="http://placehold.it/600x400" alt="">
        </a>
      </div>
      <div class="col-sm-6">
        <a href="/read/browse/author">
          <h6>by Keyword</h6>
          <img class="img-fluid" src="http://placehold.it/600x400" alt="">
        </a>
      </div>
    </div>-->

    <?php $page->modules() ?>
  </div>
</div>

<?php snippet('footer') ?>
