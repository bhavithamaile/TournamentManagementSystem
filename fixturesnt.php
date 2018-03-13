<html>
<body>
<center>
<h1>Fixtures</h1>
</center>
<form action='fixtures.php' method='POST'>
<b>Enter number of colleges:</b><input type='number' name='number1'>
<input type='submit' name='submit' value='submit'><br></form>
<form action='round1.php' method='POST'>
<?php 
require('connectdb.php');
$extract=mysql_query("SELECT * FROM college");
$numrows=mysql_num_rows($extract);
if(isset($_POST['submit']))
{
$number1=$_POST['number1'];
//echo "<script>var bikki = new Array()</script>";
	if($number1<=1)
	{echo "please enter a valid number";}
	else
	{
	while($number1)
	{
	 	echo "<br><b>Enter college name:</b><input list='names' name='bikki[]'><br>
		<datalist id='names'>";
		while($row=mysql_fetch_assoc($extract))
		{
			$namedb=$row['name'];
			echo "<option>$namedb</option>";
		}echo "</datalist>";
		$number1--;
	}
	}
	 echo "<br><br><center><input type='submit' name='submit1' value='register'>
</center>";
}
?>

</form>
<p><b>Type of the Tournment:</b></p><br>
<form>
<input type='radio' name='type' value='Round Robin' checked>Round robin</b>&nbsp;&nbsp;
<input type='radio' name='type' value='Knockout'>Knockout<br></form>
<br>


</body>

</html>	


