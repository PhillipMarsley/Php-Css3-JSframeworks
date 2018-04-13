<?php

function OpenCon() {
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "root";
    $dbName = "superherosightingtest";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName) or die("Connect failed: %s\n" . $conn -> error);
 
    return $conn;
}
 
function CloseCon($conn) {
    $conn -> close();
}
   
?>