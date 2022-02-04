<?php

//include("mail.php");
require_once("bbddConex.php");

if(isset($_POST['email']) && !empty($_POST['email']))
{
    $mail = filter_input(INPUT_POST,'email');

   /* $usuari = obtenirUsuari($username);

    foreach($usuari as $fila){
            $mail = $fila['mail'];
    } */

    $resetPassCode = hash('sha256', rand());

    insertResetPassCode($resetPassCode, $mail);

    enviarMailResetPassword($mail, $resetPassCode);
    
    validacioPasswordTempsExpirat($mail, $resetPassCode);
}

?>