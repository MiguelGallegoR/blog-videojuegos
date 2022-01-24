<?php

$db = mysqli_connect("localhost", "root" , "" , "blog_master", 3308 );

mysqli_query($db, "SET NAMES 'utf8'");


//Iniciar la sesion
if(!isset($_SESSION)){
    session_start();
}