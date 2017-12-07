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
  <!-- Google Analytics -->
  <script data-no-instant>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48247744-1', 'auto');
  ga('send', 'pageview');
  </script>
  <!-- End Google Analytics -->
  <?php if(!$site->user()): ?>
    <script data-no-instant>
      InstantClick.on('change', function() {
        ga('send', 'pageview', location.pathname + location.search);
      });

      InstantClick.init('mousedown');
    </script>
  <?php endif; ?>

  <?php snippet('plugin.panelBar') ?>
</body>
</html>
