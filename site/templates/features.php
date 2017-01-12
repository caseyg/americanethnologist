<?php snippet('header') ?>

<?php if ($page->depth() > 1): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>
<?php else: ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->children()->visible())) ?>
<?php endif; ?>

<hr>

<?php if ($page->depth() == 1): ?>

<div id="carousel-example-generic" class="carousel slide mb-2" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php $n = -1; ?>
    <?php foreach ($page->grandchildren()->sortby('date')->limit(3) as $i): $n++; ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $n ?>"></li>
  <?php endforeach; ?>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php $n = -1; ?>
    <?php foreach ($page->grandchildren()->sortby('date')->limit(3) as $i): $n++; ?>
      <div class="carousel-item <?php if($n == 0): echo "active"; endif; ?>">
        <img src="http://placehold.it/2000x1000" alt="First slide">
        <div class="carousel-caption">
          <h6 class="bentonsansreregular"><?php echo $i->parent()->title() ?></h6>
          <h3><?php echo $i->title() ?></h3>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php endif; ?>

<ul class="list-unstyled">
  <?php if ($page->depth() == 1) {
    $pages = $page->grandchildren();
  } elseif ($page->depth() == 2) {
    $pages = $page->children();
  } ?>
  <?php foreach ($pages->sortby('date') as $i): ?>
    <li class="mb-1">
      <a href="<?php echo $i->url() ?>">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="http://placehold.it/100x100" alt="Generic placeholder image">
          </div>
          <div class="media-body">
            <h6 class="bentonsansreregular"><?php echo $i->parent()->title() ?></h6>
            <h5 class="media-heading bentonsansrebold" style="line-height:1.35;"><?php echo $i->title() ?></h6>
            <h6 class="bentonsansreregular"><?php echo $i->date("M d, Y") ?></h6>
          </div>
        </div>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<?php $page->modules() ?>

<?php snippet('footer') ?>
