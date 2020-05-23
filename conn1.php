<?php
session_start();

$db = mysqli_connect('localhost', 'root', 'satwik@15160521', 'project');

// REGISTER USER
if (isset($_POST['save'])) {
  session_start();
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db,$_POST['n']);
  $lastname = mysqli_real_escape_string($db,$_POST['n1']);
  $email = mysqli_real_escape_string($db,$_POST['e']);
  $passwod = mysqli_real_escape_string($db,$_POST['p']);
  $passwod1 = mysqli_real_escape_string($db,$_POST['p1']);
  $pincode = mysqli_real_escape_string($db,$_POST['pn']);
  $number = mysqli_real_escape_string($db,$_POST['m']);
  

  if($passwod==$passwod1) {
  	$sql = "INSERT INTO customer VALUES('$firstname','$lastname','$number', '$email', '$passwod', '$pincode','')";
  	mysqli_query($db, $sql);
  	$_SESSION['message']="you have logged in successfully!";
  	$_SESSION['user_id'] = "$email";
      header('location: index2.html');
    
  }else{
    $_SESSION['message']="the two password do not match";
  }
}
?>
