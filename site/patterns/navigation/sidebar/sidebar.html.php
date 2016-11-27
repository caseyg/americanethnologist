<div class="nav--sidebar">
    <?php if ($page->depth() > 1): ?>
      <p class="h5"><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></p>
    <?php else: ?>
      <p class="h5"><a href="<?php echo $page->url() ?>" class="active"><?php echo $page->title() ?></a></p>
    <?php endif ?>
    <nav class="nav nav-pills nav-stacked nav--sidebar">
      <?php foreach ($pages as $p): ?>
        <a class="nav-link  <?php e($site->find($p)->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
      <?php endforeach; ?>
    </nav>
</div>
