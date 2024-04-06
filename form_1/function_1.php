<?php
    include("conection_1.php");

    if(isset($_POST["btnsubmit"])){
        
        $name=$_POST["name"];
        $email=$_POST["email"];
        $contact=$_POST["contact"];
        

        $sql="INSERT INTO first_table(name,email,contact) VALUES('$name','$email','$contact')";
        

        if(mysqli_query($conn,$sql))
        {
            echo "form submit successfully";
        }
        else{
            echo "error";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="function_1.php" method="POST">
        <header>Enqury Form</header>
        <label for="name">Name</label>
        <input type="text" placeholder="Name" name="name" required><br>
        <label for="email">Email</label>
        <input type="text" placeholder="Email" name="email" required><br>
        <label for="number">Contact</label>
        <input type="number" placeholder="Contact" name="contact" required><br>
        <button name="btnsubmit" type="submit">Submit</button>
    </form>
</body>
</html>