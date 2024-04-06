<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muli_pic</title>
</head>
<style>
.container{
    width: 600px;
    padding: 20px;
    border: 1px solid rgb(255, 69, 69);
    margin: auto;
    background-color:rgb(255, 69, 69) ;
    margin-top: 100px;
    text-align: center;
    border-radius: 5px;
}
.container label{
    display: block;
    font-size: 30px;
    text-align: start;
    /* border: 1px solid; */
    width: 80%;
    margin: auto;
    height: 40px;

}
input[type="file"],input[type="text"]{
    border: 2px solid black;
    height: 30px;
    width: 80%;
    margin:20px 0;
    border-radius: 5px;
    font-size: large;
}
.container form{
    border: 1px solid rgb(100, 179, 252);
    background-color: white;
    box-shadow: 0px 0px 15px 12px rgb(117, 191, 255);
    padding: 20px 40px;
    border-radius: 5px;
}
button {
  width: 70%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
<body>
    <div class="container">
        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="formlst">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Type Your Name" required>
            </div>
            <div class="formlst">
                <label for="pics">Image:</label>
                <input type="file" name="pics[]" placeholder="Type Your Name" multiple required>
            </div>
            <button name="Submitpics" type="submit">Submit Pics</button>
        </form>
    </div>
</body>
</html>