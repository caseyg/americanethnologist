<?php snippet('header') ?>

<?php if ($page->parent()->title() != "News"): ?>
  <?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>
  <hr>
<?php endif; ?>

<div class="col-xs-12">
	<?php pattern('heading-title') ?>

	<h6 class="bentonsansreregular mb-2"><?php echo $page->date("M d, Y") ?></h6>

    <?php foreach($page->builder()->toStructure() as $section): ?>
      <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
    <?php endforeach ?>

</div>

<?php snippet('footer') ?>
