<?php

include("connect.php");

//upload pics

if (isset($_POST["Submitpics"])) {

    $name = $_POST['name'];
    $folder = "image/";
    $file = $_FILES['pics']['name'];
    $contpics = 0;

    for ($i = 0; $i < count($file); $i++) {
        $url = $folder . basename($file[$i]);
        move_uploaded_file($_FILES['pics']['tmp_name'][$i], $url);
        $contpics++;
    }

    $pic = implode(',', $file);            //implode array ko string me covert krta h
    if ($object->uploadpics($name, $pic, $contpics)) {
?>
        <script>
            alert("uploaded");
            window.location.href = "display.php";
        </script>
        <?php
    }
}


//delete pic

if (isset($_REQUEST['deletepic'])) {
    $delpic=$_REQUEST['deletepic'];
    $result = $object->displayimg();
    $img=array();
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $image = explode(",", $row['pics']);                //explode string ko array me convert krta h
        for ($i = 0,$j=0; $i < count($image); $i++,$j++) {
            if ( $delpic == $image[$i]) {
                // $image[$i]=$image[$i++];
                $j--;
                continue;
            }
            $img[$j]=$image[$i];
            
        // }
        }
        }
        // print_r($img);
        $pic = implode(',', $img);            //implode array ko string me covert krta h
        if ($object->displydeletepics($pic)) {
            echo $msg= "Gallary Updated";
                  
                }
            }


// add pics

if(isset($_POST['addpicbtn'])){
    $folder = "image/";
    $file = $_FILES['addpic']['name'];
    $count=0;
    for ($i = 0; $i < count($file); $i++) {
        $url = $folder . basename($file[$i]);
        move_uploaded_file($_FILES['addpic']['tmp_name'][$i], $url);
        $count++;
    }
    // $pic2 = implode(',', $file);            //implode array ko string me covert krta h
    $result = $object->displayimg();
    
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $image = explode(",", $row['pics']);                //explode string ko array me convert krta h
        for ($i = count($image),$j=0; $j < $count; $i++,$j++) {
                $image[$i]=$file[$j]; 
        }
        }

        $addimage=implode(',', $image);
        if ($object->displydeletepics($addimage)) {
            ?>
            <script>
                alert("pis add");
                window.location.href="display.php";
            </script>

            <?php
                  
                }
            

}



//udate pic


if(isset($_POST['btneditpic'])){
    $editpicid=$_POST['picdb'];
    $folder = "image/";
    $file=$_FILES['newpic']['name'];
    $path=$folder.basename($file);
    move_uploaded_file($_FILES['newpic']['tmp_name'],$path);

    $result = $object->displayimg();
    
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $image = explode(",", $row['pics']);                //explode string ko array me convert krta h
        for ($i =0;$i<count($image);$i++) {
                if($i==$editpicid){
                    $image[$i]=$file;
                }
        }
        }

        $addimage=implode(',', $image);
        if ($object->displydeletepics($addimage)) {
            ?>
            <script>
           
                window.location.href="display.php";
            </script>

            <?php
                  
                }

}

?>      
