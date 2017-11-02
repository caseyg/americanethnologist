<?php $image = $data->image()->toFile() ?>
  <?php if($image): ?>
	<figure class="image <?= $data->class(); ?>">
	  <img src="<?= $image->url(); ?>" width="<?= $image->width(); ?>" height="<?= $image->height(); ?>" alt="<?= $image->description(); ?><?php if ($image->credit()->isNotEmpty()): ?> (<?= $image->credit() ?>)<?php endif; ?>">
	  <p><?= $image->description(); ?> <?php if ($image->credit()->isNotEmpty()): ?><small>(<?= $image->credit() ?>)</small><?php endif; ?></p>
	</figure>
  <?php endif; ?>