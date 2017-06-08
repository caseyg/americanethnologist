<figure class="col-sm-6 col-md-4">
  <h6 class="mt-1"><a href="/read">Read American Ethnologist</a></h6>
  <?php foreach ($pages->find('read/journal')->children()->visible()->limit(1) as $j): ?>
    <a class="text d-block" href="<?php echo $j->url() ?>">
      <?php if ($j->coverimage()->isNotEmpty()): ?>
        <img class="mb-2 img-fluid" src="<?php echo $j->coverimage()->toFile()->url() ?>" width="200" height="400"  style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
      <?php else: ?>
        <img class="mb-2 img-fluid" src="http://placehold.it/200x256" width="200" height="400"  style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
      <?php endif; ?>
      <p><strong><?php echo date('F Y', $j->date()) ?></strong> — Volume <?php echo $j->volume() ?> | Issue <?php echo $j->issue() ?></p>
    </a>
  <?php endforeach; ?>
</figure>
