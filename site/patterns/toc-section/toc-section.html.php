<h2 class="mt-3 text-xs-center"><?php echo $module->title() ?></h2>
<hr>
<?php $articles = $module->articles()->toStructure(); ?>
<?php foreach ($articles as $a): ?>
  <?php $a = page($a); ?>
  <div class="row">
    <a href="<?php if ($a->intendedTemplate() == 'bookreview'): ?><?php echo $a->wiley() ?><?php else: ?><?php echo $a->url() ?><?php endif; ?>" class="mt-3 d-block text-xs-center">
      <h3 class="mb-0"><?php echo $a->title() ?></h3>
      <h4 class="mb-1 bentonsanscondensedregular"><?php echo $a->subtitle() ?></h4>
      <?php if ($a->book_author()->isNotEmpty()): ?>
        <p class="gray--600"><em>by</em> <strong><?php echo $a->book_author() ?></strong>, <em>reviewed by</em> <strong><?php echo $a->author() ?></strong></p>
      <?php else: ?>
        <p class="gray--600"><em>by</em> <strong><?php echo $a->author() ?></strong></p>
      <?php endif; ?>
      <?php if ($a->featuredImage()->isNotEmpty()): ?>
        <figure class="toc__figure">
          <img src="<?php echo $a->featuredImage()->toFile()->resize(500,500)->url() ?>" alt="<?php echo $a->featuredImage()->caption() ?>">
          <figcaption><?php echo $a->featuredImage()->toFile()->caption() ?> <?php if ($a->featuredImage()->toFile()->caption()->isNotEmpty()): ?>  (<?php echo $a->featuredImage()->toFile()->credit() ?>)<?php endif; ?></figcaption>
        </figure>
      <?php endif; ?>
    </a>
    <?php if ($a->related()->isNotEmpty()): ?>
      <?php $r = page($a->related()) ?>
      <div class="card bg-background col-sm-8 offset-sm-2 mt-1">
        <div class="card-block">
          <div class="media">
            <?php if ($r->hasImages()): ?>
              <a class="media-left" href="<?php echo $r->url() ?>">
                  <img class="media-object" src="<?php echo $r->images()->first()->resize(100,100)->url() ?>" alt="Generic placeholder image">
              </a>
            <?php endif; ?>
            <div class="media-body pl-1">
              <h6 class="bentonsansrebold" style="opacity:.65"><?php echo $r->parent()->title() ?></h6>
              <h6 class="media-heading bentonsansreregular" style="line-height:1.35;"><a href="<?php echo $r->url() ?>"><?php echo $r->title() ?></a></h6>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
<?php endforeach; ?>
