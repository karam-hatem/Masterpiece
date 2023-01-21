<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="icon" href="../image/Harumi.png">
    <link rel="stylesheet" href="../Master.css/restaurant.css">
</head>
<body>
    
    <?php include('navbar.php'); ?>
    
<section class="main">
  <div class="sec1_main">
    <div class="sec1_a">
          <p>Resturant</p>
          <!-- <button type="submit">Add Resturant</button> -->
    </div>      
       

<div class="wrapper">
        <!-- <h2> Add Resturant</h2> -->
  <form action="#">
    <div class="input-box">
      <input type="text" placeholder="Name Resturant" required>
    </div>
    <div class="input-box">
      <input type="text" placeholder="Description Resturant" required>
    </div>
    <div class="input-box">
      <input type="text" placeholder="Phone Resturant " required>
    </div>
    <div class="input-box">
      <input type="text" placeholder="Email Resturant" required>
    </div>
    <div class="input-box">
      <input type="text" placeholder="Adress/locatios Resturant" required>
    </div>
    <div class="input-box ">
      <button type="submit">Chose File</button>
    </div>
    <div class="input-box button">
      <input type="Submit" value="Save Resturant">
    </div>
    </form>
  </div>
          <!-- </div> -->
  </div>  
  </section>

            <!-- /////////Saidnavdar////////// -->
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

    <?php include('footer.php'); ?>
</body>
</html>