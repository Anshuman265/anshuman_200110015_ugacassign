<?php
//PHP script begins here
session_start();
////Establishing connection to our database
//Here 'root' is the default username in php and the password is blank i.e and empty string ''
$con = mysqli_connect('localhost', 'root', '');
//Selecting the database that is used to store username and password
mysqli_select_db($con, 'userreg');
//Binding the data input
$name = $_POST['user'];
$pass = $_POST['password'];
//Creating a query to check if the username and the password match
$query = "select * from users where name = '$name' && password =  '$pass'";
$result = mysqli_query($con, $query);
//Here $count is the number of matches. Matches here means the number of credentials corresponding to the given username
$count = mysqli_num_rows($result);
//For a successful login the number of matches should be equal to 1.
if($count == 1){
    //Assigning the username value for further use
    $_SESSION['username'] = $name;
    //Redirecting to the the homepage
   header('location:home.php');
}
else{
    //count not equals to 1 indicates that the credentials are wrong hence redirecting to the failed login page
    header('location:fail.html');
}
//PHP script ends her
?>


