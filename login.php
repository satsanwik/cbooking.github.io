<!DOCTYPE html>
<html>
    <head>
        <title>Transperent login form</title>
        <link rel="stylesheet" href="style2.css">
    <body>
		<header>
			<h1>Sign in page</h1>
		</header>
		<section>

        <div id="frm">
		<label>New user? signup here!</label>
<BR>
<BR>

	<a href="signup.php"><button>SIGN UP</button></a>
<br>
<br>
	
<label>sign in here !</label>
		
			<form action="process.php" method="POST">
				<p>
					<label>Username:</label>
					<input type="text" id="user" name="user"  />
				
				</p>
				
				<p>
					<label>Password:</label>
					<input type="password" id="pass" name="pass"  />
				
				</p>
				
				<p>
					<input type="submit" class="btn" id="btn" name="Login"  />
					
				
				</p>
			</form>
</section>
		
		
<footer>
            <center>DBMS PROJECT ON ONLINE CRICKET MATCH TICKET BOOKING SYSTEM</center>
        </footer>
		
		</div>
    </body>
</html>