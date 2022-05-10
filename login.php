<?php
$email=$_POST['email'];
$sifre=$_POST['sifre'];


if($email=="b211210073@sakarya.edu.tr"&&$sifre=="b211210073"){
    echo "HOŞGELDİN b211210073";
}
else{
    
    header("location:http://localhost/login/login.html");
    
}