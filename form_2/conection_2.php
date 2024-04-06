<?php

$con=mysqli_connect("localhost","root","","firstdata");

if(!$con){
    die("sorry failed to connect".mysqli_connect_error());
}
else{
    echo"connection was successfull ";
}

?>