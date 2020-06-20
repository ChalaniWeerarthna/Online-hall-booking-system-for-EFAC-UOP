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
                    <li class="nav-item  active "><a class="nav-link" href="./welcome.php"><span class="fa fa-home fa-lg"></span> Welcome</a></li>
                    <li class="nav-item"><a class="nav-link" href="./viewusers.php"><span class="fa fa-id-card-o"></span> View Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="./bookindetails.php"><span class="fa fa-calendar"></span> View Booking Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="./pending.php"><span class="fa fa-list fa-lg"></span> View Requests</a></li>
                    <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-sign-out"></span>Logout</a></li>
                   
                </ul>            
           </div>    
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
        <div class="row row-header">
                <div class="col-12 align-self-center">
                    <h1> View users and Booking details</h1>
                    
                </div>
                
            </div>
        </div>
    </header>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./welcome.php">Welcome</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
        </div>

        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
               <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img/user.png" height="163" width="174" alt="View Users" >
                    <div class="media-body">
                        
                        <a href="./viewusers.php"><h2 class="mt-0">View Users</h2> </a>
                        <p class="d-none d-sm-block">you can view user details here.
                        </p>
                    </div>
                </div>
               
           
            </div>
        
        </div>
        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
              
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img/booking.png" alt="Booking Details">
                    <div class="media-body">
                        <a href="./bookindetails.php"><h2 class="mt-0">View Booking Details</h2> </a>
                        <p class="d-none d-sm-block">You can view bookindetails here. 
                        </p>
                    </div>
                </div>
           
            </div>
        
        </div>

        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
               <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img/booking-calendar-reservation.png" alt="Booking requests" height="200" width="200" >
                    <div class="media-body">
                        
                        <a href="./pending.php"><h2 class="mt-0">View Bookings Requests</h2> </a>
                        <p class="d-none d-sm-block">Approve the booking requests here.
                        </p>
                    </div>
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