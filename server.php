<?php
   session_start();
   $username="";
   $password="";

   $usernameA="";
   $passwordA="";

   $firstname="";
   $lastname="";
   $telnum="";
   $email="";
   $status="";
   $username="";
   $currusername="";
   $curremail="";
   $password_1="";
   $password_2="";

   $date="";
   $hall="";
   $startTime="";
   $endTime="";
   $booking_id="";

   $usernameB="";
   $dateB="";
   $purpose="";
   $hallB="";
   $startTimeB="";
   $endTimeB="";
  
   $pid="";
   $usernameC="";
   $errors=array();

   
   //Connect to the database  
   $db=mysqli_connect('localhost','root','','online_lechall_booking');

   function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
   }

   // REGISTER USER
if (isset($_POST['register'])) {
   // receive all input values from the form
   $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
   $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $telnum=  mysqli_real_escape_string($db, $_POST['telnum']);
   $status=  mysqli_real_escape_string($db, $_POST['status']);
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
   $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 
   // form validation: ensure that the form is correctly filled ...
   // by adding (array_push()) corresponding error unto $errors array
   
   if ($password_1 != $password_2) {
    $msg_1="<font color='red'> The two  passwords do not match!</font>";  
    array_push($errors,$msg_1);
    
   }
   //To check user already exists or not
    $sql=mysqli_query($db,"select email from user_registration  where email='$email'");
    $return=mysqli_num_rows($sql);
    //if $return returns true value it means user's email already exists
    if($return)
    {
      $msg_2="<font color='red'> You already have an account!</font>";
      array_push($errors,$msg_2);
    }
    //To check username exists or not
    $sql=mysqli_query($db,"select UserName from user_registration  where UserName='$username'");
    $return=mysqli_num_rows($sql);
    //if $return returns true value it means user's email already exists
    if($return)
    {
      $msg_2="<font color='red'> This username is already exist! Please select another one!</font>";
      array_push($errors,$msg_2);
    }
 
   // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
    $_SESSION['username'] = $username;
   
    $query=mysqli_query($db,"INSERT INTO user_registration (First_name, Last_name, email, Phone,Status, UserName, Password)VALUES ('$firstname','$lastname','$email', '$telnum', '$status','$username',  '$password')");
    //$queryup=mysqli_query($db,"CREATE USER '$usernameR'@'localhost' IDENTIFIED BY '$passwordR'");
                 echo "<script>alert('Successfully Registered!')</script>";
                 echo "<script>window.open('login.php','_self')</script>";
 
   }
 
 
   
 }
 
 //////////////////////////////////////////////////////////////////////////////////////////////////////

   //if the login button is clicked
   if(isset($_POST['login'])){
   	$username=$_POST['username'];
      $password=$_POST['password'];
      $password = md5($password);
    
      $query=mysqli_query($db,"SELECT UserName,Password FROM user_registration WHERE UserName='$username' AND Password='$password'");

         if(count($errors) ==0 && mysqli_num_rows($query)>0){ 
            //session_start(); 
            $_SESSION['SUCCESS']=TRUE;
            $_SESSION['user']=$username;

            echo "<script>alert('Login successfully!')</script>";
           echo "<script>window.open('welcome.php','_self')</script>"; 
           

         }else{
            $_SESSION['fail']=TRUE;
            
            unset($_SESSION['fail']);
            echo "<script>alert('User Name or password is incorrect!')</script>"; 
          
         }
       

     }
//////////////////////////////////////////////////////////////////////////////////////////////////////////

      if(isset($_POST['loginA'])){
        $usernameA=$_POST['usernameA'];
        $passwordA=$_POST['passwordA'];
         
           $query=mysqli_query($db,"SELECT Username,Password FROM admin WHERE Username='$usernameA' AND Password='$passwordA'");

           if(count($errors) ==0 && mysqli_num_rows($query)>0){  
              //$_SESSION['SUCCESS'];
             //$_SESSION['SUCCESS']="You are now logged in";
             echo "<script>alert('Login Successfully!')</script>"; 
             echo "<script>window.open('adminpage.php','_self')</script>";

           }else{
            echo "<script>alert('Email or password is incorrect!')</script>"; 
           }
      }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EDIT PROFILE
if (isset($_POST['edit'])) {
  // receive all input values from the form
  $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
  $curremail = mysqli_real_escape_string($db, $_POST['curremail']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $telnum=  mysqli_real_escape_string($db, $_POST['telnum']);
  $status=  mysqli_real_escape_string($db, $_POST['status']);
  $currusername = mysqli_real_escape_string($db, $_POST['currusername']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if ($password_1 != $password_2) {
    $msg_1="<font color='red'> The two  passwords do not match!</font>";  
    array_push($errors,$msg_1);
    
  }
  //To check user already exists or not
    $sql=mysqli_query($db,"select email from user_registration  where email='$email'");
    $return=mysqli_num_rows($sql);

    
        //if $return returns true value it means user's email already exists
      if($return)
      {
        if($email!=$curremail){
          $msg_2="<font color='red'> This email has an account!</font>";
          array_push($errors,$msg_2);
        }
      }
    
    //To check username exists or not
    $sql=mysqli_query($db,"select UserName from user_registration  where UserName='$username'");
    $return=mysqli_num_rows($sql);
    //if $return returns true value it means user's email already exists
    if($return)
    {
      if($username!=$currusername){
        $msg_2="<font color='red'> This username is already exist! Please select another one!</font>";
        array_push($errors,$msg_2);
      }
    }

  // Finally, update user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
      $_SESSION['username'] = $username;
  
      $sql=mysqli_query($db,"UPDATE user_registration SET First_name= '$firstname', Last_name='$lastname', email='$email', Phone='$telnum',Status='$status', UserName='$username', Password='$password' WHERE UserName='$currusername'");

      if ($sql)
            
          {  echo "<script>alert('Successful - Profile Updated!')</script>";  }
      else
          { 
          echo "<script>alert('Unsuccessful - ERROR!')</script>"; }
    }
  
} 








////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// check the availability of the hall

      if(isset($_POST['check'])){
        $date=$_POST['date'];
        $hall=$_POST['hall'];
        $startTime=$_POST['startTime'];
        $endTime=$_POST['endTime'];

         
           $query1=mysqli_query($db,"INSERT INTO check_availability (check_date,Hall_name, startTime, endTime) VALUES ('$date', '$hall', '$startTime','$endTime')");
           //$query100=mysqli_query($db,"SELECT check_date, Hall_name, startTime, endTime FROM booked_lecture_hall WHERE check_date='$date' AND Hall_name= '$hall' AND startTime>='$startTime' AND startTime<'$endTime' AND endTime>'$startTime' AND endTime<='$endTime'");
           //$query3=mysqli_query($db,"DELETE FROM check_availability WHERE check_date='$date' AND Hall_name='$hall' AND startTime='$startTime' AND endTime='$endTime'");
           $query=mysqli_query($db,"SELECT * FROM booked_lecture_hall WHERE check_date='$date' AND Hall_name= '$hall' AND (((startTime<='$startTime' AND endTime>'$startTime') OR (startTime<'$endTime' AND endTime>='$endTime')) OR (startTime>='$startTime' AND endTime<='$endTime'))");
           $query101=mysqli_query($db,"SELECT * FROM pendings WHERE check_date='$date' AND Hall_name= '$hall' AND (((startTime<='$startTime' AND endTime>'$startTime') OR (startTime<'$endTime' AND endTime>='$endTime')) OR (startTime>='$startTime' AND endTime<='$endTime'))");
           
           if(count($errors) ==0 && mysqli_num_rows($query)==0 && mysqli_num_rows($query101)==0){  
              $_SESSION['SUCCESS'];
              //$_SESSION['SUCCESS']="You are now logged in";
              //echo "Hall is booked";
             header('location: booknow.php');//redirect to booknow

             


           }else{
            echo "<script>alert('Already Requested. Please try for another reservation!')</script>"; 
            //header('location: bookhall.php');
           }
           
        //}
      }

      ////////////////////////////////////////////////////////////////////////////////////////////////////
      //Autofill the details of the hall that you want to book, what you enter at check availability

      if(isset($_POST['click'])){
            
        $query2=mysqli_query($db,"SELECT check_date,Hall_name, startTime, endTime FROM check_availability WHERE ID = (SELECT MAX(ID) FROM check_availability)");
     
         while ($row = mysqli_fetch_array($query2, MYSQLI_NUM)){
          //$usernameB=$row[0];
          $dateB=$row[0];
          $hallB=$row[1];
          $startTimeB=$row[2];
          $endTimeB=$row[3];
        }
      }


      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //booking the hall

      if(isset($_POST['book'])){
         $usernameB=$_POST['usernameB'];
        $dateB=$_POST['dateB'];
        $purpose=$_POST['purpose'];
        $hallB=$_POST['hallB'];
        $startTimeB=$_POST['startTimeB'];
        $endTimeB=$_POST['endTimeB'];
 /////////////////////////////transactions/////////////////
        function begin(){
         global $db;
          $q1 = mysqli_query($db,"BEGIN");
        }
        function commit(){
          global $db;
          $q2 = mysqli_query($db,"COMMIT");
        }
        function rollback(){
          global $db;
          $q3 = mysqli_query($db,"ROLLBACK");
        }
          
/////////////////////////////////////////////////////////

           $sql=mysqli_query($db,"select UserName from user_registration  where UserName='$usernameB'");
           $return=mysqli_num_rows($sql);
    //if $return returns true value it means user's email already exists
          if($return){
            begin(); // transaction begins
            $querypend=mysqli_query($db,"INSERT INTO pendings (Username,purpose, Hall_name,startTime, endTime,check_date) VALUES ('$usernameB','$purpose','$hallB', '$startTimeB','$endTimeB','$dateB')");
            if(!$querypend){
              rollback(); // transaction rolls back
              exit;
             }else{
            
            commit(); // transaction is committed
            //  $querypend=mysqli_query($db,"INSERT INTO pendings (Username,purpose, Hall_name,startTime, endTime,check_date) VALUES ('$usernameB','$purpose','$hallB', '$startTimeB','$endTimeB','$dateB')");
              echo "<script type='text/javascript'>alert('Your request was sent! It will be approved immediately.');
              window.location='welcome.php';
              </script>";
            }
          
          
          }else{
            $msg_1="<font color='red'> Invalied Username!</font>";
            array_push($errors,$msg_1);

          }
         // $querypend=mysqli_query($db,"INSERT INTO pendings (Username,purpose, Hall_name,startTime, endTime,check_date) VALUES ('$usernameB','$purpose','$hallB', '$startTimeB','$endTimeB','$dateB')");
           // $query=mysqli_query($db,"INSERT INTO booked_lecture_hall (Username,purpose, Hall_name,startTime, endTime,check_date) VALUES ('$usernameB','$purpose','$hallB', '$startTimeB','$endTimeB','$dateB')");
           
        }
 
       

       
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cancelreserve'])){
         $cancel_id=$_POST['cancelid'];
          
           
            //$query3=mysqli_query($db,"DELETE FROM check_availability WHERE check_date='$date' AND Hall_name='$hall' AND startTime='$startTime' AND endTime='$endTime'");
            $query101=mysqli_query($db,"DELETE FROM booked_lecture_hall WHERE booking_id='$cancel_id' ");
            
            echo "<script type='text/javascript'>alert('Reservation is cancelled successfully!');
                 window.location='myreservation.php';
                 </script>";
            
         //}
       }

       if(isset($_POST['cancelreserve2'])){
         $usernameC=$_POST['username'];
         $cancel_id=$_POST['cancelid'];
         $sql1=mysqli_query($db,"select UserName from user_registration  where UserName='$usernameC'");
         $return1=mysqli_num_rows($sql1);
         if($return1){
            $sql2=mysqli_query($db,"select booking_id from booked_lecture_hall  where booking_id='$cancel_id'");
            $return2=mysqli_num_rows($sql2);
            if($return2)
            {
              //$query3=mysqli_query($db,"DELETE FROM check_availability WHERE check_date='$date' AND Hall_name='$hall' AND startTime='$startTime' AND endTime='$endTime'");
              $query101=mysqli_query($db,"DELETE FROM booked_lecture_hall WHERE booking_id='$cancel_id' ");
              
              echo "<script type='text/javascript'>alert('Your reservation is Cancelled successfully !');
                    window.location='bookId.php';
                    </script>";
              
            } else{
            $msg_3="<font color='red'> Invalied Booking ID!</font>";
            array_push($errors,$msg_3);
            }

         }else{
          $msg_4="<font color='red'> Invalied Username!</font>";
          array_push($errors,$msg_4);
         }
         
       }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





   if(!$db){
   echo "Error: " . mysqli_error($link);
   }

?>
