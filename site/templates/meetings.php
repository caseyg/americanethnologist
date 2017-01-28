<?php snippet('header') ?>

<?php if ($page->depth() > 1): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>
<?php else: ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->children()->visible())) ?>
<?php endif; ?>

<hr>

<div class="row">
<?php if ($page->depth() > 1): ?>
  <div class="col-xs-12 lead mb-3">
    <?php echo $page->text() ?>
  </div>
  <?php foreach ($page->children() as $event): ?>
    <div class="col-sm-6 mb-3">
      <a href="<?php echo $event->url() ?>">
        <h4><?php echo $event->title() ?></h4>
        <img class="img-fluid" src="<?php if ($event->hasImages()): echo $event->images()->first()->crop(600,400)->url(); else: echo "http://placehold.it/600x400"; endif;?> " alt="">
      </a>
    </div>
  <?php endforeach; ?>
<?php else: ?>
  <?php foreach ($page->children() as $meeting): ?>
    <div class="col-sm-6">
        <?php foreach ($meeting->children()->limit(1) as $event): ?>
          <a href="<?php echo $event->url() ?>">
            <img class="img-fluid" src="<?php if ($event->hasImages()): echo $event->images()->first()->crop(600,400)->url(); else: echo "http://placehold.it/600x400"; endif;?> ">
            <h3 class="mt-1 text-xs-center"><?php echo $event->title() ?></h3>
            <p class="sans gray--600 text-xs-center">
              <strong><?php echo $event->dates() ?></strong><br>
              <?php echo $event->location() ?>
            </p>
          </a>
        <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
</div>

<?php snippet('footer') ?>
