<html>
  <head>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css" media="screen">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Mis enlaces</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Busqueda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="downloads.php">Descargas</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" value="<?= @htmlentities($_REQUEST['search']) ?>">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <?php
    if (!empty($_REQUEST['search'])) {
        require 'config.php';
        foreach (search($_REQUEST['search']) as $search) {

            ?>
            <div>
              <a href="<?= htmlentities('open.php?u=' . urlencode($search['href'])) ?>" class="w-100 btn btn-outline-success"><?= htmlentities($search['name']) ?></a>
            </div>
            <?php
        }
    }

    ?>
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

