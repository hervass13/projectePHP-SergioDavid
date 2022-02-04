<?php 
require 'bbddConex.php';?>
<?php

if(isset($_GET['code']) && !empty($_GET['code']) AND (isset($_GET['mail']) && !empty($_GET['mail'])))
{
    $activacionCode = $_GET['code'];
    $mail = $_GET['mail'];

    $rows = comptarUsuariNoActiu($activacionCode, $mail);

    if($rows>0)
    {
        activarUsuari($mail);
        header('Location: /home.php?activated=true');
    }
}
