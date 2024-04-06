<?php

    class link{

        function __construct(){
            $this->connect = mysqli_connect("localhost","root","","lists");
            session_start();
        }

        function uploadpics($name,$pic ,$contpics){
            $sql="INSERT INTO `multi_pics`(`name`, `pics`, `cont_pics`) VALUES('$name','$pic','$contpics') ";
            return mysqli_query($this->connect,$sql);
        }

        function displayimg(){
            $sql="SELECT * FROM multi_pics";
            return mysqli_query($this->connect,$sql);
        }
        function displydeletepics($pic){
            $sql="UPDATE `multi_pics` SET `pics`='$pic' ";
            return mysqli_query($this->connect,$sql);
        }

    }
  
    $object=new link();