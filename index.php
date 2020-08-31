
<!--<html>
<form method="post">
<table border="3">
<tr><th colspan="2">Login Here</th></tr>
<tr>
<td>User Name</td>
<td><input type="text" name="user" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>

<td colspan="2" align="center"><input type="submit" name="submit" value="Login" /></td>
</tr>
</table>


</form>-->

<?php
/*include("db.php");
$c=0;
if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$pass=$_POST['password'];
	if($user=="" or $pass=="")
	{
		echo"<script>alert('Empty Field Found')</script>";
		exit();
	}
else
{
	$query="select user,pass from login where user='$user' and pass='$pass'";
	//$query="select *from login where user='$user' and pass='$pass'";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run))
	{
	  $c++;	
	}
	if($c>0)
	{
	echo"<script>window.open('home.php')</script>";
	}

else{
	echo"user name or password is incorrect";
}
}	
	
}*/

?>
<!--</html> -->

<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<form action = "home.php" method = "post">
			<table width = "400" align = "center" border = "20">
				<tr>
					<td colspan = "5" align = "center" bgcolor = "gray">
						<h1>User Login</h1>
					</td>
				</tr>
				<tr>
					<td align = "right">User Name : </td>
					<td><input type = "text" name = "user_name"/></td>
				</tr>
				<tr>
					<td align = "right">User Password</td>
					<td><input type = "password" name = "user_pass"/></td>
				</tr>
				<tr>
					<td align = "center" colspan = "5"><input type = "submit" colspan = "5"
					name = "login" value = "Login"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php 
	include("db.php");
	
	if(isset($_POST['login']))
	{
		$user_name = mysqli_real_escape_string($con,$_POST['user_name']);
		$user_pass = mysqli_real_escape_string($con,$_POST['user_pass']);
		
		$encrypt = md5($user_pass);
		
		$login_query = "select * from user_login where user_name = 
		'$user_name' AND user_password = '$user_pass'";
		
		$run = mysqli_query($con,$login_query);
		
		if(mysqli_num_rows($run) > 0)
		{
			$_SESSION['user_name'] = $user_name;
			echo "<script>window.open('home.php','_self')</script>";
		}
		else
		{
			/*echo "<script>alert('User name or Password is incorrect !!!')</script>";*/
			echo "<script>alert('User Name or Password is incorrect !!!')</script>";
		}
	}
?>