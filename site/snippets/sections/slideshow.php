<div class="carousel carousel-main" data-flickity='{"imagesLoaded": true, "pageDots": false}'>
  <?php foreach($data->slideshow()->yaml() as $image): ?>
    <?php if($image = $page->image($image)): ?>
      <div class="carousel-cell">
        <img src="<?= $image->url(); ?>" width="<?= $image->width(); ?>" height="<?= $image->height(); ?>" alt="">
        <p><?= $image->description(); ?> <?php if ($image->credit()->isNotEmpty()): ?><small>(<?= $image->credit() ?>)</small><?php endif; ?></p>
      </div>
    <?php endif ?>
  <?php endforeach; ?>
</div>
<div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false, "prevNextButtons": false }'>
  <?php foreach($data->slideshow()->yaml() as $image): ?>
    <?php if($image = $page->image($image)): ?>
      <div class="carousel-cell"><?= $image->crop(100,100)->html(); ?></div>
    <?php endif ?>
  <?php endforeach; ?>
</div>

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<!-- or -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
<style media="screen">
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  margin-bottom: 40px;
}

.carousel-main .carousel-cell, .carousel-main .carousel-cell img {
  width: 100%;
  height: auto;
}

.carousel-cell {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    margin-right: 50px;
}

.carousel-nav .carousel-cell {
  border: 2px solid #ccc;
  margin-right: 10px;
  cursor: pointer;
}

.carousel-nav .carousel-cell.is-nav-selected {
  border: 2px solid #000;
}
</style>
