<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $pages->find('read/browse')->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <?php $tags = $site->index()->filterBy('template', 'article')->pluck('tags', ',', false); ?>
    <ul class="tags list-inline">
      <?php foreach($tags as $tag): ?>
      <li class="list-inline-item">
        <a href="<?php echo url($page->url() . url::paramsToString([$tag])) ?>">
          <?php echo html($tag) ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<?php snippet('footer') ?>
