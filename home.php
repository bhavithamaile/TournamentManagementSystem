<html>
<head>
 
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

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
</head>
</style>
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
echo "<font size='5' color='black'><br><br>";
/* $f1=file('live.txt');	
echo $f1[1];
echo "vs ";
echo $f1[7];
echo "<br>";
echo $f1[5];
echo "&nbsp;&nbsp;&nbsp;";
echo "&nbsp;&nbsp;&nbsp;";
echo "&nbsp;&nbsp;&nbsp;";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

echo $f1[11];
echo "<br>";
echo $f1[14];
echo "<br><br>";
//$i=$f1[6];
//echo "<img src='$i'  width='200' height='42'>";

for($i=0;$i<count($f1);$i++){
	
	
	
}*/
echo "<center><h2>Cric Buzz</h2></center>";
echo "<h2>Live score:</h2>";
$f=file('getcon.txt');
foreach($f as $e)
{
	echo $e;
	echo"<br>";
}
echo "<br><br><right><h2>Upcoming Matches</h2>";
$f1=file('live.txt');
echo $f1[1];
echo "vs ";
echo $f1[4];
echo "<br>";
echo $f1[6];
echo "<br><br>";
echo $f1[8];
echo "vs ";
echo $f1[11];
echo "<br>";
echo $f1[13];

echo "<br><br>";
/*echo "<h2>Recently Played</h2>";
$r=file('live1.txt');
echo $r[1];
echo "vs ";

echo $r[3];
echo "<br>";
echo $r[4];

 echo "</font></right>";
 */
 ?>
