<?php 
function getPDO(){
    try{
        $host = 'X';
        $username = 'X';
        $password = '';
        $name = 'X';
        $port = 'X';
        $cnx = new PDO("mysql:host=$host;port=$port;dbname=$name;charset=utf8", $username, $password);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnx;
    } catch (PDOException $e) {
        echo '[PDO error]: ' . $e->getMessage() . '<br />';
        return false;
    }
}


?>