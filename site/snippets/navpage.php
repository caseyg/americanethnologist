<?php foreach ($site->index()->find($navpage)->children()->visible() as $p): ?>
  <li><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></li>
<?php endforeach; ?>
