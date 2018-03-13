<?php
require('connectdb.php');
$c;
$extract=mysql_query("SELECT ans FROM testans");
$numrows=mysql_num_rows($extract);

$j=0;
echo ";ll";
if(isset($_POST['a1']) && isset($_POST['a2']) && isset($_POST['a3']) && isset($_POST['a4']) && 
isset($_POST['a5']) && isset( $_POST['a6'] )&& isset( $_POST['a7'] )&& isset( $_POST['a8']) && 
 isset($_POST['a9']) && isset( $_POST['a10']) && isset($_POST['a11']) && isset($_POST['a12']) && 
 isset($_POST['a13']) && isset($_POST['a14']) && isset($_POST['a15']) && isset( $_POST['a16'] )&& 
 isset( $_POST['a17'] )&& isset( $_POST['a18']) && isset($_POST['a19']) && isset( $_POST['a20']) && isset($_POST['a21']) &&isset($_POST['a22']) && isset($_POST['a23']) && isset($_POST['a24']) && 
 isset($_POST['a25']) && isset( $_POST['a26'] )&& isset( $_POST['a27'] )&& isset( $_POST['a28']) && 
 isset($_POST['a29']) && isset( $_POST['a30']))
{
	echo "kkk";
	$i=0;
	$arr[$i]=$_POST['a1'];
	$i++;
	$arr[$i]=$_POST['a2'];
	$i++;
	$arr[$i]=$_POST['a3'];
	$i++;
	$arr[$i]=$_POST['a4'];
	$i++;
	$arr[$i]=$_POST['a5'];
	$i++;
	$arr[$i]=$_POST['a6'];
	$i++;
	$arr[$i]=$_POST['a7'];
	$i++;
	$arr[$i]=$_POST['a8'];
	$i++;
	$arr[$i]=$_POST['a9'];
	$i++;
	$arr[$i]=$_POST['a10'];
	$i++;
	$arr[$i]=$_POST['a11'];
	$i++;
	$arr[$i]=$_POST['a12'];
	$i++;
	$arr[$i]=$_POST['a13'];
	$i++;
	$arr[$i]=$_POST['a14'];
	$i++;
	$arr[$i]=$_POST['a15'];
	$i++;
	$arr[$i]=$_POST['a16'];
	$i++;
	$arr[$i]=$_POST['a17'];
	$i++;
	$arr[$i]=$_POST['a18'];
	$i++;
	$arr[$i]=$_POST['a19'];
	$i++;
	$arr[$i]=$_POST['a20'];
	$i++;
	$arr[$i]=$_POST['a21'];
	$i++;
	$arr[$i]=$_POST['a22'];
	$i++;
	$arr[$i]=$_POST['a23'];
	$i++;
	$arr[$i]=$_POST['a24'];
	$i++;
	$arr[$i]=$_POST['a25'];
	$i++;
	$arr[$i]=$_POST['a26'];
	$i++;
	$arr[$i]=$_POST['a27'];
	$i++;
	$arr[$i]=$_POST['a28'];
	$i++;
	$arr[$i]=$_POST['a29'];
	$i++;
	$arr[$i]=$_POST['a30'];
	$i++;

	$c=0;
	while($row=mysql_fetch_assoc($extract))
	{
		$adb=$row['ans'];
		if($adb==$arr[$j])
			$c++;
		$j++;
	}
	echo "Your Score:";
	echo $c;
	}
else
	echo "<h3>Attempt Incomplete.Please attempt all questions.</h3>";

?>
	