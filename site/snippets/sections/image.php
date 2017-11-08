<?php $image = $data->image()->toFile() ?>
  <?php if($image): ?>
	<figure class="image <?= $data->class(); ?>">
	  <img src="<?= $image->url(); ?>" width="<?= $image->width(); ?>" height="<?= $image->height(); ?>" alt="<?= $image->description(); ?><?php if ($image->credit()->isNotEmpty()): ?> (<?= $image->credit() ?>)<?php endif; ?>">
	  <figcaption class="bodyText col-lg-8 offset-lg-2"><?= $image->caption(); ?> <?php if ($image->credit()->isNotEmpty()): ?><small>(<?= $image->credit() ?>)</small><?php endif; ?></figcaption>
	</figure>
  <?php endif; ?>