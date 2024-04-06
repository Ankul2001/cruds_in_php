<?php

    include("connection.php");

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
    background-color: rgb(249, 180, 180);
  }
  button:hover{
    background-color: rgb(254, 38, 38);
    color: beige;
  }
</style>
<body>
    <h1>Resume Form</h1>
  <hr>
  <form action="fuction.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    
    <label for="father">Father's Name:</label>
    <input type="text" id="father" name="father" required>
    <br><br>
    
    <label for="mother">Mother's Name:</label>
    <input type="text" id="mother" name="mother" required>
    <br><br>
    
    <label for="dob">D.O.B.:</label>
    <input type="date" id="dob" name="dob" required>
    <br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="mail" required>
    <br><br>
    
    <label for="gender">Gender:</label>
    <input type="radio" id="gender" name="gender" value="male" required> Male 
    <input type="radio" id="gender" name="gender" value="female" required> female
    <br><br>
    
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>
    <br><br>
    
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required>
    <br><br>
    
    <label for="state">State:</label>
    <input type="text" id="state" name="state" required>
    <br><br>
    
    <label for="pin">Pin Code:</label>
    <input id="pin" name="pin" required>
    <br><br>
    <label for="education">Education:</label>
    <input type="text" id="education" name="education" required>
    <br><br>
    <label for="about">About:</label>
    <textarea id="about" name="about" required></textarea>
    <br><br>
    
    <button name="submitbtn" type="submit">Submit</button>
    <button  type="reset">Reset</button>
  </form>
</body>
</html>
