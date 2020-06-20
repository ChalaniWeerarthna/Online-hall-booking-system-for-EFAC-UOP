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

            <a class="navbar-brand  mr-auto" href="#"><img src="img/crest.png" height="41" width="41">Online Hall Booking System</a>
           <div class="collapse navbar-collapse" id="Navbar"></div>
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="./welcome.php"><span class="fa fa-home fa-lg"></span> Welcome</a></li>
                        <li class="nav-item"><a class="nav-link" href="./bookhall.php"><span class="fa fa-id-card-o"></span> Book Hall</a></li>
                        <li class="nav-item active"><a class="nav-link" href="./bookId.php"><span class="fa fa-list fa-lg"></span> My Bookings</a></li>
                        <li class="nav-item "><a class="nav-link" href="./editprofile.php"><span class="fa fa-user-circle"></span>My Account</a></li>
                        <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-sign-out"></span>Logout</a></li>
                   
                </ul>            
           </div>    
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col">
                      <h1 class= "text-center">Which reservation do you want to cancel ?</h1>
                     
                </div>
           </div>
        </div>   
    </header>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./welcome.php">Welcome</a></li>
                <li class="breadcrumb-item active">Book Hall</li>
            </ol>
        </div>

        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-primary text-white">Cancel Your Reservation</h3>
                    <div class="card-body">

                        <form method="post" action="booknow.php">

                            <div class="form-group row">
                                <label for="booking_id" class="col-md-2 col-form-label">Enter Booking Id</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="cancelid" name="cancelid" required="required" placeholder="Booking Id" value = "<?php echo $booking_id;?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="offset-md-2 col-md-10">
                                 <!--  <input class="btn btn-primary" type="button" value="Check">-->
                                    <!--<a href="./booknow.php" class="btn btn-info" role="button">Check</a>-->
                                    <button type="submit" name="cancelreserve" class="btn btn-info" role="button">Cancel Reservation</button>
                                    
                                </div>
                            </div>
                        </form>
        
        
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