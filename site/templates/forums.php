<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-12">
      <div class="row">
        <?php foreach ($site->index()->visible()->filterBy('template', 'forum') as $forum): ?>
          <a href="<?php echo $forum->url() ?>" class="col-xs-6 mb-2">
            <img src="<?php if ($forum->hasImages()): ?><?php echo $forum->images()->first()->url() ?><?php else: ?>http://placehold.it/160x209<?php endif; ?>" class="img-fluid">
            <h2 class="h5 mt-1 mb-0 pb-0"><?php echo $forum->title() ?></h2>
            <p class="sans h5"><?php echo $forum->date_display() ?></p></a>
        <?php endforeach; ?>
      </div>
  </div>
</div>

<?php snippet('footer') ?>
