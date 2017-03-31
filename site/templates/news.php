<?php snippet('header') ?>

<div class="row">

</div>
<ul class="list-unstyled col-md-8">
  <?php $pages = $page->children(); ?>
  <?php foreach ($pages->visible()->sortBy('date', 'desc') as $i): ?>
    <li class="mb-1">
      <a href="<?php echo $i->url() ?>">
        <div class="media">
          <div class="media-body">
            <?php if ($page->title() != $i->parent()->title()): ?><h6 class="bentonsansreregular"><?php echo $i->parent()->title() ?></h6><?php endif; ?>
            <h5 class="media-heading bentonsansrebold" style="line-height:1.35;"><?php echo $i->title() ?></h6>
            <h6 class="bentonsansreregular"><?php echo $i->date("M d, Y") ?></h6>
          </div>
          <?php if ($i->hasImages()): ?>
            <div class="media-right">
              <img class="media-object" src="<?php echo $i->images()->first()->resize(100,100)->url() ?>" alt="Generic placeholder image">
            </div>
          <?php endif; ?>
        </div>
      </a>
    </li>
    <hr>
  <?php endforeach; ?>
</ul>
<div class="col-md-4">
  <a class="twitter-timeline" href="https://twitter.com/AmEthno">Tweets by AmEthno</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<?php $page->modules() ?>

<?php snippet('footer') ?>
