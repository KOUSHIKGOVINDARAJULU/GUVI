<?php

try{
	$con=new PDO("mysql:host=localhost;dbname=guvi","root","");
}catch(PDOExection $e){
	echo $e->getMessage();
}

$Email=$_POST['email'];
$password=$_POST['password'];

$sql="insert into data(email,password) values('$Email','$password')";
$stmt=$con->prepare($sql);
$stmt->execute();

?>