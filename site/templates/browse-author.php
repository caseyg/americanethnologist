<?php
$filter = param('filter');
?>
<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<nav aria-label="Page navigation">
  <ul class="pagination">
    <?php foreach (range('A', 'Z') as $letter):?>
      <li class="page-item <?php if($letter == $filter): echo "active"; endif; ?>"><a class="page-link bg-background" href="<?php echo $page->url() . "/filter:" . $letter ?>"><?php echo $letter ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <?php pattern('navigation/sidebar', array('pages' => $pages->find('read/browse')->children()->visible())) ?>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <?php
    if ($filter == ""): go('read/browse/author/filter:a'); endif; ?>
    <?php
    $authors = array_unique($site->index()->filterBy('template', 'article')->filterBy('author', '!=', '')->filter(function($a) use($filter) {
      return str::startsWith(substr(strrchr($a->author(), ' '), 1), strtoupper($filter));
    })->pluck('author'));
     ?>
      <?php
      usort($authors, function($a, $b) {
          $a = substr(strrchr($a, ' '), 1);
          $b = substr(strrchr($b, ' '), 1);
          return strcmp($a, $b);
      });
      ?>
      <?php foreach ($authors as $author): ?>
        <h6><?php echo $author ?></h6>
        <?php pattern('article-list', array('articles' => $site->index()->filterBy('author', '!=', '')->filterBy('template', 'article')->filterBy('author', '==', $author))) ?>
        <hr>
      <?php endforeach; ?>
  </div>
</div>

<?php snippet('footer') ?>
