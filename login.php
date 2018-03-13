<html>
<head>
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}
}
</style>
</style>
</head>

</html>
<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if($username && $password)
{
	require('connectdb.php');
	$extract=mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows=mysql_num_rows($extract);
	if($numrows!=0)
{
	while($row=mysql_fetch_assoc($extract))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	}
		if( $dbusername==$username && $dbpassword==$password)
		{
			
			//echo "<a href='link.php'>click to redirect</a>";
			$_SESSION['username']=$username;
			header("Location: link.php");
		}
		else
			echo "incorrect password";
		
		
}

else
echo "invalid username and password";
}
else
	echo "please enter username and password";
?>