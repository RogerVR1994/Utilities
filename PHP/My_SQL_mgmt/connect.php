<?php

 function db_Connection(){

    $server="localhost";
    $user="root";
    $pass="password";
    $db="database";

    $connection = new mysqli($server, $user, $pass, $db);
    if (!$connection) {
        die('Could not connect: ' .$connection->connect_error);
    }
    
   //echo 'Connected successfully';
    return $connection;
}



?>
