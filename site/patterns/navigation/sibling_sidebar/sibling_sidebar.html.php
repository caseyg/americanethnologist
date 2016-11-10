<nav class="nav nav-pills nav-stacked">
  <?php foreach ($page->siblings()->visible() as $p): ?>
    <a class="nav-link  <?php e($site->find($p)->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
  <?php endforeach; ?>
</nav>
