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
require('connectdb.php');

$arr=$_POST['bikki'];
$_SESSION['d']=$arr;
for($i=0;$i<count($arr);$i++)
$ex=mysql_query("INSERT INTO college VALUES (' ','$arr[$i]')");
echo "<form method='POST'>";
	echo "<center><p><font size='10' color='black'><h1>Type of the Tournment:</h1></p><br></center>";

echo "<center><input type='submit' class='button' name='roundrobin' value='Roundrobin' formaction='round1.php'><br><br>
<input type='submit' name='roundy' class='button' value='knockout' formaction='knockout.php'></center></form>";
?>

</body>

</html>	
