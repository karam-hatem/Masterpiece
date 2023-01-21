<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Master.css/contact.css">
    <link rel="icon" href="../image/Harumi.png">
    <title>ContactUs </title>
</head>
<body>

<?php include('navbar.php') ;?>

    <div class="main">
        <div class="main2">
            <div class="main_in_div main_in_div1">
                <h2>Contact Us:</h2><br>
                <h1>We are Here to Help you</h1><br>
                
                <h3>Adress</h3>
                <h4>Aqaba, aqaba</h3>
                <h3>Telephone</h3>
                <h4>+962778079526</h3>
                <h3>E-mail</h3>
                <h4>www.karamdaneh97.com</h3>	
            </div>

            <div class="main_in_div main_in_div2">
                    <form>
                        <input type="text" id="fname" placeholder="NAME">
                        <input type="text" id="lname" placeholder="EMAIL"><br>
                        <input type="text" id="fname" placeholder="PHONE">
                        <input type="text" id="lname" placeholder="SUBJECT"><br>
                        <textarea  placeholder="Massage..."></textarea>
                    </form>
                    <button>Send Massage</button>
            </div>
        </div>

    </div>

   

 <?php include('footer.php');?>
</body>
</html>