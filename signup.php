<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<link rel="stylesheet" href="style (1).css">
</head>

<body>
    <header>

        <h1>Registration page</h1>
    </header>
    <section>
<form method="POST" action="conn1.php">
<table width="393" border="1">
 <tr>
 	<td colspan="2"><?php echo @$msg; ?></td>
 </tr>
  <tr>
    <td width="159">Enter your firstName</td>
    <td width="218">
	<input type="text" placeholder="your first name"  name="n" pattern="[a-z A-Z]*" required /></td>
  </tr>
  <tr>
    <td width="159">Enter your lastName</td>
    <td width="218">
	<input type="text" placeholder="your last name"  name="n1" pattern="[a-z A-Z]*" required /></td>
  </tr>
  <tr>
    <td>Enter your user Id</td>
    <td><input type="email" name="e"/></td>
  </tr>
  <tr>
    <td>Enter your Password</td>
    <td><input type="password" name="p"/></td>
  </tr>
  <tr>
    <td>Enter your Password again</td>
    <td><input type="password" name="p1"/></td>
  </tr>
  <tr>
    <td>Enter your city pincode</td>
    <td><input type="pincode" name="pn"/></td>
  </tr>
  <tr>
    <td>Enter your Mobile</td>
    <td><input type="text" pattern="[0-9]*" name="m" /></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="save" value="Register Me"/>
	<input type="reset" value="Reset"/>
	</td>
  </tr>
</table>
</form>
</section>
<footer>
            <center>DBMS PROJECT ON ONLINE CRICKET MATCH TICKET BOOKING SYSTEM</center>
        </footer>
</body>
</html>