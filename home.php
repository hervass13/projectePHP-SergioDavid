<html>
<link rel="stylesheet" href="css/home.css">
</html>
<?php

if(!isset($_COOKIE[session_name()])){
        header("Location: /index.php");
        exit;
    }
    else{
        session_start();
        if(!isset($_SESSION['username']) && !isset($_SESSION['mail'])){
            //Hi ha la sessió però no les variables de sessió!! Hasta la vista baby!
            header("Location: /log-out.php");
            exit;
        }else{
             include "./Includes/header.php"?>

            <body>
              <div id="login">
              <img src="/assets/img/logoGran.png">
              </div>
            </body>

            <?php 
              $activated = isset($_GET['activated']) ? $_GET['activated'] : false;

              if(isset($activated) && $activated == true){
                echo "<script>alert('Your account has been activated');</script>";
                }
              ?>
             <?php include "./Includes/footer.php"?>
        <?php
            }
        }?>
