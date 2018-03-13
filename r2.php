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
echo "<font color='black'><h1>ROUND 2</h1>";
echo "</center><hr>";
?>
<?php
$new2=$_SESSION['new'];	
//$_SESSION['new2']=$new2;
/*$max=$_SESSION['max'];
$max--;*/
echo "<h1><Round 2></h1>";
$points=$_POST['points1'];
$j=0;
$neww=array();
if(count($new2)%2!=0)
		{
			array_push($new2,'bye');
		}
		$c=count($new2);
for($r=0;$r<$c/2;$r++)
{
		/*print_r($points[$r]);*/
		if($points[$r]=='win1')
		{
			//echo "jyo";
			//echo $j;
			array_push($neww,$new2[$j]);
			$j++;
		}
		else
		{
			$j++;
			//echo $j;
			array_push($neww,$new2[$j]);
		}
		$j++;
}
echo "<br>";
/*foreach($neww as $key)
{
	echo $key;
}
*/
	if(count($neww)%2!=0)
		{
			array_push($neww,'bye');
		}
		$i=0;
		$j=0;
		$k=0;
		echo "<form action=r2.php method= 'POST'>";
		$new_array2=array();
		$co=count($neww);
	while($i<$co)
	{
		echo "<font size='5' color='black'>";
	echo $neww[$i];
	$i++;
	//echo "<input type='number' name='points2[]'>";
	echo "<input type='radio' name='points2[$j]' value='win3'>";
	echo "&nbsp";
	echo "vs ";
	echo $neww[$i];
	echo "<input type='radio' name='points2[$j]' value='win4'>";
	echo "<br><br>";
	$i++;
	$j++;
	}
	echo "</font>";
	for($x=0;$x<$co;$x++)
	{
		if($neww[$x]=='bye')
			unset($neww[$x]);
	}
	$new_array2=$neww;
	$_SESSION['max']=count($new_array2);
	$_SESSION['r22']=$new_array2;
	if($_SESSION['max']!='2')
	{
		echo "<center><input type='submit' name='submit' class='button' value='submit' formaction='r3.php'>";
	}
	else
	{    $_SESSION['na']='ro2';
		$_SESSION['final']=$_SESSION['r22'];
		//$_SESSION['winner']=$_POST['points2'];
		echo "<input type='submit' name='submit' class='button' value='final' formaction='knockwin.php'></center></form>";
	}
	?>