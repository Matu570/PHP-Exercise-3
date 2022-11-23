<!-- Make a user interface (using a form) with 2 inputs and 4 buttons: 
add, subtract, divide and multiply-->
<?php
$result = false;
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    
    if(isset($_POST['add'])){
        $result="The result is ".($_POST['n1']+$_POST['n2']);
    };
    if(isset($_POST['subtract'])){
        $result="The result is ".($_POST['n1']-$_POST['n2']);
    };
    if(isset($_POST['multiply'])){
        $result="The result is ".($_POST['n1']*$_POST['n2']);
    };
    if(isset($_POST['divide'])){
        $result="The result is ".($_POST['n1']/$_POST['n2']);
    };
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<body>
    <h1>PHP Calculator</h1>
    <form action="" method="POST">
        <label>Number 1 <input type="number" name="n1"></label>
        <label>Number 2 <input type="number" name="n2"></label>
        <hr>
        <input type="submit" value="Add" name="add">
        <input type="submit" value="Subtract" name="subtract">
        <input type="submit" value="Multiply" name="multiply">
        <input type="submit" value="Divide" name="divide">
        <hr>




    </form>

    <?php
    if ($result != false):
        echo "<h2>$result</h2>";
    endif;
    ?>
</body>

</html>