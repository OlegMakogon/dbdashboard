<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DB Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-12 ml-sm-auto col-md-12 pt-3" role="main">

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <a href="phpmyadmin"><img src="images/mysql.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><a href="phpmyadmin">PhpMyAdmin</a></h4>
			  <div class="text-muted">root/ </div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="phpredisadmin"><img src="images/redis.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><a href="phpredisadmin">PhpRedisAdmin</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="phpmemcacheadmin"><img src="images/memcached.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><a href="phpmemcacheadmin">PhpMemcacheAdmin</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="http://webception/"><img src="images/codeception.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><a href="http://webception/">WebCeption</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="rockmongo"><img src="images/mongo.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><a href="rockmongo">RockMongo</a></h4>
			  <div class="text-muted">admin/admin</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="http://apptools/"><img src="images/apptools.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><a href="http://apptools/">AppTools</a></h4>
			  <div class="text-muted">admin/admin</div>
            </div>
          </section>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
