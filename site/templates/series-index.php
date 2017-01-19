<?php snippet('header') ?>

<?php if ($page->depth() > 1): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>
<?php else: ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->children()->visible())) ?>
<?php endif; ?>

<hr>

<div class="row mb-3">
  <div class="col-sm-3">
    <?php if ($page->depth() == 1) {
      $pages = $page->grandchildren();
    } elseif ($page->depth() == 2) {
      $pages = $page->children();
    } ?>
    <p><em>Ongoing</em></p>
    <ul class="list-unstyled">
      <?php foreach ($pages->sortby('date')->filterBy('ongoing', '==', '1') as $i): ?>
        <li class="mb-1">
          <a href="<?php echo $i->url() ?>">
            <div class="media">
              <div class="media-body">
                <h5 class="media-heading bentonsansrebold" style="line-height:1.35;"><?php echo $i->title() ?></h6>
                <h6 class="bentonsansreregular"><?php echo $i->dates() ?></h6>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <hr>
    <p><em>More</em></p>
    <ul class="list-unstyled">
      <?php foreach ($pages->sortby('date')->filterBy('ongoing', '==', '0') as $i): ?>
        <li class="mb-1">
          <a href="<?php echo $i->url() ?>">
            <div class="media">
              <div class="media-body">
                <h5 class="media-heading bentonsansrebold" style="line-height:1.35;"><?php echo $i->title() ?></h6>
                <h6 class="bentonsansreregular"><?php echo $i->dates() ?></h6>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="col-sm-8">
  </div>
</div>

<?php $page->modules() ?>

<?php snippet('footer') ?>
