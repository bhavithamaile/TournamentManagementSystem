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
//session_start();
require('connectdb.php');
$extract=mysql_query("SELECT * FROM college");
while($row=mysql_fetch_assoc($extract))
{
	$knock[]=$row['clgname'];
}
$_SESSION['round']=$knock;
$c=$count=count($knock);
$_SESSION['max']=$c;
if($count%2!=0)
{
	array_push($knock,'BYE');
	$count++;
}
?>
<center>
<h1 style="color:black;">Round 1</h1>
</center><hr>
<form action='r2.php' method='POST'>
<?php
$new_array = array();
$index=0;


for($i=0;$i<$count;$i++)
{	echo "<font size='5' color='black'>";
	echo $knock[$i];
	//echo "<input type='number' name='points1[]'>";
	echo "<input type='radio' name='points1[$i]' value='win1'>";
	echo "&nbsp";
	echo "vs";
	echo "&nbsp";
	$count--;
	
	echo $knock[$count];
	//echo "<input type='number' name='points1[]'>";
	echo "<input type='radio' name='points1[$i]' value='win2'>";
	echo "<br><br><br><br><br>";
	$new_array[$index] = $knock[$i];  
	$index++;
	$new_array[$index] = $knock[$count];
	$index++;
	
	//$new=array($knock[$i],$knock[$count]);	
}
echo "</font>";
/*for($j=0;$j<$c;$j++)
	$new=array($knock[$j],$knock[--$c]);*/ 
$c=count($new_array);
for($x=0;$x<$c;$x++)
	{
		if($new_array[$x]=='bye')
		{
			unset($new_array[$x]);
		}
	}
$_SESSION['new']=$new_array;
echo "<center><input type='submit' class='button' name='submitt' value='submit'> </center>";
?>
</form>
</body>
</html>