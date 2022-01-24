<!DOCTYPE html >
<html>
<head>

    <script rel="stylesheet" href="vendors/jquery-3.5.1/jquery.js"></script>
    <script rel="stylesheet" href="vendors/popper-2.5.4/popper.min.js"></script>
    <script rel="stylesheet" href="vendors/bootstrap-4.5.3/js/bootstrap.js"></script>

    <link rel="stylesheet" href="vendors/bootstrap-4.5.3/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/main.css"> <!-- -->
    <?php
    echo $masterlinks;
    //echo $masterscript;
    ?>
</head>
<!--<body>
<div id="container" class="container-fluid">
    <div class="row">
    <header class="col-sm-12">
        <div id="logo"></div>
    </header>
    <nav class="col-sm-12">
        <a href="index.php">Home</a>
        <a href="product.php">Product</a>
        <a href="about.php">About</a>
        
    </nav>-->
  <!--  <nav class="col-sm-12 navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navigation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/altagrasia_bekery/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/altagrasia_bekery/product.php">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <aside class="col-sm-2">
    </aside>
    <main class="col-sm-10"> -->
        <?php echo $mastercontent; ?>
    </main>
   
    </div>
</div> <!-- -->
</body>
</html>