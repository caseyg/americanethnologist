<?php snippet('header') ?>

<?php pattern('navigation/horizontal', array('pages' => $page->siblings()->visible())) ?>

<hr id="more">

<?php pattern('heading-title') ?>

<div class="row">
  <div class="col-sm-3">
    <?php if ($page->deadline()->isNotEmpty()): ?>
      <h6>Deadline</h6>
      <p class="sans"><?php echo $page->deadline() ?></p>
    <?php endif; ?>

    <?php if ($page->prize()->isNotEmpty()): ?>
      <h6 class="mt-2">Prize</h6>
      <p class="sans"><?php echo $page->prize() ?></p>
    <?php endif; ?>
  </div>
  <div class="col-sm-8">
    <div class="lead">
      <?php echo $page->intro()->kt() ?>
    </div>
    <?php echo $page->text()->kt() ?>
  </div>
</div>

<?php if ($page->children()->count() > 0): ?>
  <hr id="awardees">

  <section>
    <h2 class="mt-3 mb-2">Awardees</h2>

    <div class="row">
      <?php pattern('awardees-list') ?>
    </div>
  </section>
<?php endif; ?>

<?php snippet('footer') ?>
