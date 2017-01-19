<div class="row">
  <?php foreach ($page->children()->visible() as $p): ?>
    <div class="col-xs-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="<?php if($p->hasImages()): echo $p->images()->first()->crop(300,300)->url(); else: echo 'http://placehold.it/300x300'; endif ?>" alt="Card image cap">
        <div class="card-block">
          <?php if ($p->title()->isNotEmpty()): ?><h4 class="card-title"><?php echo $p->title() ?></h4><?php endif; ?>
          <?php if ($p->position()->isNotEmpty()): ?><p class="sans"><strong><?php echo $p->position() ?></strong><br> <?php echo $p->term() ?></p><?php endif; ?>
          <?php if ($p->affiliation()->isNotEmpty()): ?><p class="sans"><?php echo $p->affiliation() ?></p><?php endif; ?>
          <?php if ($p->homepage()->isNotEmpty()): ?><p class="person-meta sans"><a href="<?php echo $p->homepage() ?>"><i class="fa fa-external-link" aria-hidden="true"></i> <?php echo parse_url($p->homepage(),PHP_URL_HOST); ?></a><br><?php endif; ?>
          <?php if ($p->phone()->isNotEmpty()): ?><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $p->phone() ?></p><?php endif; ?>
          <?php if ($p->email()->isNotEmpty()): ?><a href="mailto:<?php echo $p->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $p->email() ?></a></p><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
