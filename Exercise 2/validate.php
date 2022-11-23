<?php
function validate(){
    $error="incomplete";
if(!empty($_POST['email'])){
    $error="ok";
    $email=$_POST['email'];
    if(!is_string($email)||!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error="Incorrect email";
    };
};
if($error=="ok"){
    echo "<h2>Email saved successfully";
    echo "<p>Email: $email </p>";
}else{
    header("Location:index.php?error=$error");
};
};
validate();

?>