<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $pages->find('read/browse')->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <?php foreach($site->index()->filterBy('template', 'journal') as $issue): ?>
      <li><a href="<?php echo $issue->url() ?>"><?php echo $issue->title() ?></a></li>
    <?php endforeach; ?>
  </div>
</div>

<?php snippet('footer') ?>
