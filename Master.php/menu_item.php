  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Menu item</title>
      <link rel="icon" href="../image/Harumi.png">
      <!-- CSS -->
      <link rel="stylesheet" href="../Master.css/Menu_item.css">
  </head>
  <body>
      <!-- //////Navbar///// -->
        <?php include('navbar.php'); ?>
                  <!-- //////////Form Menu item//////////////// -->
      <section class="main">
          <div class="sec1_main">
              <div class="sec1_a">
                  <p>Menu item</p>
                  <button type="submit">Add Menu item</button>
                </div>      
    <div class="wrapper">
      <!-- <h2>Add Resturant</h2> -->
      <form action="#">

        <div class="input-box">
          <input type="text" placeholder="Name category" required>
        </div>

        <div class="input-box">
          <input type="text" placeholder="Description category" required>
        </div>

        <div class="input-box">
          <input type="text" placeholder="price category" required>
        </div>

        <div class="input-box">
          <input type="text" placeholder="discount price category" required>
        </div>

        <div class="input-box ">
          <button type="submit">Chose File</button>
        </div>

        <div class="input-box button">
          <input type="Submit" value="Save item">
        </div>
        
        </form>
      </div>
        <!-- </div> -->
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