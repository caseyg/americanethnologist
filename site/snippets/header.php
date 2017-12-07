<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>"  prefix="og: http://ogp.me/ns#">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <?php echo $page->metaTags() ?>

  <link href="//cloud.typenetwork.com/projects/578/fontface.css/" rel="stylesheet" type="text/css">
  <script src="https://use.typekit.net/zsj4lxh.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/index.css') ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-48247744-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-48247744-1');
  </script>
</head>
<body id="<?php echo $page->slug() ?>">
  <div class="container">
    <?php pattern('navigation/header') ?>
