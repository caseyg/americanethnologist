<ul class="list-unstyled">
  <?php foreach ($pages->visible() as $p): ?>
    <li>
      <a href="<?php echo $site->find($p)->url() ?>"><?php echo $site->find($p)->title() ?></a>
      <?php if($p->hasChildren()): ?>
        <ul class="list">
          <?php foreach($p->children() as $c): ?>
            <li>
              <a<?php e($c->isOpen(), ' class="active"') ?> href="<?php echo $c->url() ?>"><?php echo $c->title()->html() ?></a>
              <?php if($c->hasChildren()): ?>
                <ul class="list">
                  <?php foreach($c->children() as $g): ?>
                    <li><a<?php e($g->isOpen(), ' class="active"') ?> href="<?php echo $g->url() ?>"><?php echo $g->title()->html() ?></a></li>
                  <?php endforeach ?>
                </ul>
              <?php endif ?>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </li>
  <?php endforeach ?>
</ul>
