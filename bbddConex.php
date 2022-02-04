<?php 
    include("mail.php");

    function openDB(){
        $cadenaConnexio = 'mysql:dbname=cinetics;host=localhost:3306';
        $usuari = 'root';
        $passwd = '';
        $db = false;
        try{
            //Ens connectem a la BDs
            $db = new PDO($cadenaConnexio, $usuari, $passwd);
            //Tallem la connexió a la BDs
            //$db = null;
        }catch(PDOException $e){
            echo 'Error amb la BDs: ' . $e->getMessage();
        }
        return $db;
    }

    function crearUsuario($email, $username, $password, $firstName, $lastName, $activationCode){
        $db = openDB();
    
        $sql = "INSERT INTO `users`(mail,username,passHash,userFirstName,userLastName,creationDate,removeDate,lastSignIn, 
        activationDate,activationCode,resetPassExpiry,resetPassCode,active) 
        VALUES('$email','$username','$password','$firstName','$lastName', NOW(), null, null,null,'$activationCode',null,null, 0)";
            $usuaris = $db->prepare($sql);
            $usuaris->execute();
    
            enviarMailActivacio($email, $activationCode);
    }

    //no funciona
    function insertResetPassCode($resetPassCode, $email){
        $db = openDB();
        $sql = "UPDATE `users` SET resetPassCode = '$resetPassCode' WHERE mail = ?";
        $result = $db->prepare($sql);
        $result->execute(array($email));
    }

    function obtenirUsuari($username){
        $db = openDB();
        $sql = 'SELECT username, mail, passHash FROM `users` WHERE (`username` = ? OR `mail` = ?) and active = 1';
        $usuaris = $db->prepare($sql);
        $usuaris->execute(array($username, $username));

        return $usuaris;
    }

    function comptarUsuariNoActiu($activacionCode, $mail){
        
    $db = openDB(); 
    $sql = "SELECT count(*) FROM users WHERE mail = ?  AND activationCode = ? AND active = 0";
    $result = $db->prepare($sql);
    $result->execute(array($mail, $activacionCode));
    $rows = $result->fetchColumn();

    return $rows;
    }

    function comptarUsuariResetPassword($resetCode, $mail){
        
        $db = openDB(); 
        $sql = "SELECT count(*) FROM users WHERE mail = ?  AND resetPassCode = ?";
        $result = $db->prepare($sql);
        $result->execute(array($mail, $resetCode));
        $rows = $result->fetchColumn();
    
        return $rows;
    }

    function activarUsuari($mail){

        $db = openDB();
        $sql = "UPDATE users SET active = 1, activationCode = null, activationDate = now() WHERE mail = ?";
        $result = $db->prepare($sql);
        $result->execute(array($mail));
    }

    function updateLastSingIn($xUsername){
    $db = openDB();
    $sql = "UPDATE `users` SET lastSignIn = now() WHERE `username` = '$xUsername'";
    $db->query($sql);
    }


    function resetPassword($password, $mail, $resetCode){
        $db = openDB();
        $sql = "UPDATE `users` SET passHash = '$password', resetPassExpiry = null, resetPassCode = null WHERE `mail` = ? and resetPassCode = ?";
        $result = $db->prepare($sql);
        $result->execute(array($mail, $resetCode));
    }

    function validacioPasswordTempsExpirat($email, $passCodeReset){
        $db = openDB(); //Abre la BBDD;
        $sql = "UPDATE `users` SET resetPassExpiry = ADDTIME(now(), 3000) WHERE mail = ? and resetPassCode = ?";
        $result = $db->prepare($sql);
        $result->execute(array($email, $passCodeReset));
    }

    function hashExpirat($email, $passCodeReset){
        $expirat = false;

        $db = openDB();

        $fechaActual = getdate();
        $fechaExpiracio = "SELECT resetPassExpiry FROM `users` WHERE mail = ? and resetPassCode = ?";
        $result = $db->prepare($fechaExpiracio);
        $result->execute(array($email, $passCodeReset));

        if($fechaActual >= $result)
        {
            $expirat = true;
        }

        return $expirat;
    }
?>