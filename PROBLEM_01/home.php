<?php
//Session_start for retreiving the username 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="load"></div>

    <!--Navbar-->
    <nav class="navbar navbar-dark  " style="background-color: #1B2D48;">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="home.php">Home</a>
            <ul class="navbar-nav ml-auto" id="list-items" style="margin-right: 10px" ;>
                <li class="nav-item">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button">
                        Hey <?php echo $_SESSION['username']; ?> !
                    </a>
                </li>
            </ul>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"><span class="navbar-toggler-icon"></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent15">

                <!-- Links -->
                <ul class="navbar-nav mr-auto text-right">

                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                </ul>
                <!-- Links -->

            </div>

            <!-- Collapsible content -->
        </div>
    </nav>
    <!--navbar-->
    <!--Welcome Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome <b><?php echo $_SESSION['username']; ?></b></h1>
            <hr class="my-4" style="border: 2px solid black;">
            <p class="lead">We hope you are having a great day!.</p>
            <p class="lead ">
                <a class="btn btn-dark btn-lg " href="logout.php" role="button">Log Out</a>
            </p>
        </div>
    </div>
    <!--Welcome Jumbotron ends here -->
    <!--Adding the Qoute card -->
    <div class="container">
        <div class="card border-dark">
            <div class="card-header">
                Here's a special quote for you, <em><?php echo $_SESSION['username']; ?></em> !
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0 text-center">
                    <h4>You never know how strong you are,</h4> until being strong is your only choice ..
                    <footer class="blockquote-footer"><cite title="Source Title">Bob Marley</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <!--Quote card ends here-->
    <!--Bootstrapp Javascript-->
    <!--The below script makes the hamburger icon work -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--Adding link for jquery , it makes the loader possible -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!--Adding jquery for the loader-->
    <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".load").fadeOut(5000);;
        });
    </script>
</body>
</html>