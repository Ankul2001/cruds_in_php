<?php

include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    .container {
        margin: auto;
        justify-content: center;
       
        

    }

    .container .pic , .addpic{
        display: inline-grid;
        border: 1px solid red;
        height: 250px;
        margin: 10px 10px;
        text-align: center;
        width: 200px;

    }

    .container .pic img {
        height: 180px;
        width: 180px;
        margin: auto;
        display: block;
        margin-top: 10px;
        margin-bottom: 20px;

    }

    .del {
        border-radius: 3px;
        display: block;
        position: relative;
        top: -200px;
        left: 80px;
        padding: 5px;
        color: red;
        margin: auto;
        filter: drop-shadow(0px 0px 10px 8px rgb(21, 25, 28) );
    }
    .edit{
        border-radius: 3px;
        display: block;
        position: relative;
        top: -200px;
        left: 80px;
        padding: 5px;
        color: rgb(103, 137, 239);
        margin: auto;
    }
    .editbox{
        width: 90%;
        justify-self: center;
        display:none;
        height: 30px;
        /* border: 1px solid; */
        margin-top: -50px;
        /* display: block; */
    }
    .editbox input[type="file"]{
        width: 70%;
        height: 20px;
        padding: 5px 5px;
        border: 1px solid;
    }
    .editbtn{
        height: 20px;
        width: 50px;
        text-decoration: none;
        border: 1px solid;
        background-color: azure;
        cursor: pointer;
        border-radius: 3px;
    }
</style>

<body>
    <div class="container">
        <?php
        $result = $object->displayimg();
        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);
            $image = explode(",", $row['pics']);
            for ($i = 0; $i < count($image); $i++) {
        ?>
                <div class="pic" id="pic<?php echo $i;?>">    
                    <img src="image/<?php echo $image[$i]; ?>">
                    <!-- <a href="code.php?deletepic=<?php echo $image[$i]; ?>"><button type="submit">Delete</button></a> -->
                    <input type="hidden" id="picid<?php echo $i;?>" value="<?php echo $image[$i];?>">
                    <i type="button" id="delbtn<?php echo $i;?>" class="fa-sharp fa-solid fa-trash del" ></i>
                    <i type="button" id="editbtn<?php echo $i;?>" class="far fa-edit edit"></i>
                    <form action="code.php" method="post" enctype="multipart/form-data" class="editbox" id="editbox<?php echo $i;?>">
                        <input type="file" name="newpic" class="editpic" required>
                        <input type="hidden" name="picdb" value="<?php echo $i;?>">
                        <input type="submit" name="btneditpic" value="Update">
                        

                    </form>
                </div>


                
                <script>
                $(function(){
                    $("#delbtn<?php echo $i;?>").click(function(){
                        var deletepic= $("#picid<?php echo $i;?>").val();
                        $.ajax({
                            type: "POST",
                            url: "code.php",
                            data: {deletepic: deletepic},
                            success: function(res){
                                alert(res);
                                $("#pic<?php echo $i;?>").hide(1000);

                            }
                        })

                    })
                })
                $(function(){
                    $("#editbtn<?php echo $i;?>").click(function(){
                        var editpic= $("#editbox<?php echo $i;?>");
                        
                            editpic.css({"display": "inline-block"});
                        
                        
                    })
                })
                </script>
        <?php
            }
        }
        ?>
        <div class="addpic">
            <h1>add pics</h1>
            <form action="code.php" method="POST" enctype="multipart/form-data">
            <input type="file"  name="addpic[]" multiple><br>
            <button type="submit" name="addpicbtn">add</button>
        </form>
        </div>


    </div>
</body>


</html>