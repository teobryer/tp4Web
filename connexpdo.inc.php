<?php 

$sgbd="mysql";// choix de MySQL2
$host="localhost";
$user="root";
$pass="HYJCPr";



function connexpdo(string $db){
   
    try
    {
    $pdo=newPDO("$sgbd:host=$host;dbname=$db;charset=utf8",$user,$pass);
    // active le déclenchement d’exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->query("This is no SQL!");
    }
    
     catch(PDOException $e) {
        //42000
        echo $e->getCode();
        //SQLSTATE[42000]: Syntax error or access violation: 1064 You have anerror in your SQL syntax ...
        echo $e->getMessage();
    }
}

?>