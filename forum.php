<?php
require_once 'db_connect.php';

$db=db_connect();

$stmt = $db-> prepare('SELECT * FROM hydra');
$stmt -> execute();
$hydra = $stmt->fetchAll();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heil HYDRA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
</head>
<style>
    body{
        height:100vh !important;
        background: url(hydra.png);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
       
    }
   .navbar{
       background-color:#6f1215;
       }

</style>
<body>
    <nav class="navbar navbar-dark bg-danger">
        <a class="navbar-brand" href="#">HYDRA - If a head is cut off, two more shall take its place</a>
    </nav>
    
    <div class="container mx-auto w-50" >

        <div class="row">

            
                 <?php foreach ($hydra as $hyd):?>
                    <div class="col-12 bg-white w-50 py-3 m-3 border border-dark">
                        <p class="text-left"><?php echo '<b>'. htmlspecialchars  ($hyd['user']) .'</b>';?></p>
                        <p class="text-left"><?php echo '<b>Level:'.'</b>' . htmlspecialchars  ($hyd['level']) ;?></p>
                        <p><?php echo '<b>Message:'.'<br>'.'</b>' . htmlspecialchars  ($hyd['text']) ;?></p>
                    </div>
                <?php endforeach;?>
          

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