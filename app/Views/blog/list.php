<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['page']['title'] . " | " . CONFIG['site_title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/blog-home.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Blog">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Blog/show/1">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contacts">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"><?= CONFIG['site_title']; ?>
            <small>or other news from USSR</small>
          </h1>

          <?php

            foreach ($data['postList'] as $post) {

          //<!-- Blog Post -->

          echo '<div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">'.$post['title'].'</h2>
              <p class="card-text">'.$post['body'].'</p>
              <a <a href="/' . CONFIG['site_path'] . "/Blog/show/" . $post['id'] . '" >' . $post['title'] . '</a> 
            </div>
            <div class="card-footer text-muted">
              Posted on '.$post['date'].'
              <a href="#">Start Bootstrap</a>
            </div>
          </div>';

            }

        ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form action="/<?= CONFIG['site_path']; ?>/Blog/search" method="GET">
                <div class="input-group">
                  <input type="text" class="form-control" name='query' placeholder="Search for...">
                  <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                  </span>
                </div>
              </form>
            </div>
          </div>

          <!-- Links Widget -->
          <div class="card my-4">
            <h5 class="card-header">Links</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Delfi</a>
                    </li>
                    <li>
                      <a href="#">15min</a>
                    </li>
                    <li>
                      <a href="#">Lrytas</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Autoplius</a>
                    </li>
                    <li>
                      <a href="#">Autogidas</a>
                    </li>
                    <li>
                      <a href="#">Autobilis</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
        <!--   <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div> -->

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/<?= CONFIG['site_path']; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="/<?= CONFIG['site_path']; ?>/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


<!-- <!doctype html>
<html lang="en">
<head>
    <title><?= $data['page']['title'] . " | " . CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">
</head>
<body>
<div class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3"><?= CONFIG['site_title']; ?></h1>
                <p class="lead">A good place to start with PHP MVC</p><br/>
                <a class="btn btn-sm btn-outline-light" href="/<?= CONFIG['site_path']; ?>">Home</a>
                <a class="btn btn-sm btn-outline-light" href="/<?= CONFIG['site_path']; ?>/Home/hello">Hello world</a>
            </div>
        </div>
    </div>
    <div class="container">

        <?php

            foreach ($data['postList'] as $post) {
            
            ?>

            <div class="row">
                <div class="col content">
                    <h2><?= $post['title']; ?></h2>
                    <hr>
                    <?= $post['body']; ?>
                </div>
            </div>

            <?php

            }

        ?>

    </div>
</div>
<script src="/<?= CONFIG['site_path']; ?>/assets/js/script.js"></script>
</body>
</html>
 -->