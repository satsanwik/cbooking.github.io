<?php


$mysql_host='localhost';
$mysql_user='root';
$mysql_password='satwik@15160521';
$db='project';

$db=new mysqli($mysql_host,$mysql_user,$mysql_password,$db) or die();

$username = $_POST['user'];
$password = $_POST['pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);



$result = mysqli_query($db,"select * from customer where user_id = '$username' and password = '$password'") or die("failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if($row['user_id'] == $username && $row['password'] == $password ){
	echo "login sucess , welcome  <br> ";
	echo $row['user_id'];
	header('location:index2.html');
}else{
	echo "failed to login";
}

?>