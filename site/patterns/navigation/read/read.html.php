<nav class="text-xs-center">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link <?php if($pages->find('read/journal')->children()->first()->title() == $page->title()): ?>active<?php endif ?>" href="<?php echo $pages->find('read/journal')->children()->first()->url() ?>">Current Issue</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle <?php if ($page->parent()->slug() == 'browse' && $page->depth() > 2): ?> active<?php endif; ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php if ($page->parent()->slug() == 'browse' && $page->depth() > 2): ?>Browse <?php echo $page->title() ?><?php else: ?>Browse&hellip;<?php endif; ?></a>
      <div class="dropdown-menu">
        <?php foreach ($pages->find('read/browse')->children()->visible() as $p): ?>
          <a class="dropdown-item <?php if ($p->isActive()): ?>active<?php endif; ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
        <?php endforeach; ?>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($pages->find('read/access-subscriptions')->isActive()): ?>active<?php endif; ?>" href="http://americanethnologist.dev/read/access-subscriptions">Access &amp; Subscriptions</a>
    </li>
    <li class="nav-item ml-1 float-xs-right">
      <form class="form-inline" action="/search" method="get">
        <input class="form-control" name="q" type="text" placeholder="Search AE Journal...">
        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
    </li>
  </ul>
</nav>
