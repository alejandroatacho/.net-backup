<!DOCTYPE html>
<html>
<body>
<div id="container" class="container-fluid">
    <div class="row">
    <!--<header class="col-sm-12">
        <div id="logo"></div>
    </header>
    <nav class="col-sm-12">
        <a href="index.php">Home</a>
        <a href="product.php">Product</a>
        <a href="about.php">About</a>
        
    </nav>-->
    <nav class="col-sm-12 navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navigation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/books_are_us/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/books_are_us/product.php">Products</a>
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
    <main class="col-sm-10">
        <?php echo $mastercontent; ?>
    </main>
   
    </div>
</div> <!-- -->
</body>
</html>