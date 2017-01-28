<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->parent()->siblings()->visible())) ?>

<hr>

<div class="jumbotron p-0">
  <div class="row">
      <div class="col-sm-6">
        <h1 class="p-1"><?php echo $page->theme() ?></h1>
        <p class="sans mx-1">
          <strong><?php echo $page->dates() ?></strong><br>
          <?php echo $page->location() ?>
        </p>
      </div>
      <?php if ($page->hasImages()): ?><img src="<?php echo $page->images()->first()->resize(600,400)->url() ?>" class="col-sm-6 img-fluid"><?php endif; ?>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <div id="scroll-nav">
        <h5>On this page</h5>
        <nav class="nav nav-pills nav-stacked nav--sidebar">
          <?php foreach($page->moduleList() as $module): ?>
            <a class="nav-link" href="#<?php echo $module->slug() ?>"><?php echo $module->title(); ?></a>
          <?php endforeach; ?>
        </nav>
    </div>
  </div>
  <div class="col-sm-8 meeting-info">
    <?php $page->modules() ?>
  </div>
</div>

<?php snippet('footer') ?>
