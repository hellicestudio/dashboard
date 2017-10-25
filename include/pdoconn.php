<?php

    $bdhostname = "bdhost0049.servidorwebfacil.com:3306"; 
    $bdname = "hellice_dashboard";
    $bduser = "hellice_dash";
    $bdpass = "dashboard17*";

    try 
        {
        $bdconnect = new PDO("mysql:host=$bdhostname;dbname=$bdname", $bduser, $bdpass);
        $bdconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
    catch(PDOException $e)
        {
        echo "PDOConn: " . $e->getMessage();
        }

?>