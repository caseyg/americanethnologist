<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $pages->find('read/browse')->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <?php $authors = $site->index()->filterBy('template', 'article')->pluck('author') ?>
      <?php foreach ($authors as $author): ?>
        <h2><?php echo $author ?></h2>
        <ul>
          <?php foreach($site->index()->filterBy('author', '!=', '')->filterBy('template', 'article')->filterBy('author', '==', $author) as $article): ?>
            <li><a href="<?php echo $article->url() ?>"><?php echo $article->title() ?></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endforeach; ?>
  </div>
</div>

<?php snippet('footer') ?>
