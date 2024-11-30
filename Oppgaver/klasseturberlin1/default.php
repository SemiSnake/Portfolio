<?php
           
        if(!isset($_SESSION))
        {
            session_start();
        }
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "elever";

        $tilkobling = mysqli_connect($servername, $username, $password, $dbName);
        if($tilkobling->connect_error)
        {
            die("Noe gikk galt: " . $tilkobling->connect_error);
        }
        $tilkobling->set_charset("utf8");

       
?>