<?php
    include "config.php";
    
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "insert into uims( username,name, email, password) VALUES('$username','$name','$email','$password')"  ;
    $result = mysqli_query($con , $q);
    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }
    else {	
        header('location: index1.html');
        exit();
    } 
?>
