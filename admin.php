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
                         <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="./register.php"><span class="fa fa-id-card-o"></span> Register</a></li>
                        <li class="nav-item "><a class="nav-link" href="./login.php"><span class="fa fa-sign-in"></span> Login</a></li>
                        <li class="nav-item active"><a class="nav-link" href="./admin.php"><span class="fa fa-user-circle"></span> Admin</a></li>
                        <li class="nav-item "><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Guide</a></li>
                   
                </ul>            
           </div>    
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
        <div class="row row-header">
                <div class="col">
                    <h1 class= "text-center"> View users and Booking details</h1>
                    
                </div>
                
            </div>
        </div>
    </header>

    <div class="container"> 
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
        </div>

        <div class="row row-content">  

            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <h3 class="card-header bg-primary text-white">Admin Login</h3>
                    <div class="card-body">
                        <form method="post" action=" ">
                            
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">User Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="usernameA" name="usernameA" required="required" placeholder="User Name" value = "<?php echo $usernameA;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="passwordA" name="passwordA" required="required" placeholder="Password" value="<?php echo $passwordA; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-md-2 col-md-10">
                                    
                                    <!--<a href="./adminpage.html" class="btn btn-info" role="button">Login</a>-->
                                    <button type="submit" name="loginA" class="btn btn-primary" role="button">Login</button>
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