<html>
<head>
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}

</style>
</head>
</html>
<?php
require('connectdb.php');
echo "<form action='registration.php' method='POST'";
$c;
$extract=mysql_query("SELECT cricket FROM answers");
$numrows=mysql_num_rows($extract);
$i=0;
$j=0;
if(isset($_POST['ansc1']))
{
		$arr[$i]=$_POST['ansc1'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}
if(isset($_POST['ansc2']))
{
		$arr[$i]=$_POST['ansc2'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc3']))
{
		$arr[$i]=$_POST['ansc3'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc4']))
{
		$arr[$i]=$_POST['ansc4'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc5']))
{
		$arr[$i]=$_POST['ansc5'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc6']))
{
		$arr[$i]=$_POST['ansc6'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc7']))
{
		$arr[$i]=$_POST['ansc7'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc8']))
{
		$arr[$i]=$_POST['ansc8'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc9']))
{
		$arr[$i]=$_POST['ansc9'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansc10']))
{
		$arr[$i]=$_POST['ansc10'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}


	$c=0;
	while($row=mysql_fetch_assoc($extract))
	{
		$anschdb=$row['cricket'];
		if($anschdb==$arr[$j])
			$c++;
		$j++;
	}
	//echo $c;
    if($c >=7)
   {
echo "<center><br><br><h1>Congratulations!You are now eligible to Register</h1>";
	//header("Location: register.php");
	//echo "<input type='submit' name='submit' value='Register'<br></form>";
	echo "<a href='register.php'<button><font size='7' color='green'>Sign Up</font></button></a><br><br></center>";
   }
else
{
	echo "<br><br><br><br><center><h1>Sorry! You are not eligible to Register</h1>";
	echo "<a href='base.php'<button><font size='5' color='red'>Back to Main page</font></button></a><br><br></center>";
}

?>
	