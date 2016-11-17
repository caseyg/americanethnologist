<?php snippet('header') ?>

<form>
  <input type="search" name="q" value="<?php echo esc($query) ?>">
  <input type="submit" value="Search">
</form>

<ul>
  <?php foreach($results as $result): ?>
  <li>
    <a href="<?php echo $result->url() ?>">
      <?php echo $result->title()->html() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>
