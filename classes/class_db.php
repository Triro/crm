<?php

class Dbh{

    protected function loginConnect(){
        try{
            $user = "root";
            $pass = "X2xdd800";
            $loginDbh = new PDO('mysql:host=0.tcp.sa.ngrok.io:18561;dbname=users', $user, $pass);
            return $loginDbh;        
        }
        catch(PDOException $e){
            print $e->getMessage();
            die();
        }
    }
    protected function connect(){
        try{
            $user = "root";
            $pass = "X2xdd800";
            $dbh = new PDO('mysql:host=0.tcp.sa.ngrok.io:18561;dbname=crm', $user, $pass);
            return $dbh;        
        }
        catch(PDOException $e){
            print $e->getMessage();
            die();
        }
    }

}

?>