<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Singup</title>
  <link rel="icon" href="../image/Harumi.png">
  <link rel="stylesheet" type="text/css" href="../Master.css/login.css">
</head>
<body>

<?php include('navbar.php');?>
    <div class="inputs">

<div class="wrapper"> 
<div class="form-wrapper sign-up2">
<form action="" >
    <h2>Sign Up</h2>    
    <div class="input-group">
    <input type="text" required>
    <label for="">Username</label>
    </div>
    <div class="input-group">
    <input type="email" required>
    <label for="">Email</label>
    </div>
    <div class="input-group">
    <input type="password" required>
    <label for="">Password</label>
    </div>

    <div class="input-group">
    <input type="Re-password" required>
    <label for="">Re-Password</label>
    </div>
    
    <div class="remember">
    <label><input type="checkbox"> I agree to the terms & conditions</label>
    </div>
    <button type="submit">Sign Up</button>
    <div class="signUp-link">
    <p>Already have an account? <a href="login.php" class="signInBtn-link">Sign In</a></p>
    </div>
</form>
</div>
</div>

</div>
  
  <?php include('footer.php');?>
  <!-- <script src="../Master.js/login.js"></script> -->

</body>
</html>