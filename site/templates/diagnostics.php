<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AES Content Diagnostics</title>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <h1>AES Content Diagnostics</h1>
    <h2>Articles With Incomplete Info</h2>
    <table class="sort table table-striped">
      <thead>
        <tr>
          <td>Parent</td>
          <td>Title</td>
          <td>Subtitle</td>
          <td>Has Author</td>
          <td>Has Wiley</td>
          <td>Has Cover Image</td>
          <td>Has Related Content</td>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($site->index()->filterBy('template', 'article')->sortBy('title') as $i): ?>
        <tr>
          <td><?php echo $i->parent()->title() ?></td>
          <td><a href="<?php echo $i->url() ?>"><?php echo $i->title() ?></a></td>
          <td><?php echo $i->subtitle() ?></td>
          <td <?php if ($i->author()->isNotEmpty()): echo 'class="table-success"'; endif; ?>><?php echo $i->author() ?></td>
          <td><?php if ($i->wiley()->isNotEmpty()): ?><a href="<?php echo $i->wiley() ?>">✅</a><?php else: ?>❔<?php endif; ?></td>
          <td <?php if ($i->coverimage()->isNotEmpty()): echo 'class="table-success"'; endif; ?>><?php echo $i->coverimage() ?></td>
          <td><?php echo $i->related() ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

    <hr>

    <h2>Every Page</h2>
    <ul>
      <?php foreach ($site->index()->sortBy('title') as $i): ?>
        <li><a href="<?php echo $i->url() ?>"><?php echo $i->title() ?></a></li>
      <?php endforeach; ?>
    </ul>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.sort').DataTable({
          "paging":   false,
          "scrollY":        "600px",
          "scrollCollapse": true
        });
      });
    </script>
  </body>
</html>
