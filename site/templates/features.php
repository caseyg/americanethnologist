<?php snippet('header') ?>

<?php if ($page->depth() > 1): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>
  <hr>
<?php endif; ?>

<div class="row">
<?php if ($page->depth() == 1): ?>
  <?php foreach ($page->children()->visible() as $i): ?>
    <div class="col-md-6 mb-1">
      <h2 class="h4 text-xs-center"><a href="<?php echo $i->url() ?>"><?php echo $i->title() ?></a></h2>
      <ul class="list-unstyled">
        <?php $n = 0; ?>
        <?php foreach ($i->children()->visible()->flip()->limit(3) as $i): $n++; ?>
          <li class="mb-1">
            <a href="<?php echo $i->url() ?>">
              <div class="media">
                <?php if ($n == 1): ?>
                  <?php if ($i->hasImages()): ?>
                    <img class="media-object img-fluid mb-1" src="<?php echo $i->images()->first()->crop(400,250)->url() ?>">
                  <?php endif; ?>
                <?php endif; ?>
                <div class="media-body">
                  <h5 class="media-heading bentonsansrebold" style="line-height:1.35;"><?php echo $i->title() ?></h6>
                  <h6 class="bentonsansreregular"><?php echo $i->date("M d, Y") ?></h6>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
</div>

<ul class="list-unstyled">
  <?php if ($page->depth() == 2) {
    $pages = $page->children();
  } ?>
  <?php
    if ($page->depth() == 2):
    foreach ($pages->visible()->sortBy('date', 'desc') as $i): ?>
    <li class="mb-1">
      <a href="<?php echo $i->url() ?>">
        <div class="media">
          <div class="media-body">
            <?php if ($page->title() != $i->parent()->title()): ?><h6 class="bentonsansreregular"><?php echo $i->parent()->title() ?></h6><?php endif; ?>
            <h5 class="media-heading bentonsansrebold" style="line-height:1.35;"><?php echo $i->title() ?></h6>
            <h6 class="bentonsansreregular"><?php echo $i->date("M d, Y") ?></h6>
          </div>
          <?php if ($i->hasImages()): ?>
            <div class="media-right">
              <img class="media-object" src="<?php echo $i->images()->first()->resize(100,100)->url() ?>" alt="Generic placeholder image">
            </div>
          <?php endif; ?>
        </div>
      </a>
    </li>
    <hr>
  <?php endforeach;
  endif;?>

</ul>

<?php $page->modules() ?>

<?php snippet('footer') ?>
