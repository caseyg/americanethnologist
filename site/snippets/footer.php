  </div>

  <?php pattern("navigation/footer") ?>

  <script data-no-instant src="/assets/js/jquery.min.js"></script>
  <script data-no-instant src="/assets/js/tether.min.js"></script>
  <script data-no-instant src="/assets/js/bootstrap.min.js"></script>
  <script data-no-instant src="https://use.fontawesome.com/5450ef4433.js"></script>
  <script data-no-instant src="/assets/js/instantclick.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script>
    var $carousel = $('.carousel').flickity({
      cellSelector: 'img',
      imagesLoaded: true,
      percentPosition: false
    });
    var $caption = $('.caption');
    // Flickity instance
    var flkty = $carousel.data('flickity');

    $carousel.on( 'select.flickity', function() {
      // set image caption using img's alt
      $caption.text( flkty.selectedElement.alt )
    });
  </script>
  <script async data-no-instant src="https://www.googletagmanager.com/gtag/js?id=UA-48247744-1"></script>
  <?php if(!$site->user()): ?>
    <script data-no-instant>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-48247744-1');

      InstantClick.on('change', function() {
        ga('send', 'pageview', location.pathname + location.search);
      });

      InstantClick.init('mousedown');
    </script>
  <?php endif; ?>

  <?php snippet('plugin.panelBar') ?>
</body>
</html>
