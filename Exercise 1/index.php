<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Create a session that increases or decreases its value in one accoording at GET-counter parameter-->
    <?php
    session_start();
    if(!isset($_SESSION["number"])){
        $_SESSION['number']=0;
    };
    if(isset($_GET['counter']) && $_GET['counter']==1){
        $_SESSION['number']++;
    };
    if(isset($_GET['counter']) && $_GET['counter']==0){
        $_SESSION['number']--;
    };
    ?>

    <h1>The session value is: <?= $_SESSION['number'];?></h1>
    <a href="index.php?counter=1">Increment the value</a>
    <br>
    <a href="index.php?counter=0">Decrement the value</a>





</body>
</html>