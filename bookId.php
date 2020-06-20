<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Hall Booking System</title>
     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    
     <link href="css/styles.css" rel="stylesheet">
 
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm bg-primary fixed-top">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand " href="#"><img src="img/crest.png" height="41" width="41">Online Hall Booking System</a>
            <div class="collapse navbar-collapse  justify-content-end" id="Navbar">
                <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="./welcome.php"><span class="fa fa-home fa-lg"></span> Welcome</a></li>
                        <li class="nav-item"><a class="nav-link" href="./bookhall.php"><span class="fa fa-id-card-o"></span> Book Hall</a></li>
                        <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-list fa-lg"></span>My Bookings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item active" href="./bookId.php">View My Bookings</a>
                                    <a class="dropdown-item" href="./mybookins.php">Cancel Bookings</a>
                                </div>
                                
                        </li>
                        <li class="nav-item "><a class="nav-link" href="./editprofile.php"><span class="fa fa-user-circle"></span>Edit Profile</a></li>
                        <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-sign-out"></span>Logout</a></li>
                   
                </ul>            
           </div>    
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-head">
                
                    <div class="col">
                      <h1 class= "text-center">Check your reservations here</h1>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./welcome.php">Welcome</a></li>
                <li class="breadcrumb-item active">My bookings</li>
            </ol>
        </div>

        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-primary text-white">Enter Your Username</h3>
                    <div class="card-body">

                        <form method="post" action="bookId.php">

                            <div class="form-group row">
                                <label for="booking_id" class="col-md-2 col-form-label">Username</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="usernameC" name="usernameC" required="required" placeholder="Username" value = "<?php echo $usernameC;?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="offset-md-2 col-md-10">
                                 <!--  <input class="btn btn-primary" type="button" value="Check">
                                    <a href="./mybookins.php" class="btn btn-info" role="button">Check Reservations</a>-->
                                    <button type="submit" name="checkreserve" class="btn btn-primary" role="button">Check Reservations</button>
                                    
                                </div>
                            </div>
                        </form>
        
        
                    </div>
                </div>
            </div>

        
        </div>
        
        <div class="row row-content">

            <div class="col">
              <h3 class="card-header bg-primary text-white">Booking details</h3>
              <form method="post" action="mybookins.php">
               
                   <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Booking Id</th>
                                <th>Username</th>
                                <th>Purpose</th>
                                <th>Hall Name</th>
                                <th>Date</th>
                                <th>Time: From</th>
                                <th>Time: To</th>
                                <th></th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                                  if(isset($_POST['checkreserve'])){
                                    $usernameC=$_POST['usernameC'];
                                  //Connect to database
                                  //require'connectDB.php';
                                  
                                  $db=mysqli_connect('localhost','root','','online_lechall_booking');
                                 // $sql=mysqli_query($db,"SELECT booked_lecture_hall.booking_id,CONCAT(user_registration.First_name,' ',user_registration.Last_name),user_registration.email, user_registration.Phone, booked_lecture_hall.check_date, booked_lecture_hall.Hall_name, booked_lecture_hall.startTime, booked_lecture_hall.endTime FROM user_registration, booked_lecture_hall FORCE INDEX(t_order_myrsv) WHERE user_registration.UserName = '$usernameC' and booked_lecture_hall.check_date>=CURDATE() ORDER BY booked_lecture_hall.check_date,booked_lecture_hall.startTime asc");
                                   $sql= mysqli_query($db,"SELECT *FROM booked_lecture_hall where UserName = '$usernameC' and check_date>=CURDATE() ");

                                  while ($row    = mysqli_fetch_array($sql,MYSQLI_NUM)){
                                        echo "<tr><td>";
                                        echo $row[0];
                                        echo "</td><td>";
                                        echo $row[1];
                                        echo "</td><td>";
                                        echo $row[2];
                                        echo "</td><td>";
                                        echo $row[3];
                                        echo "</td><td>";
                                        echo $row[6];
                                        echo "</td><td>";
                                        echo $row[4];
                                        echo "</td><td>";
                                        echo $row[5];
                                        echo "</td><td>";
                                       
                                  }
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
           

             <div class="col-12 col-sm-3">
            </div>
       
       <div class="form-group row">
            <div class="offset-4 col-md-10">
            <!--  <input class="btn btn-primary" type="button" value="Check">-->
            <!--<a href="./booknow.php" class="btn btn-info" role="button">Check</a>-->
            <button type="submit" name="cancel" class="btn btn-danger btn-lg" role="button">Click here to cancel your Reservations</button>
                                    
            </div>
        

        </div>
       </form>
        
        
                    </div>
                </div>
            </div>
    </div>
    
    
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Faculty of Engineering</h5>
                    <address>
		              University of Peradeniya<br>
		              
                      <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                      <i class="fa fa-envelope fa-lg"></i>: 
                      <a href="mailto:confusion@food.net">eng.ac.pdn@lk</a>

		           </address>
                </div>
                
            </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Online Hall Booking System</p>
                </div>
           </div>
        </div>
    </footer>
    
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>