<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $pages->find('read/browse')->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <?php foreach($site->index()->filterBy('template', 'journal')->filterBy('volume', '!=', '')->groupBy('volume') as $volume => $items): ?>
      <div class="row">
        <h2 class="h6 mb-1 col-xs-12">Volume <?php echo $volume ?></h2>
        <?php foreach ($items as $issue): ?>
          <a href="<?php echo $issue->url() ?>" class="col-xs-6 col-sm-3 mb-2">
            <img src="<?php echo $issue->images()->first()->url() ?>" class="img-fluid" style="box-shadow: 0 5px 10px rgba(0,0,0,.25);">
            <h2 class="h5 mt-1 mb-0 pb-0">Issue <?php echo $issue->issue() ?></h2>
            <p class="sans h5"><?php echo date('F Y', $issue->date()) ?></p></a>
        <?php endforeach; ?>
      </div>
      <hr>
    <?php endforeach; ?>
  </div>
</div>

<?php snippet('footer') ?>
