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
        <div class="jumbotron" style="padding-top :10px;border-radius: 10%;background: rgba(204, 204, 204, 0.5)">
            <h1 class="display-4 " style="color: white;">Regsitration Successful!</h1>
            <p class="lead ">We are excited to have you on-board!</p>
            <hr class="my-4 " style="background-color: wheat;">
            <p> Hello
                <?php echo $_POST['name']; ?>!<br> Your mail is
                <?php echo $_POST["mail"]; ?>
            </p>
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