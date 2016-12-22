<h2><?php echo $module->title() ?></h2>
<?php pattern("article-list", array('slug' => true, 'articles' => $module->articles()->toStructure())) ?>
