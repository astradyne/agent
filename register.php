<?php
require_once 'db_connect.php';

if($_POST){
    $db=db_connect();
    $stmt=$db->prepare(
        'INSERT INTO `login` (`username`,`password`) VALUES (?,?);'
    );
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    var_dump($hash);
    //echo $hash;
    //die(); hash password show
    $stmt->execute([$_POST['username'], $hash]);
    header('Location:login.php');
    die;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
        <style>
    body{
        height:100vh !important;
        background: url(hydra.png);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
       
    }
   nav .navbar{
       background-color:#6f1215;
       }

</style>
</head>
<body>
<nav class="navbar navbar-dark bg-danger">
        <a class="navbar-brand" href="#">HYDRA - If a head is cut off, two more shall take its place</a>
    </nav>
<div class="container mx-auto w-50 d-flex justify-content-center ">
<div class="row">
<div class="col-12 bg-white px-5 py-3 m-3 mt-5 border-dark ">
    <h1 class="text-left">Register</h2><br>

  <form action="register.php" method="post">
    <div class="form-group row">
        
        <div class="col-sm-10">
            <input type="name" name="username" class="form-control border border-danger" id="name" placeholder="Username">
        </div>
        </div>
        <div class="form-group row">
       
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control border border-danger" id="inputPassword3" placeholder="Password"><br>
        </div>
        </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="d-inline btn btn-outline-danger btn-block">Sign up</button>
      </div>
    </div>
  </form>


</div>

</div>



</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>