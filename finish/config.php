<?php
    ob_start();

    try {
        $con = new PDO("mysql:dbname=search;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);// hata modu ayarladık

        //echo "connection";
    }
    catch(PDOExeption $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>