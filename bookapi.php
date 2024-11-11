<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include "database.php";
$sql = "select * from books";

$bookID = filter_input(INPUT_GET, 'id');
    if ($bookID)
    {
        $sql .= " where bookID = $bookID";
    }

$rs = $db->query($sql);

//turn the result of fetchall from the query into a json string and then echo to page

echo(json_encode($rs->fetchAll()));