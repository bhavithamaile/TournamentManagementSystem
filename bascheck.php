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
</head>

</html>
<?php
require('connectdb.php');
$c;
$extract=mysql_query("SELECT basketball FROM answers");
$numrows=mysql_num_rows($extract);
$j=0;
if(isset($_POST['ans1']) && isset($_POST['ans2']) && isset($_POST['ans3']) && isset($_POST['ans4']) && isset($_POST['ans5']) &&
isset( $_POST['ans6'] )&&
isset( $_POST['ans7'] )&&
isset( $_POST['ans8']) &&
isset($_POST['ans9']) &&
isset( $_POST['ans10']))
{
	$i=0;
	$arr[$i]=$_POST['ans1'];
	$i++;
	$arr[$i]=$_POST['ans2'];
	$i++;
	$arr[$i]=$_POST['ans3'];
	$i++;
	$arr[$i]=$_POST['ans4'];
	$i++;
	$arr[$i]=$_POST['ans5'];
	$i++;
	$arr[$i]=$_POST['ans6'];
	$i++;
	$arr[$i]=$_POST['ans7'];
	$i++;
	$arr[$i]=$_POST['ans8'];
	$i++;
	$arr[$i]=$_POST['ans9'];
	$i++;
	$arr[$i]=$_POST['ans10'];
	$i++;

	$c=0;
	while($row=mysql_fetch_assoc($extract))
	{
		$ansdb=$row['basketball'];
		if($ansdb==$arr[$j])
			$c++;
		$j++;
	}
	echo "correct answers";
	echo $c;
	echo "<br>";
	}
else
	echo "attempt incomplete";
if($c >= 7)
		echo "congratulations!you are eligible for registration";
		else
			echo "sorry! you are not eligible for registration";
		
?>
	