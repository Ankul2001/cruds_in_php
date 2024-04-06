<?php

    include("connection.php");

    
?>
<style>
    .container {
        margin: auto;
        text-align: center;

    }

    h1 {
        font-size: 40px;
        display: block;
    }

    table {
        width: 100%;
        text-align: center;
    }

    thead {
        background-color: rgb(212, 212, 205);
        font-size: 25px;
    }

    thead th {
        padding: 8px;
    }

    thead .sn {
        width: 2%;
    }

    thead .name {
        width: 15%;
    }

    thead .mail {
        width: 20%;
    }

    thead .gndr {
        width: 8%;
    }

    thead .major {
        width: 15%;
    }

    thead .gpa {
        width: 8%;
    }

    thead .edit {
        width: 10%;
    }

    thead .remove {
        width: 10%;
    }

    .btn {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #21ef2c;
    }

    .btn1 {
        background-color: rgb(88, 169, 244);
        color: rgb(244, 236, 227);
        margin: 20px;
        font-size: 25px;
        margin-left: 1100px;
    }

    .btn1:hover {
        background-color: rgb(29, 125, 241);
    }

    .btn2 {
        background-color: rgb(227, 109, 109);
        color: rgb(244, 236, 227);
    }

    .btn2:hover {
        background-color: red;
    }
</style>
<div class="container">
    <h1>Addmission Form Data</h1><br>
    <a href="form.php"><button type="submit" name="adddata" class="btn btn1">Add Data</button></a>
    <table border="2" cellspacing="0">
        <thead>
            <tr>
                <th class="sn">S.No.</th>
                <th class="name">Name</th>
                <th class="mail">Email</th>
                <th class="gndr">Gender</th>
                <th class="major">Major</th>
                <th class="gpa">GPA</th>
                <th class="date">Time</th>
                <th class="edit">Edit</td>
                <th class="remove">Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql = "SELECT * FROM college_add";
                $res = mysqli_query($con,$sql);
                $sn = 1;
                // echo mysqli_fetch_assoc($res);
                while($row= mysqli_fetch_assoc($res)){
                    
        ?>
            <tr>
                <td><?php echo $sn ; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td> <?php echo $row['gender']; ?> </td>
                <td> <?php echo $row['major']; ?> </td>
                <td><?php echo $row['gpa']; ?> </td>
                <td><?php echo $row['date']; ?> </td>
             <td><a href="update.php?id=<?php echo $row['id'];?>&do=update"><button name="editbtn" type="submit" class="btn ">Edit</button></a></td>
                <td><a href="function.php?id=<?php echo $row['id'];?>&do=delete" onclick="
                        return confirm('Are You Sure Want To Delete ?')"><button name="removebtn" type="submit" class="btn btn2">Remove</button></a></td>
            </tr>
            <?php
                $sn++;
                }
                ?>
        </tbody>
    </table>
</div>
<?php





?>