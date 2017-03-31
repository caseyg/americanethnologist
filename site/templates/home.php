<?php snippet('header') ?>

</div>

<div class="container-fluid bg-blockquote">
  <div class="container pt-3 pb-3">
      <div class="row">
        <div class="col-xs-12">
          <?php $page->modules() ?>
        </div>
      </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <figure class="col-sm-12 col-md-4">
        <h6 class="mt-1"><a href="/news">Latest News</a></h6>
        <?php foreach ($pages->find('news')->children()->sortBy('date', 'desc')->visible()->limit(3) as $i): ?>
            <hr>
            <p class="sans mb-0"><?php echo $i->date("M d, Y") ?></p>
            <p><a href="<?php echo $i->url() ?>"><?php echo $i->title() ?></a></p>
        <?php endforeach ?>
        <hr>
      </figure>
      <figure class="col-sm-6 col-md-4">
        <h6 class="mt-1"><a href="/read">Read American Ethnologist</a></h6>
        <?php foreach ($pages->find('read/journal')->children()->visible()->limit(1) as $j): ?>
          <a class="bg-text-secondary text p-1 d-block" href="<?php echo $j->url() ?>">
            <?php if ($j->coverimage()->isNotEmpty()): ?>
              <img class="mb-2 img-fluid" src="<?php echo $j->coverimage()->toFile()->url() ?>" width="200" height="400"  style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
            <?php else: ?>
              <img class="mb-2 img-fluid" src="http://placehold.it/200x256" width="200" height="400"  style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
            <?php endif; ?>
            <p><strong><?php echo date('F Y', $j->date()) ?></strong> — Volume <?php echo $j->volume() ?> | Issue <?php echo $j->issue() ?></p>
          </a>
        <?php endforeach; ?>
      </figure>
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
    </div>
  </div>
</div>

<?php snippet('footer') ?>
