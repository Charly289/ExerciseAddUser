<?php


    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "12345";
    $dbname ="cunsumirapi";

    $conn =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
        }else{

        return  $conn;


  }



 
?>