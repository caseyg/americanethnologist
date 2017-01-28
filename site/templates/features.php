<?php snippet('header') ?>

<?php if ($page->depth() > 1): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>
<?php else: ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->children()->visible())) ?>
<?php endif; ?>

<hr>

<ul class="list-unstyled">
  <?php if ($page->depth() == 1) {
    $pages = $page->grandchildren();
  } elseif ($page->depth() == 2) {
    $pages = $page->children();
  } ?>
  <?php foreach ($pages->visible()->sortBy('date', 'desc') as $i): ?>
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
  <?php endforeach; ?>
</ul>

<?php $page->modules() ?>

<?php snippet('footer') ?>
