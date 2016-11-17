<header class="row pt-2">
  <div class="col-xs-12 col-sm-2">
    <h1><a href="/"><span class="bentonsanscondensedblack">(&aelig;s)</span></a></h1>
  </div>
  <div class="col-xs-4 col-sm-3">
    <ul class="list-unstyled">
      <li><strong><?php echo $site->nav_col1() ?></strong></li>
      <?php foreach ($site->nav_col1_links()->toStructure() as $p): ?>
        <li><a <?php e($site->find($p)->isOpen(), ' class="active"') ?> href="<?php echo $site->find($p)->url() ?>"><?php echo $site->find($p)->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="col-xs-4 col-sm-3">
    <ul class="list-unstyled">
      <li><strong><?php echo $site->nav_col2() ?></strong></li>
      <?php foreach ($site->nav_col2_links()->toStructure() as $p): ?>
        <li><a <?php e($site->find($p)->isOpen(), ' class="active"') ?> href="<?php echo $site->find($p)->url() ?>"><?php echo $site->find($p)->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="col-xs-4 col-sm-3">
    <ul class="list-unstyled">
      <li><strong><?php echo $site->nav_col3() ?></strong></li>
      <?php foreach ($site->nav_col3_links()->toStructure() as $p): ?>
        <li><a <?php e($site->find($p)->isOpen(), ' class="active"') ?> href="<?php echo $site->find($p)->url() ?>"><?php echo $site->find($p)->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="col-xs-12 col-sm-1 text-xs-center text-sm-right">
    <ul class="list-unstyled">
      <li class="col-xs-4 col-xs-12"><a href="/search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
</a></li>
    </ul>
  </div>
</header>
