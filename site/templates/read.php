<?php snippet('header') ?>

<?php pattern('navigation/read') ?>

<hr>

<div class="row">
  <div class="col-sm-3 push-sm-9">
    <h3><a href="/features">Features</a></h3>
    <p><em>Online-only interviews, news, and resources.</em></p>
    <a href="http://americanethnologist.dev/features/interviews/lila-abu-lughod-interview">
      <img src="http://placehold.it/300x200" class="img-fluid" alt="">
      <h6 class="mt-1">Ten questions about anthropology, feminism, Middle East politics, and publics</h6>
    </a>
    <a href="/features" class="btn bg-background btn-secondary btn-outline mt-1">Browse more features <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    <hr>
  </div>
  <div class="col-sm-8 pull-sm-3">
    <h1>American Ethnologist</h1>
    <h5 class="mb-2">Journal of the American Ethnological Society</h5>
    <hr>
    <img class="img-thumbnail float-sm-right ml-1 mb-1" src="<?php echo $pages->find('read/journal')->children()->first()->images()->first()->url() ?>" alt="">
    <p><em>Current Issue:</em>&nbsp;  <strong>November 2016</strong> — Volume 43 | Issue 4</p>
    <p class="lead">The cross-publics of ethnography, aesthetics on Tahrir Square, oil and the Cofán, anti-FGM campaigns in Ghana, dance in Guinea, corruption in Indonesia, fair-trade bananas in Dominica, food production in Italy, Tokyo’s sex industry, humanitarianism in Bosnia and Herzegovina, international criminal courtrooms, and lots more.</p>
    <a href="#" class="btn bg-background btn-secondary btn-outline">Read issue <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    <hr>

    <h2>Previous Issues</h2>

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h3>August</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h3>February</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">

          </div>
        </div>
      </div>
    </div>

    <h2>Access &amp; Subscriptions</h2>


    <?php $page->modules() ?>
  </div>
</div>

<?php snippet('footer') ?>
