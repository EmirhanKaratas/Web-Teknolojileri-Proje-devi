<?php
$email=$_POST['email'];
$sifre=$_POST['sifre'];


if($email=="b211210073@sakarya.edu.tr"&&$sifre=="b211210073"){
    
    header("location:anasayfa.html");

}
else{
    
    header("location:http://localhost/login/index.html");
    
}