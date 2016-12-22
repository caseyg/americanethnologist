<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <h3><a href="/features">Features</a></h3>
    <p><em>Online-only interviews, news, and resources.</em></p>
    <a href="http://americanethnologist.dev/features/interviews/lila-abu-lughod-interview">
      <img src="http://placehold.it/300x200" class="img-fluid" alt="">
      <h6 class="mt-1">Ten questions about anthropology, feminism, Middle East politics, and publics</h6>
    </a>
    <a href="/features" class="btn bg-background btn-secondary btn-outline mt-1">Browse more features <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    <hr>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <h1>American Ethnologist</h1>
    <h5 class="mb-2">Journal of the American Ethnological Society</h5>
    <hr>
    <?php foreach ($pages->find('read/journal')->children()->visible()->limit(1) as $j): ?>
      <?php if ($j->coverimage()->isNotEmpty()): ?>
        <img class="img-thumbnail float-sm-right ml-1 mb-1" src="<?php echo $j->coverimage()->toFile()->url() ?>" width="200" height="400" alt="">
      <?php else: ?>
        <img class="img-thumbnail float-sm-right ml-1 mb-1" src="http://placehold.it/200x400" width="200" height="400" alt="">
      <?php endif; ?>
      <p><em>Current Issue:</em>&nbsp;  <strong><?php echo date('F Y', $j->date()) ?></strong> — Volume <?php echo $j->volume() ?> | Issue <?php echo $j->issue() ?></p>
      <p class="lead"><?php echo $j->text() ?></p>
      <a href="<?php echo $j->url() ?>" class="btn bg-background btn-secondary btn-outline">Table of Contents <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    <?php endforeach; ?>
    <hr>

    <h2>Previous Issues</h2>

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h3>August</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h3>February</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">

          </div>
        </div>
      </div>
    </div>

    <h2>Access &amp; Subscriptions</h2>


    <?php $page->modules() ?>
  </div>
</div>

<?php snippet('footer') ?>
