<?php snippet('header') ?>

<div class="row">
  <p class="lead"><?php echo $page->intro() ?></p>
</div>

<div class="row">
<?php if ($page->depth() > 1): ?>
  <?php foreach ($page->children() as $event): ?>
    <div class="col-sm-6">
      <a href="<?php echo $event->url() ?>">
        <h3><?php echo $event->title() ?></h3>
        <img class="img-fluid" src="<?php if ($event->hasImages()): echo $event->images()->first()->crop(600,400)->url(); else: echo "http://placehold.it/600x400"; endif;?> " alt="">
      </a>
    </div>
  <?php endforeach; ?>
<?php else: ?>
  <?php foreach ($page->children() as $meeting): ?>
    <div class="col-sm-6">
        <h6><a href="<?php echo $meeting->url() ?>"><?php echo $meeting->title() ?></a></h6>
        <?php foreach ($meeting->children()->limit(1) as $event): ?>
          <a href="<?php echo $event->url() ?>">
            <h3><?php echo $event->title() ?></h3>
            <img class="img-fluid" src="<?php if ($event->hasImages()): echo $event->images()->first()->crop(600,400)->url(); else: echo "http://placehold.it/600x400"; endif;?> " alt="">
          </a>
        <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
</div>

<?php snippet('footer') ?>
