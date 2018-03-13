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

require('connectdb.php');


//$numrows=mysql_num_rows($extract);
//$row=array();
/*$extract=mysql_query("SELECT clgname FROM firstround");
while($r = mysql_fetch_assoc($extract))
{
	$row[]=$r['clgname'];
	
}*/
$row=$_SESSION['d'];
	echo "<html><head><style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style></head><body>";

echo "<table><tr><th>Name of the college</th>";
$x=1;
foreach ($row as $value)
{
	echo "<th>Round";
	echo $x;
	$x++;
	echo "</th>";
}
echo "</tr>";
foreach ($row as $value)
{
	echo "<tr><th>";
	
	echo $value;
	echo "</th>";
	foreach ($row as $r)
	{
		echo "<form action='result.php' method='POST'><th><input type='number' name='score[]'></th>";
	}
	//$x++;
}
echo "</table>";
echo "<br><br><center><input type='submit' name='submit' value='evaluate'></center></form></body></html>";
//echo "<center><br><br><a href='result.php'>evaluate</a></center></body></html>";
?>