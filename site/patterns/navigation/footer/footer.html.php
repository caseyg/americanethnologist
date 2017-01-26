<div class="container-fluid bg-green mt-3" style="background-image: url('/assets/images/aes-logo-footer.png');background-position:top left;background-repeat:no-repeat;">
  <div class="container">
<!--    <?php snippet("logo") ?>-->
    <footer class="footer pt-3 py-3" role="contentinfo">
      <div class="row">
        <div class="col-xs-3">
          <h6>American <br>Ethnological <br>Society</h6>
          <ul class="list-unstyled">
            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="/contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
            <li><a href="/search"><i class="fa fa-search" aria-hidden="true"></i> Search</a></li>
          </ul>
        </div>
        <div class="col-xs-3">
          <h6>Society</h6>
          <ul class="list-unstyled">
            <li><a href="/about">About</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'about')) ?>
              </ul>
            </li>
            <li><a href="/join">Join</a></li>
            <li><a href="/awards">Awards</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'awards')) ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-xs-3">
          <h6>Journal</h6>
          <ul class="list-unstyled">
            <li><a href="/read">Read</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'read')) ?>
              </ul>
            </li>
            <li><a href="/submit">Submit</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'submit')) ?>
              </ul>
            </li>
            <li><a href="/masthead">Masthead</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'masthead')) ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-xs-3">
          <h6>Conversations</h6>
          <ul class="list-unstyled">
            <li><a href="/features">Features</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'features')) ?>
              </ul>
            </li>
            <li><a href="/meetings">Meetings</a>
              <ul>
                <?php snippet('navpage', array('navpage' => 'meetings')) ?>
              </ul>
            </li>
            <li>Social Media
            <ul>
              <li><a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
              <li><a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
              <li><a href="<?php echo $site->youtube() ?>"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
            </ul>
            </li>
          </ul>

        </div>
      </div>
      <p class="footer-copyright"><?php
        echo html::decode($site->copyright()->kirbytext())
      ?> American Ethnological Society</p>
    </footer>
  </div>
</div>
