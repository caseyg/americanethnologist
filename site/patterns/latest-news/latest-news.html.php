<figure class="col-sm-12 col-md-4">
  <h6 class="mt-1"><a href="/news">Latest News</a></h6>
  <?php foreach ($pages->find('news')->children()->sortBy('date', 'desc')->visible()->limit(3) as $i): ?>
      <hr>
      <p class="sans mb-0"><?php echo $i->date("M d, Y") ?></p>
      <p><a href="<?php echo $i->url() ?>"><?php echo $i->title() ?></a></p>
  <?php endforeach ?>
  <hr>
</figure>
