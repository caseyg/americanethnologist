<nav>
  <ul class="nav nav-pills nav--horizontal">
    <?php foreach ($pages as $p): ?>
      <li class="nav-item">
        <a class="nav-link  <?php e($site->find($p)->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
