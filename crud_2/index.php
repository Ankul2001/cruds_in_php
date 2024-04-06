<?php

    include("connection.php");


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<style>
    *{
        box-sizing: border-box;
    }
    body{
        /* background-size: cover; */
        height: 100%;
        /* align-items: center; */
        
    }
    table{
        margin: auto;
        background-image: linear-gradient(to left ,rgb(226, 226, 251),rgb(219, 238, 250));
        background-repeat: no-repeat;

    }
    thead{
        background-image: linear-gradient(to left ,rgb(226, 222, 222) 50%,rgb(245, 207, 207));
    }
    button{
        font-size: 20px;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
    }
    .add{
        background-color: rgb(166, 208, 246);
        margin: 20px;
    }
    .add:hover{
        background-color: rgb(5, 151, 249);
        color: white;
    }
    .update{
        background-color: rgb(171, 246, 166);
        color: rgb(80, 78, 78);
    }
    .update:hover{
        background-color: rgb(20, 254, 3);
        color: rgb(59, 55, 55);
    }
    .remove{
        background-color: rgb(246, 166, 166);
        color: rgb(80, 78, 78);
    }
    .remove:hover{
        background-color: rgb(252, 7, 7);
        color: white;
    }
</style>
<body style="text-align: center;">
<h1>Data of Resume</h1>
<a href="form.php"><button class="add">Add Data</button></a>
    <table border="2" cellpadding="5px">
        <thead>
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>D.O.B.</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>City</th>
            <th>State</th>
            <th>Pin Code</th>
            <th>About</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        <?php

        $sql= "SELECT * FROM resum_data";
        $result= mysqli_query($con,$sql);
        $sn=1;
        while($row= mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td><?php echo $sn;?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Father'];?></td>
            <td><?php echo $row['Mother'];?></td>
            <td><?php echo $row['DOB'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Gender'];?></td>
            <td><?php echo $row['City'];?></td>
            <td><?php echo $row['Phone'];?></td>
            <td><?php echo $row['State'];?></td>
            <td><?php echo $row['Pin'];?></td>
            <td><?php echo $row['About'];?></td>
            <td><a href="update_form.php?updateid=<?php echo $row['S_no'];?>&do=update"><button type="submit" name="editbtn" class="update">Edit</button></a></td>
            <td><a href="fuction.php?deleteid=<?php echo $row['S_no']; ?>& do=delete" onclick="
                        return confirm('Are You Sure Want To Delete ?')"><button name="removebtn" type="submit" class="remove">Remove</button></td>
        </tr>
        <?php
                    $sn++;
            }
        ?>
        </tbody>
    </table>
</body>
</html>