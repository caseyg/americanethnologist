<div class="container-fluid bg-green">
  <div class="container">
    <?php snippet("logo") ?>
    <footer class="footer pt-3 py-3" role="contentinfo">
      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>
    </footer>
  </div>
</div>
