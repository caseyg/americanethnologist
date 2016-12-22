<ul>
  <?php foreach($articles as $a): ?>
    <?php if ($slug == true):
      $a = $site->index()->findBy('slug', $article)
    endif; ?>
    <li><a href="<?php echo $a->url() ?>"><?php echo $a->title() ?></a></li>
  <?php endforeach ?>
</ul>
