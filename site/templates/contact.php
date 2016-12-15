<?php snippet('header') ?>

  <div class="row">
    <div class="col-sm-3 push-sm-9">
      <?php if ($page->depth() > 1): ?>
        <?php pattern('navigation/sidebar', array('pages' => $page->parent()->children()->visible())) ?>
      <?php else: ?>
        <?php pattern('navigation/sidebar', array('pages' => $page->children()->visible())) ?>
      <?php endif ?>
    </div>
    <div class="col-sm-8 pull-sm-3">

      <form class="form-horizontal" role="form" method="post" action="#">
      	<div class="form-group">
      		<label for="name" class="col-sm-2 control-label">Name</label>
      		<div class="col-sm-10">
      			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
      		</div>
      	</div>
      	<div class="form-group">
      		<label for="email" class="col-sm-2 control-label mt-1">Email</label>
      		<div class="col-sm-10">
      			<input type="email" class="form-control mt-1" id="email" name="email" placeholder="example@domain.com" value="">
      		</div>
      	</div>

      	<div class="form-group">
      		<label for="message" class="col-sm-2 control-label mt-1">Message</label>
      		<div class="col-sm-10">
      			<textarea class="form-control mt-1" rows="4" name="message"></textarea>
      		</div>
      	</div>

      	<div class="form-group">
      		<div class="col-sm-10 push-sm-2 mt-1">
      			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
      		</div>
      	</div>
      	<div class="form-group">
      		<div class="col-sm-10 col-sm-offset-2">
      			<! Will be used to display an alert to the user>
      		</div>
      	</div>
      </form>

    </div>
  </div>

<?php snippet('footer') ?>
