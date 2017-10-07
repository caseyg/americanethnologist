<section class="excerpt">
  <blockquote>
    <?= $data->text() ?>
  </blockquote>
  <div class="citation">
    <a href="<?= $data->link() ?>"><?= $data->title() ?></a>, <?= $data->date_text() ?>
  </div>
</section>
