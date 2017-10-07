<?php
$authors = $author->split(',');
$count = count($authors);
$index = 0;?>
<?php if($count == 1): ?>
  <?= $author ?>
<?php elseif($count == 2): ?>
  <?php foreach($authors as $a): $index++; ?>
    <?php if($count !== $index): ?>
      <?= $a ?>
    <?php else: ?>
      <em>and</em> <?= $a ?>
    <?php endif; ?>
  <?php endforeach; ?>
<?php elseif($count >= 3): ?>
  <?php foreach($authors as $a): $index++; ?>
    <?php if($count !== $index): ?>
      <?= $a ?>,
    <?php else: ?>
      <em>and</em> <?= $a ?>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>
