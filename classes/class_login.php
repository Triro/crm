<?php

class login extends Dbh{

    protected function getUser($uid, $pwd){

        $query = $this->loginConnect()->prepare('SELECT * FROM usuarios WHERE Usuario = ? AND Contraseña = ?;');

        if(!$query->execute(array($uid, $pwd))){
            $query = null;
            header("location: ../views/login.php");
            exit();
        }

        $profileData = $query->fetchAll(PDO::FETCH_ASSOC);
        if(count($profileData) == 1) {
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['loged-in'] = true;

        }
        else{
            $query = null;
            header("location: ../views/login.php");
            exit();
        }

    }

}

?>