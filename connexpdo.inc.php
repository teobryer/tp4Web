<?php 





function connexpdo(string $db){
    $sgbd="mysql";// choix de MySQL2
    $host="localhost";
    $user="root";
    $pass="HYJCPr";
    
    $pdo=new PDO("$sgbd:host=$host;dbname=$db;charset=utf8",$user,$pass);
    // active le déclenchement d’exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
    return $pdo;
    
}

?>