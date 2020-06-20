<?php
include "server.php";  

       
             
        $id = $_GET['id'];
        $uname = $_GET['uname'];
        
        //Connect DB
        $db=mysqli_connect('localhost','root','','online_lechall_booking');
        //Create query based on the ID passed from you table
        //$sql1 = "DELETE FROM pendings WHERE pending_id = $id"; 
     
        $sql1=mysqli_query($db,"DELETE FROM user_registration WHERE user_id=$id");

        if($sql1){
        
            echo "<script>alert('User is removed successfully!')</script>"; 
            echo "<script>window.open('viewusers.php','_self')</script>";
        // header('location:viewusers.php'); 
        
            exit;	
        }
    

?>