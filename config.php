<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


    $db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  