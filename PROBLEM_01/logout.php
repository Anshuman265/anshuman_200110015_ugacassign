<?php
//PHP script begins here
session_start();
//Destroying the session so that a new user is able to login/register and the credentials of the previous user is deleted
session_destroy();
//Redirecting back to the sign-in/register page
header('location:index.html');
//PHP script ends her
?>