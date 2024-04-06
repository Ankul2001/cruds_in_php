<?php

include("conection_2.php");

if(isset($_POST["sumbitbtn"])){

    $name=$_POST["name"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];

    $sql="INSERT INTO 2nd_table(name,number,email) VALUE('$name','$contact','$email')";

    if(mysqli_query($con , $sql))
        {
            echo "form submit successfully";
        }
        else{
            echo "error";
        }

}

?>