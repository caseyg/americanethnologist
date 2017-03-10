<?php if($page->display_as_list() == '1'): ?>
  <hr>
    <ul class="list-unstyled">
      <?php foreach($page->children()->visible()->flip() as $p): ?>
        <li>
          <a class="sans row" href="<?php echo $p->url() ?>">
            <div class="col-xs-12 col-sm-3 text-sm-right">
              <h6><?php echo $p->award_year() ?> <?php echo $p->award_type() ?></h6>
            </div>
            <div class="col-xs-12 col-sm-9">
              <h4><?php echo $p->awardee_title() ?></h4>
              <h6>by <?php echo $p->awardee_name() ?></h6>
            </div>
          </a>
        </li>
        <hr>
      <?php endforeach; ?>
    </ul>
<?php else: ?>
  <?php $i = 0;
  foreach ($page->children()->visible()->flip() as $p): $i++; ?>
    <?php if ($p->award_year()->isNotEmpty() && $p->award_type()->isNotEmpty() && $p->awardee_title()->isNotEmpty() && $p->awardee_name()->isNotEmpty()): ?>
      <a class="sans col-xs-6 col-md-3 mb-3" href="<?php echo $p->url() ?>">
        <?php if ($p->images()->count() > 0): ?>
          <img src="<?php echo $p->images()->first()->url() ?>" class="img-fluid mb-1" alt="">
        <?php else: ?>
          <img src="http://placehold.it/255x383" class="img-fluid mb-1" alt="">
        <?php endif; ?>
        <h6><?php echo $p->award_year() ?> <?php echo $p->award_type() ?></h6>
        <h4><?php echo $p->awardee_title() ?></h4>
        <h6>by <?php echo $p->awardee_name() ?></h6>
      </a>
    <?php else: ?>
      <a class="sans col-xs-6 col-md-3" href="<?php echo $p->url() ?>">
        <?php if ($p->images()->count() > 0): ?>
          <img src="<?php echo $p->images()->first()->url() ?>" class="img-fluid mb-1" alt="">
        <?php else: ?>
          <img src="http://placehold.it/255x383" class="img-fluid mb-1" alt="">
        <?php endif; ?>
        <h6><?php echo $p->title() ?></h6>
      </a>
    <?php endif; ?>
    <?php e($i % 4 == 0, '<div class="clearfix"></div>') ?>
  <?php endforeach; ?>
<?php endif; ?>
