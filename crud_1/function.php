<?php

    include("connection.php");


    //  fuction for post data

    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $major = $_POST['major'];
        $gpa = $_POST['gpa'];
        $essay = $_POST['essay'];



        $sql = "INSERT INTO college_add(name,email,gender,major,gpa,essay,date) VALUES ('$name','$email','$gender','$major','$gpa','$essay',current_timestamp())"; 

        if(mysqli_query($con, $sql)){
            ?>
            <script>
                alert("Submitted");
                window.location.href="display.php";
            </script>
            <?php
        }
    }

    // fuction for update

    if(isset($_POST['updatebtn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $major = $_POST['major'];
        $gpa = $_POST['gpa'];
        $id =$_POST['id'];

        $sql = "UPDATE college_add SET name='$name', email='$email', gender ='$gender', major ='$major', gpa ='$gpa' WHERE id='$id'";
        if(mysqli_query($con, $sql)){
        ?>

            <script>
                alert("Updated");
            window.location.href="display.php";
            </script>

        <?php
        // echo "ho gya kaam";
    }
    }



    // fuction for delete

    if(isset($_REQUEST['id']) && $_REQUEST['do']=="delete"){

        $id= $_REQUEST['id'];
        $sql= "DELETE FROM college_add WHERE id= '$id'";
        if(mysqli_query($con, $sql)){
            ?>

            <script>
                alert("Deleted");
            window.location.href="display.php";
            </script>

        <?php
        }
    }
?>
