<?php snippet('header') ?>

<?php if ($page->parent()->title() != "News"): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>
  <hr>
<?php endif; ?>

<div class="col-xs-12">

	<h1 class="mt-3 "><?= $page->title()->html() ?></h1>
	<?php if ($page->subtitle()->isNotEmpty()): ?><h2><?= $page->subtitle()->html() ?></h2><?php endif; ?>
	<?php if ($page->author()->isNotEmpty()): ?>
	  <p class="gray--600"><em>by</em>
	    <?php snippet('author', array('author' => $page->author())) ?>
	  </p>
	<?php endif; ?>

	<h6 class="bentonsansreregular mb-2"><?php echo $page->date("M d, Y") ?></h6>

  <?php pattern('social-buttons') ?>

	<hr>

    <?php foreach($page->builder()->toStructure() as $section): ?>
      <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
    <?php endforeach ?>

</div>

<?php snippet('footer') ?>
