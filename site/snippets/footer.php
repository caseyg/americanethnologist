    <footer class="footer" role="contentinfo">
        <p class="footer-copyright"><?php
          // Parse Kirbytext to support dynamic year,
          // but remove all HTML like paragraph tags:
          echo html::decode($site->copyright()->kirbytext())
        ?></p>
    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/5450ef4433.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/instantclick/3.0.1/instantclick.min.js" data-no-instant></script>
  <script data-no-instant>InstantClick.init();</script>
</body>
</html>
