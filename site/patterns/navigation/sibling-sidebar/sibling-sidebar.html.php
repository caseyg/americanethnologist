<div class="sibling-sidebar">
  <?php if ($page->depth() > 1): ?>

    <p class="h5"><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></p>
    <nav class="nav nav-pills nav-stacked">
      <?php foreach ($page->siblings()->visible() as $p): ?>
        <a class="nav-link  <?php e($site->find($p)->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
      <?php endforeach; ?>
    </nav>

  <?php elseif ($page->depth() == 1): ?>

    <p class="h5"><a href="<?php echo $page->url() ?>" class="active"><?php echo $page->title() ?></a></p>
    <nav class="nav nav-pills nav-stacked">
      <?php foreach ($page->children()->visible() as $p): ?>
        <a class="nav-link  <?php e($site->find($p)->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
      <?php endforeach; ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse" id="exCollapsingNavbar">
        <div class="bg-inverse text-muted p-1">
          <h4>Collapsed content</h4>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
    </nav>

  <?php endif ?>
</div>
