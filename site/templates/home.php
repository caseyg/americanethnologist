<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link href="//cloud.typenetwork.com/projects/578/fontface.css/" rel="stylesheet" type="text/css">
  <script src="https://use.typekit.net/zsj4lxh.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">-->
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/index.min.css') ?>

</head>
<body>
  <div class="container">
    <header class="row pt-2 mb-2">
      <div class="col-xs-12 col-sm-5">
        <h1><a href="/"><span class="bentonsanscondensedblack">(&aelig;s)</span> American<br> Ethnological Society</a></h1>
      </div>
      <div class="col-xs-4 col-sm-2">
        <ul class="list-unstyled">
          <li><strong><?php echo $site->nav_col1() ?></strong></li>
          <?php foreach ($site->nav_col1_links()->toStructure() as $p): ?>
            <li><a <?php e($site->find($p)->isOpen(), ' class="active"') ?> href="<?php echo $site->find($p)->url() ?>"><?php echo $site->find($p)->title() ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="col-xs-4 col-sm-2">
        <ul class="list-unstyled">
          <li><strong><?php echo $site->nav_col2() ?></strong></li>
          <?php foreach ($site->nav_col2_links()->toStructure() as $p): ?>
            <li><a <?php e($site->find($p)->isOpen(), ' class="active"') ?> href="<?php echo $site->find($p)->url() ?>"><?php echo $site->find($p)->title() ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="col-xs-4 col-sm-2">
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

<?php snippet('footer') ?>
