<?php

    $dsn = "mysql:host=localhost;dbname=ozarktechwebdev_whateveryouwant";
    $username = "ozarktechwebdev_eric";
    $password = "1qaz2wsx!QAZ@WSX";

    try{
    $db = new PDO($dsn, $username, $password);
        //echo("connected from db.php");
    } catch (PDOException $e)
    {
        $error_message = $e->getMessage();
        echo("<p>Error message: $error_message");
    }

?>