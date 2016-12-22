<nav class="text-xs-center">
  <ul class="nav nav-pills">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">AE Journal</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Research Articles</a>
        <a class="dropdown-item" href="#">Editorials</a>
        <a class="dropdown-item" href="#">Forums</a>
        <a class="dropdown-item" href="#">Book Reviews</a>
      </div>
    </li>
    <li class="nav-item dropdown">

      <a class="nav-link dropdown-toggle <?php if ($page->depth() > 2): ?> active<?php endif; ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php if ($page->depth() > 2): ?>Browse <?php echo $page->title() ?><?php else: ?>Browse&hellip;<?php endif; ?></a>
      <div class="dropdown-menu">
        <?php foreach ($pages->find('read/browse')->children()->visible() as $p): ?>
          <a class="dropdown-item <?php if ($p->isActive()): ?>active<?php endif; ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
        <?php endforeach; ?>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Access &amp; Subscriptions</a>
    </li>
  </ul>
</nav>
