<?php
//PHP script begins here
//Session starts here
session_start();
//Establishing connection to our database
//Here 'root' is the default username in php and the password is blank i.e and empty string ''
$con = mysqli_connect('localhost','root','');
//Selecting the database that is used to store username and password
mysqli_select_db($con,'userreg');
//Binding the data input
$name = $_POST['name'];
$pass = $_POST['password'];
//Creating a query to check if any record exists with the entered username and password
$query = "select * from users where name = '$name'";
//Running the query and checking whether there exists a record of the user
//Here result is the table containing the matching records
$result = mysqli_query($con,$query);
//Here count is the number of rows in the result table
$count = mysqli_num_rows($result);
//If there already exists a user the count will be equal to 1 , then echoing that the username is taken
if($count == 1){
    echo "<center> <h1>This username has already been taken!</h1></center> ";
}
//No record exists means that user is new 
else{
    $reg = "insert into users(name,password) VALUES ('$name','$pass') ";
    mysqli_query($con,$reg);
}
//End of the PHP script
?>
<!doctype html>
<html lang="en" style=" background: url(success.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Success!</title>
</head>

<body style="background-color:transparent">
    <div class="container text-center" style="padding-top: 90px;">
        <!--Adding the jumbotron-->
        <div class="jumbotron" style="padding-top :10px;border-radius: 10%;background: rgba(204, 204, 204, 0.5)">
            <!--Heading of the jumbotron -->
            <h1 class="display-4 " style="color: white;">Regsitration Successful!</h1>
            <p class="lead ">We are excited to have you on-board!</p>
            <hr class="my-4 " style="background-color: wheat;">
            <!--Display of username and password -->
            <p> Your username is 
                <b><?php echo $_POST['name']; ?></b> 
               
                <br> Your password is <b> <?php echo $_POST['password']; ?></b>
            </p>
            <!--Adding link to go back to the login page-->
            <p class="lead">
                <a class="btn btn-success btn-lg " href="index.html" role="button" style="margin-top:30px;">Go back to Login page</a>
            </p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>