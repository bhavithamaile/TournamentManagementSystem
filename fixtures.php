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
echo" 

<center><br>
<h1><font size='10' color='black'>Fixtures</font></h1>
<br>
<form action='fixtures.php' method='POST'>
<b><font size='5' color='black'>Enter number of Departments:</font></b><input type='number' name='number1'>
<input type='submit' class='button' name='submit' value='submit'><br></form>";
echo "<form action='type.php' method='POST'>";
require('connectdb.php');
$extract=mysql_query("SELECT * FROM college");
$numrows=mysql_num_rows($extract);
if(isset($_POST['submit']))
{
$number1=$_POST['number1'];
$_SESSION['limit']=$number1;
//echo "<script>var bikki = new Array()</script>";
	if($number1<=1)
	{echo "<font size=5 color='red'>please enter a valid number</font>";}
	else
	{
	while($number1)
	{
		//$bikki=array();
	 	echo "<br><b><font size=5 color='black'>Enter Department name:</font></b><input list='names' name='bikki[]'><br>
		<datalist id='names'>";
		while($row=mysql_fetch_assoc($extract))
		{
			$namedb=$row['dt'];
			echo "<option>$namedb</option>";
		}echo "</datalist>";
		$number1--;
	
	
	}
	//$_SESSION['bick']=$bikki;
	echo "<br><br><center><input type='submit' class='button' name='submit' value='submit'></form></center>";
	}
}
?>
