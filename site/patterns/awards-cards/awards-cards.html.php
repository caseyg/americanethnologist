<?php foreach ($page->children()->visible() as $p): ?>
  <hr class="mt-3">
  <div class="row">
    <div class="col-sm-5">
      <h3><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></h3>
      <p><?php echo $p->intro() ?></p>
      <p><a class="btn btn-outline-primary" href="<?php echo $p->url() ?>">Read more</a></p>
    </div>
    <div class="col-sm-6 push-sm-1">
      <div class=" bg-background">
        <div class="card-block row">
          <div class="col-sm-6">
            <?php if ($p->prize()->isNotEmpty()): ?>
              <h6>Prize</h6>
              <p class="sans"><?php echo $p->prize() ?></p>
              <hr>
            <?php endif; ?>
            <?php if ($p->deadline()->isNotEmpty()): ?>
              <h6>Deadline</h6>
              <p class="sans"><?php echo $p->deadline() ?></p>
            <?php endif; ?>
          </div>
          <div class="col-sm-5 push-sm-1">
            <h6>Current Awardee</h6>
            <a class="sans" href="#"><strong>Land’s End: Capitalist Relations on an Indigenous Frontier</strong> by Tania Murray Li</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
