<?php

    include("connection.php");


    // creat data


    if(isset($_POST['submitbtn'])){
    $name=$_POST['name'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $dob=$_POST['dob'];
    $email=$_POST['mail'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $pin= $_POST['pin'];
    $education= $_POST['education'];
    $about= $_POST['about'];

    $sql= "INSERT INTO resum_data( Name, Father, Mother, DOB, Email, Gender, Phone, City, State, Pin, Education, About) VALUES ('$name','$father','$mother','$dob','$email','$gender','$phone','$city','$state','$pin','$education','$about')";

        if( mysqli_query ($con,$sql)){
            ?>
            <script>
                alert("Submitted");
                window.location.href="index.php";
            </script>
            <?php
        }
        else{
            echo "chal nikal";
        }

    }


    // for updated data


    if(isset($_POST['updatebtn'])){
        $name=$_POST['name'];
        $father=$_POST['father'];
        $mother=$_POST['mother'];
        $dob=$_POST['dob'];
        $email=$_POST['mail'];
        $gender=$_POST['gender'];
        $phone=$_POST['phone'];
        $city= $_POST['city'];
        $state= $_POST['state'];
        $pin= $_POST['pin'];
        $education= $_POST['education'];
        $about= $_POST['about'];
        $sno=$_POST['hiddenid'];
    
        $sql= "UPDATE resum_data SET Name='$name',Father='$father',Mother='$mother',DOB='$dob',Email='$email',Gender='$gender',Phone='$phone',City='$city',State='$state',Pin='$pin',Education='$education',About='$about' WHERE  S_no ='$sno'";
    
            if( mysqli_query ($con,$sql)){
                ?>
                <script>
                    alert("Updated");
                    window.location.href="index.php";
                </script>
                <?php
            }
            else{
                echo "chal nikal";
            }

        }


        //for delet data



        if(isset($_REQUEST['deleteid'])){

            $delete=$_REQUEST['deleteid'];
            $sql = "DELETE FROM `resum_data` WHERE S_no='$delete'";
            if(mysqli_query($con,$sql)){
                ?>
                <script>
                    alert("Deleted");
                    window.location.href="index.php";
                </script>
                <?php
            }

        }

?>