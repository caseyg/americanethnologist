<?php foreach ($page->children()->visible() as $p): ?>
  <div class="row mt-3">
    <div class="col-sm-4">
      <h3><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></h3>
      <p><?php echo $p->intro() ?></p>
      <p><?php echo $p->deadline() ?></p>
      <p><a class="btn btn-secondary bg-background" href="<?php echo $p->url() ?>#more">Read more</a> <?php if ($p->children()->count() > 0): ?><a class="btn btn-secondary bg-background" href="<?php echo $p->url() ?>#awardees">Browse awardees</a><?php endif; ?></p>
    </div>
    <div class="col-sm-8">
      <?php if ($p->children()->count() > 0): ?>
        <div class="row">
          <?php foreach ($p->children()->visible()->limit(3) as $p): ?>
            <a class="sans col-sm-4" href="<?php echo $p->url() ?>">
              <h6><?php echo $p->award_year() ?> <?php echo $p->award_type() ?></h6>
              <?php if ($p->images()->count() > 0): ?>
                <img src="<?php echo $p->images()->first()->url() ?>" class="img-fluid mb-1" alt="">
              <?php endif; ?>
              <h4><?php echo $p->awardee_title() ?></h4>
              <h6>by <?php echo $p->awardee_name() ?></h6>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endforeach; ?>
