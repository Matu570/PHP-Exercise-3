<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <!-- Create a function that validates a email using filter_var, recibe a variable from GET and validate it and show the result.-->
    <?php
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        if($error=="Incorrect email"){
            echo '<strong style="color:red">Introduce a correct email</strong>';
        };
    };
    ?>
    <form action="validate.php" method="POST">
        <p><label>Email: <input type="email" name="email" placeholder="example@email.com" required></label></p>
        <p><input type="submit" value="Submit"></p>
    </form>
</body>
</html>