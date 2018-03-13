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
  <li><a href="contact.php"><font size=5 color='white'>Notify</font></a></li>
  <li><a href="records.php"><font size=5 color='white'>Winning Records</a></li>
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
echo "<center><font color='black'>
<h1>WINNER OF KNOCKOUT TOURNAMENT</h1>
</center>";
require('connectdb.php');
$win=$_SESSION['final'];
$a2=$_SESSION['na'];
if($a2=='ro4')
$final=$_POST['points4'];
else if($a2=='ro3')
$final=$_POST['points3'];
else
	$final=$_POST['points2'];
//$points=$_SESSION['winner'];
//$points=$_POST['points4'];
/*$i=0;
echo "<center>";
if($points[$i]=='1')
	echo $winner[$i];
else
	echo $winner[++$i];
echo "</center>;";*/
$k=0;

	if($final[$k]=="win1"||$final[$k]=="win3"||$final[$k]=="win5"||$final[$k]=="win7")
	{
		echo "<br><br><br><br><br><center><font size='7' color='black'>";
        echo $win[$k];
		echo "</center>";
	}
	else
	{
		$k++;
		echo "<center>";
		echo $win[$k];
		echo "</font></center>";
	}

	$ex=mysql_query("DELETE FROM college");
?>
</body>
</html>
