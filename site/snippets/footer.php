  </div>

  <?php pattern("navigation/footer") ?>

  <script data-no-instant src="/assets/js/jquery.min.js"></script>
  <script data-no-instant src="/assets/js/tether.min.js"></script>
  <script data-no-instant src="/assets/js/bootstrap.min.js"></script>
  <script data-no-instant src="https://use.fontawesome.com/5450ef4433.js"></script>
  <script data-no-instant src="/assets/js/instantclick.min.js"></script>
  <?php if(!$site->user()): ?><script data-no-instant>InstantClick.init('mousedown');</script><?php endif; ?>
  <?php snippet('plugin.panelBar') ?>
</body>
</html>
