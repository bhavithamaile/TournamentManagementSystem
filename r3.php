<html>
<head>
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}
.button {
    background-color:  #663399;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}
li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="home.php"><font size=5 color='white'>Home</font></a></li>
  <li><a href="fixtures.php"><font size=5 color='white'>Fixtures</font></a></li>
  <li><a href="#contact"><font size=5 color='white'>Notify</font></a></li>
  <li><a href="#about"><font size=5 color='white'>Winning Records</a></li>
  <li><a href="logout.php"><font size=5 color='white'>Log Out</a></li>



  <?php 
  session_start();
  if(isset($_SESSION['username']))
  {
 echo "<li style='float:right'><br>Welcome ";
echo $_SESSION['username'];
echo "!</a></li></font>";
  }
  
  
?>
</ul>
</body>
</html>
<?php
echo "<center>";
echo "<font color='black'><h1>ROUND 3</h1></font>";
echo "</center><hr>";
/*$max=$_SESSION['max'];
$max--;
$_SESSION['max']=$max;*/
echo "<h1><Round 3></h1>";
$new3=$_SESSION['r22'];
$points=$_POST['points2'];
if(count($new3)%2!=0)
		{array_push($new3,'bye');
		}
$c=count($new3);
		$j=0;
		$neww1=array();
for($r=0;$r<$c/2;$r++)
{
		/*print_r($points[$r]);*/
		if($points[$r]=='win3')
		{
			//echo "jyo";
			//echo $j;
			array_push($neww1,$new3[$j]);
			$j++;
		}
		else
		{
			$j++;
			//echo $j;
			array_push($neww1,$new3[$j]);
		}
		$j++;
}
echo "<br>";
	/*foreach($neww1 as $key)
{
	echo $key;
}	*/

	if(count($neww1)%2!=0)
		{array_push($neww1,'bye');
		}
		$count=count($neww1);
		$new_array3=array();
		//$index=0;
		
		//$count--;
		echo "<form action='r3.php' method='POST'>";
	$x=0;
	$newarr=array();
	for($i=0;$i<$count;$i++)
{echo "<font size='5' color='black'>";
	echo $neww1[$i];
	//echo "<input type='number' name='points3[]'>";
	echo "<input type='radio' name='points3[$i]' value='win5'>";
	$newarr[$x]=$neww1[$i];
	$x++;
	echo "&nbsp";
	echo "vs";
	echo "&nbsp";
	$count--;
	echo $neww1[$count];
	//echo "<input type='number' name='points3[]'>";
	echo "<input type='radio' name='points3[$i]' value='win6'>";
	$newarr[$x]=$neww1[$count];
	$x++;
	echo "<br><br><br><br><br>";
		
}
echo "</font>";
$count=count($newarr);
for($x=0;$x<$count;$x++)
	{
		if($newarr[$x]=='bye')
		{
			unset($newarr[$x]);
		}
	}
	/*foreach($newarr as $key)
{
	echo $key;
}*/
	$new_array3=$newarr;
	$_SESSION['max']=count($new_array3);
	$_SESSION['new4']=$new_array3;
	if($_SESSION['max']!='2')
	{
		echo "<center><input type='submit' name='submit' class='button' value='submit' formaction='r4.php'></center>";
	}
	else
	{
		$_SESSION['na']='ro3';
		$_SESSION['final']=$_SESSION['new4'];
		//$_SESSION['winner']=$_POST['points3'];
		echo "<center><input type='submit' name='submit' class='button' value='final' formaction='knockwin.php'></center></form>";
	
	}
	?>

