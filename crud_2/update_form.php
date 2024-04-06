<?php

    include("connection.php");


    if(isset($_REQUEST['updateid'])){

        $s_no=$_REQUEST['updateid'];
        $sql= "SELECT * FROM resum_data WHERE S_no = '$s_no'";
        $result = mysqli_query($con,$sql);
        $cel= mysqli_fetch_assoc($result);
    }
    else{
        echo "chal nikal";
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Form</title>
</head>
<style>
*{
    box-sizing: border-box;
  }
  body{
    text-align: center;
    background-color: rgb(220, 216, 211);
    font-size: 20px;
  }
  hr{
    height: 3px;
  }
  form{
    /* border: 0 2px 0 2px solid ; */
    border-radius: 10px;
    background-color: rgb(197, 240, 225);
    width: 70%;
    margin:20px auto;
    padding: 30px 200px;
    text-align: start;
  }
  label{
    font-size: 25px;
    display: inline-block;
    /* border: 2px solid ; */
    width: 300px;

  }
  input{
    width: 300px;
    height: 30px;
    font-size: 25px;
  }
  #gender{
    width: 50px;
    height: 20px;

  }
  p{
    font-size: 20px;
    display: flex;
  }
  button{
    font-size: 20px;
    margin: 30px;
    padding: 5px 10px;
    border: none;
    border-radius: 10px;
    background-color: rgb(204, 105, 247);
  }
  button:hover{
    background-color: rgb(214, 7, 255);
    color: rgb(63, 63, 63);
  }
</style>
<body>
    <h1>Resume Update Form</h1>
  
  <form action="fuction.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $cel['Name']; ?>" required>
    <br><br>
    
    <label for="father">Father's Name:</label>
    <input type="text" id="father" name="father" value="<?php echo $cel['Father']; ?>" required>
    <br><br>
    
    <label for="mother">Mother's Name:</label>
    <input type="text" id="mother" name="mother" value="<?php echo $cel['Mother']; ?>" required>
    <br><br>
    
    <label for="dob">D.O.B.:</label>
    <input type="date" id="dob" name="dob" value="<?php echo $cel['DOB']; ?>" required>
    <br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="mail" value="<?php echo $cel['Email']; ?>" required>
    <br><br>

    <?php
    $m="";
    $f="";
    if($cel['Gender'] == 'male'){
        $m='checked';
    }
    else{
        $f='checked';
    }
    ?>
    <label for="gender">Gender:</label>
    <input type="radio" id="gender" name="gender" value="male<?php echo $m ;?> " required>Male
    <input type="radio" id="gender" name="gender" value="female <?php echo $f ;?> " required>female
    <br><br>
    
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo $cel['Phone']; ?>" required>
    <br><br>
    
    <label for="city">City:</label>
    <input type="text" id="city" name="city" value="<?php echo $cel['City']; ?>" required>
    <br><br>
    
    <label for="state">State:</label>
    <input type="text" id="state" name="state" value="<?php echo $cel['State']; ?>" required>
    <br><br>
    
    <label for="pin">Pin Code:</label>
    <input id="pin" name="pin" value="<?php echo $cel['Pin']; ?>" required>
    <br><br>
    <label for="education">Education:</label>
    <input type="text" id="education" name="education" value="<?php echo $cel['Education']; ?>" required>
    <br><br>
    <label for="about">About:</label>
    <textarea id="about" name="about" required><?php echo $cel['About']; ?></textarea>
    <br><br>
    <input type="hidden" name="hiddenid" value="<?php echo $cel['S_no']; ?>" required>
    
    <button name="updatebtn" type="submit">Update</button>
  </form>
</body>
</html>

