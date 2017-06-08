<figure class="col-sm-6 col-md-4">
  <h6 class="mt-1"><a href="/meetings">Meetings</a></h6>
  <?php foreach ($pages->find('meetings')->grandchildren()->visible()->limit(1) as $i): ?>
    <a class="text d-block" href="<?php echo $i->url() ?>">
      <img src="<?php echo $i->images()->first()->resize(600,400)->url() ?>" class="img-fluid mb-1">
      <p class="text-xs-center">
        <strong><?php echo $i->title() ?></strong><br>
        <?php echo $i->dates() ?><br>
        <em><?php echo $i->location() ?></em>
      </p>
    </a>
  <?php endforeach; ?>
</figure>
