<div class="row">
  <?php foreach ($page->children()->visible() as $p): ?>
    <div class="col-xs-6 col-lg-4 mb-2">
      <img class="img-fluid mb-1" src="<?php if($p->hasImages()): echo $p->images()->first()->crop(300,300)->url(); else: echo 'http://placehold.it/300x300'; endif ?>">
      <?php if ($p->title()->isNotEmpty()): ?><h4 class="card-title"><?php echo $p->title() ?></h4><?php endif; ?>
      <?php if ($p->position()->isNotEmpty()): ?><p class="sans"><strong><?php echo $p->position() ?></strong><br> <?php echo $p->term() ?></p><?php endif; ?>
      <?php if ($p->affiliation()->isNotEmpty()): ?><p class="sans"><?php echo $p->affiliation() ?></p><?php endif; ?>
      <?php if ($p->homepage()->isNotEmpty()): ?><p class="person-meta sans"><a href="<?php echo $p->homepage() ?>"><i class="fa fa-external-link" aria-hidden="true"></i> Website</a><br><?php endif; ?>
      <?php if ($p->phone()->isNotEmpty()): ?><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $p->phone() ?></p><?php endif; ?>
      <?php if ($p->email()->isNotEmpty()): ?><a href="mailto:<?php echo $p->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a></p><?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>
<style type="text/css">
@media (min-width:992px) {
  .row>.col-lg-4:nth-child(3n+1) {
    clear: left;
  }
}
@media (max-width: 992px) {
  .row>.col-xs-6:nth-child(odd) {
    clear: left;
  }
}
</style>
