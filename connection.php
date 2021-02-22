<?php 


$host="localhost";

$database_name="estore";

$usr_name="admin";

$pw="123";

$username="mohamed";

$option=[

    pdo::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION ,

];

$con = new PDO("mysql:host=$host;dbname=$database_name",$usr_name,$pw,$option);



