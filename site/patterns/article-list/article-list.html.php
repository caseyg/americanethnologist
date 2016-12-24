<ul class="list-unstyled">
  <?php foreach($articles as $a): ?>
    <li class="list-unstyled-item"><?php echo $a->date('F Y') ?><h2><a href="<?php echo $a->url() ?>"><?php echo $a->title() ?></a></h2></li>
  <?php endforeach ?>
</ul>
