<?php

// model do registro

if(isset($_POST['uMail'])){

$uMail = preg_replace('/\\//', '', trim($_POST['uMail']));
$uPassword = preg_replace('/\\//', '', trim($_POST['uPassword'])); 

$sqlInsert = "INSERT INTO registroBase (uMail, uPassword) VALUES ('$uMail', '$uPassword')";
$conn->query($sqlInsert); 
    
}


?>