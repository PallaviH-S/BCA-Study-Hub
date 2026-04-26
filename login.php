<?php
$username = $_POST['username'];
$password=$_POST['password'];

if($username == "admin"&& $password == "1234"){
    header("Location:main.html");
}else{
    echo "Invalid Login";
}