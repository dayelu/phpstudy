<?php
    // $conn=mysqli_connect("localhost","root","root1","test");		//localshot can tip error file not found
    $conn=mysqli_connect("127.0.0.1","root","root1","test");
    if($conn){
        echo"ok";
    }else{
        echo"error";
    }
?>