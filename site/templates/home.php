<?php snippet('header') ?>

<div class="row">
  <div class="col-md-4">
    <h6 class="mt-1"><?= $page->welcome_header() ?></h6>
    <?= $page->welcome_text()->kt() ?>
  </div>
  <div class="col-md-8">
    <div id="carousel" class="carousel slide mb-2" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php $n = -1; ?>
        <?php foreach ($page->images() as $i): $n++; ?>
        <li data-target="#carousel" data-slide-to="<?php echo $n ?>"></li>
      <?php endforeach; ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php $n = -1; ?>
        <?php foreach ($page->images() as $i): $n++; ?>
          <div class="carousel-item <?php if($n == 0): echo "active"; endif; ?>">
            <img src="<?php echo $i->crop(3000,2000)->url() ?>" alt="<?php echo $i->caption() ?> <?php echo $i->credit() ?>">
            <div class="carousel-caption">
              <p>
                <?php echo $i->caption() ?><br>
                <small><?php echo $i->credit() ?></small>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <?php $page->modules() ?>
</div>
</div>

<?php snippet('footer') ?>
