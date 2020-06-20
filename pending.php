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
                    <li class="nav-item "><a class="nav-link" href="./adminpage.php"><span class="fa fa-home fa-lg"></span> Welcome</a></li>
                    <li class="nav-item "><a class="nav-link" href="./viewusers.php"><span class="fa fa-id-card-o"></span> View Users</a></li>
                    <li class="nav-item "><a class="nav-link" href="./bookindetails.php"><span class="fa fa-calendar"></span>View Booking Details</a></li>
                    <li class="nav-item active"><a class="nav-link" href="./pending.php"><span class="fa fa-list fa-lg"></span> View Requests</a></li>
                    <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-sign-out"></span>Logout</a></li>
                   
                </ul>            
           </div>    
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row justify-content-center">
                
                    <div class="col-auto">
                      <h1>Permit the Bookings</h1>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./welcome.php">Welcome</a></li>
                <li class="breadcrumb-item active">View Requests</li>
            </ol>
        </div>

        <div class="row row-content">
            <div class="col-auto">
                <h2>Pending Requests</h2>
                   <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Pending Id</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                                
                                <th>Date</th>
                                
                                <th>Hall Name</th>
                                <th>Time: From</th>
                                <th>Time: To</th>
                                <th>Permit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                                 $variale=" " ;
                                  //Connect to database
                                  //require'connectDB.php';
                                  
                                  $db=mysqli_connect('localhost','root','','online_lechall_booking');
                                  $sql=mysqli_query($db,"SELECT pendings.pending_id,CONCAT(user_registration.First_name,' ',user_registration.Last_name),user_registration.email, pendings.check_date, pendings.Hall_name, pendings.startTime, pendings.endTime,pendings.purpose,pendings.username FROM user_registration, pendings FORCE INDEX(index_pending) WHERE user_registration.UserName = pendings.Username and pendings.check_date>=CURDATE() ORDER BY pendings.check_date,pendings.startTime asc");
                                    

                                  while ($row    = mysqli_fetch_array($sql)){
                                    $pid=$row[0];
                                    $name=$row[1];
                                    $email=$row[2];
                                    $date=$row[3];
                                    $hall=$row[4];
                                    $stime=$row[5];
                                    $etime=$row[6];
                                    $ppose=$row[7];
                                    $usname=$row[8];

                                    ?>
                                    
                                    <tr>
                                    <td><?php echo $pid;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $email;?></td>
                                    <td><?php echo $date;?></td>
                                    <td><?php echo $hall;?></td>
                                    <td><?php echo $stime;?></td>
                                    <td><?php echo $etime;?></td>
                                    <td><a href='permitbookings.php?id=<?php echo $pid; ?>&uname=<?php echo $usname; ?>&pur=<?php echo $ppose; ?>&hname=<?php echo $hall; ?>&st=<?php echo $stime; ?>&et=<?php echo $etime; ?>&cdate=<?php echo $date; ?>' onClick="return confirm('Are you sure you want to permit this?')">Permit</a></td>
                                    </tr>
                                        
                                    <?php }
                            ?>
                            
                        </tbody>
                    
                    </table>
                </div>
            </div>
             <div class="col-12 col-sm-3">
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