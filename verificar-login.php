<?php 
require 'bbddConex.php';

?>

<?php
$username = false;
$password= false; 

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = filter_input(INPUT_POST,'username'); //Filter input serveix per a evitar la injeccio de codi.
    $password = filter_input(INPUT_POST, 'password'); //Filter input serveix per a evitar la injeccio de codi.
}

if ($username && $password)
{
    $usuaris = obtenirUsuari($username);

    foreach ($usuaris as $fila) {
        if(password_verify($password, $fila['passHash']))
        {
            session_start();
            $_SESSION["username"]   = $fila['username'];
            $_SESSION["mail"]       = $fila['mail'];
            updateLastSingIn($username);
            header('Location: /home.php');
            exit;
        }
    }
}
header('Location: /index.php?error=true');
?>

