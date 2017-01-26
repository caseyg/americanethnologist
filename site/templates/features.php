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
