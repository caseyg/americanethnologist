<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-12">

    <?php $articles = $site->index()->filterBy('template', 'article')->filterBy('tags', param('filter'), ',')->sortBy('date', 'desc'); ?>

    <?php if ($articles->count() > 0): ?>
      <h1>Articles on <?php echo param('filter'); ?></h1>
      <?php pattern('article-list', array('articles' => $articles)) ?>
      <hr>
    <?php endif; ?>

    <h2>Popular Keywords</h2>

    <?php $tagcloud = tagcloud($site->index()->filterBy('template', 'article'), array('sort' => 'name', 'sortdir' => 'asc')) ?>

    <ul>
    <?php foreach($tagcloud->filterBy('results', '>', 1) as $tag): ?>
      <li style="font-size: <?php echo $tag->results/4 ?>rem;line-height:1;vertical-align:middle;" class="list-inline-item <?php if(param('filter') == $tag->name()): echo "active"; endif; ?>"><a href="<?php echo $tag->url() ?>" title="<?php echo $tag->results() ?>"><?php echo $tag->name() ?></a></li>
    <?php endforeach ?>
    </ul>

    <hr>

    <h2>Infrequently used tags</h2>

    <ul>
      <?php foreach($tagcloud->filterBy('results', '<=', 1) as $tag): ?>
        <li class="list-inline-item"><a href="<?php echo $tag->url() ?>" title="<?php echo $tag->results() ?>"><small><?php echo $tag->name() ?></small></a></li>
      <?php endforeach ?>
    </ul>

  </div>
</div>

<?php snippet('footer') ?>
