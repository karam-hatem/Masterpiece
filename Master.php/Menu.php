<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="icon" href="../image/Harumi.png">
    <!-- CSS -->
    <link rel="stylesheet" href="../Master.css/Menu.css">
</head>
<body>
<!-- //////Navbar///// -->
<?php include('navbar.php'); ?>

<!-- //////////Form Menu item//////////////// -->
<section class="k0">
  <div class="k1">
        

    <div class="wrapper">
      <div class="tin-fmp-menu">
        <div class="menu-header">
          <h1>Menu Resturant</h1>
          <div class="categories">
            <ul>
              <li class="btn-trad">Food</li>
              <li class="btn-paleo">Drink</li>
              <li class="btn-keto">Juice</li>
              <li class="btn-vegan">Snaks</li>
              <li class="btn-lean">shisha</li>
              <li class="btn-fresh">Fresh+</li>
            </ul>
          </div>
        </div>
        <div class="menu-items-container">
          <div class="menu-item trad">
            Food 1
          </div>
          <div class="menu-item trad">
            Food 2
          </div>
          <div class="menu-item trad">
            food 3
          </div>
          
        </div>
      </div>
    </div>
  </div>

</section>                

<!-- /////////Side Navbar//////////////// -->
<div class="container">
  <nav>
    <ul>
      <li><a href="restaurant.php">
    
      <i class="fa-solid fa-utensils"></i>
        <span class="nav-text">Resturant</span>
      </a></li>

      <li><a href="menu_item.php">
      <i class="fa-solid fa-folder-minus"></i>
        <span class="nav-text">Menu item</span>
      </a></li>

      <li><a href="Menu.php">
      <i class="fa-solid fa-book-open"></i>
        <span class="nav-text">Menu</span>
      </a></li>
      </ul>
  </nav>
</div>
<!-- ////Footer//////// -->
<?php include('footer.php'); ?>

</body>
</html>