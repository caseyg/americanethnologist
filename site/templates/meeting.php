<?php snippet('header') ?>

<div class="row">
  <p class="lead"><?php echo $page->intro() ?></p>
</div>

<div class="row">
<?php foreach ($page->children() as $meeting): ?>
  <div class="col-sm-6">
    <a href="<?php echo $meeting->url() ?>">
      <h6><?php echo $meeting->title() ?></h6>
      <img class="img-fluid" src="http://placehold.it/600x400" alt="">
      <?php foreach ($meeting->children()->sortBy('date')->limit(1) as $event): ?>
        <?php echo $event->title() ?>
      <?php endforeach; ?>
    </a>
  </div>
<?php endforeach; ?>
</div>

<?php snippet('footer') ?>
