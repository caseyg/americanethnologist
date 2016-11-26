<?php if ($page->depth() > 1): ?>

<strong class="h6"><?php echo $page->parent()->title() ?></strong>
<nav class="nav nav-pills nav-stacked">
  <?php foreach ($page->siblings()->visible() as $p): ?>
    <a class="nav-link  <?php e($site->find($p)->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
  <?php endforeach; ?>
</nav>

<?php elseif ($page->depth() == 1): ?>
  <nav class="nav nav-pills nav-stacked">
    <a class="nav-link active" href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a>
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
