<?php
include "server.php";  
             
    $id = $_GET['id'];
    $usname = $_GET['uname'];
    $ppose = $_GET['pur'];
    $hname = $_GET['hname'];
    $st = $_GET['st'];
    $et = $_GET['et'];
    $cdate = $_GET['cdate'];
    //Connect DB
    $db=mysqli_connect('localhost','root','','online_lechall_booking');
    //Create query based on the ID passed from you table
    //$sql1 = "DELETE FROM pendings WHERE pending_id = $id"; 
    $sql=mysqli_query($db,"INSERT INTO booked_lecture_hall (Username,purpose, Hall_name,startTime, endTime,check_date) VALUES ('$usname','$ppose','$hname', '$st','$et','$cdate')");
    $sql1=mysqli_query($db,"DELETE FROM pendings WHERE pending_id=$id");

    if($sql1){
        header('location:pending.php'); 
    
        exit;	
    }


?>