<?php snippet('header') ?>

<form class="form-inline search-form text-xs-center" role="search">
  <p class="lead">Type below to search the AES site:</p>
    <div class="form-group form-group-lg mt-2 pb-3 d-block">
        <input type="search" name="q" class="form-control form-control-lg" placeholder="Search"  value="<?php echo esc($query) ?>">
        <button type="submit" value="Search" class="btn btn-default btn-lg"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
</form>

<ul class="list-unstyled">
  <?php foreach($results as $result): ?>
  <li>
  <?php if ($result->parent()->hasModules()): ?>
    <a href="<?php echo $result->parent()->parent()->url() ?>">
      <?php echo $result->parent()->parent()->title()->kt() ?>
      <blockquote>
        <?php
            $char_before = 70;
            $char_after = 70;
            $result_wrap_left = '<mark class="highlight">';
            $result_wrap_right = '</mark>';
            $outer_wrap = '...';

            $pos = stripos($result->text(), esc($query));

            $output = $outer_wrap;
            $output.= substr($result->text(), $pos-$char_before, $char_before);
            $output.= $result_wrap_left;
            $output.= substr($result->text(), $pos, strlen(esc($query)));
            $output.= $result_wrap_right;
            $output.= substr($result->text(), $pos+strlen(esc($query)), $char_after);
            $output.= $outer_wrap;

            print($output);
            ?>
      </blockquote>
    </a>
  <?php else: ?>
    <a href="<?php echo $result->url() ?>">
      <?php echo $result->title()->html() ?>
      <blockquote>
        <?php
            $char_before = 70;
            $char_after = 70;
            $result_wrap_left = '<mark class="highlight">';
            $result_wrap_right = '</mark>';
            $outer_wrap = '...';

            $pos = stripos($result->text(), esc($query));

            $output = $outer_wrap;
            $output.= substr($result->text(), $pos-$char_before, $char_before);
            $output.= $result_wrap_left;
            $output.= substr($result->text(), $pos, strlen(esc($query)));
            $output.= $result_wrap_right;
            $output.= substr($result->text(), $pos+strlen(esc($query)), $char_after);
            $output.= $outer_wrap;

            print($output);
            ?>
      </blockquote>
    </a>
  <?php endif; ?>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>
