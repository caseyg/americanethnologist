<header class="row pt-2">
  <div class="col-xs-12 col-sm-2">
    <h1><a href=""><span class="bentonsanscondensedblack">(&aelig;s)</span></a></h1>
  </div>

<ol>
  <?php foreach ($site->pages()->visible() as $page): ?>
    <?php echo $page->title() ?>
  <?php endforeach ?>
</ol>

  <div class="col-xs-4 col-sm-3">
    <ul class="list-unstyled">
      <li><strong>Society</strong></li>
      <li><a class="active" href="">About</a></li>
      <li><a href="">Join</a></li>
      <li><a href="">Awards</a></li>
    </ul>
  </div>
  <div class="col-xs-4 col-sm-3">
    <ul class="list-unstyled">
      <li><strong>Journal</strong></li>
      <li><a href="">Read</a></li>
      <li><a href="">Publish</a></li>
      <li><a href="">Masthead</a></li>
    </ul>
  </div>
  <div class="col-xs-4 col-sm-3">
    <ul class="list-unstyled">
      <li><strong>Conversations</strong></li>
      <li><a href="">Spring Conference</a></li>
      <li><a href="">AAA Sessions</a></li>
    </ul>
  </div>
  <div class="col-xs-12 col-sm-1 text-xs-center text-sm-right">
    <ul class="list-unstyled">
      <li class="col-xs-4 col-xs-12"><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
</a></li>
    </ul>
  </div>
</header>
