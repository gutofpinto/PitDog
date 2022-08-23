<?php
    function getConet(){
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'db_pitdog';

        try{
            $pdo = new PDO('mysql:host='.$hostname.';dbname='.$db_name, $username, $password);
    
        }catch(PDOException $ex){
            echo 'Erro: '.$ex->getMessage();
        }
        return($pdo);
    }

    
?>