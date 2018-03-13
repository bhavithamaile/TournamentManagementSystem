<html>
<head>
 
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}

.textbox {
    height: 40px;
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

/*require('connect.php');
$extract=mysql_query("SELECT clgname1 FROM firstround");
$numrows=mysql_num_rows($extract);*/

$cbit=$_POST['score'];
$clg1=$_SESSION['d'];
$x=count($clg1);
?>
<center><font color='black'>
<h1>RESULTS</h1>
</center>
<?php
/*foreach ($cbit as $value)
echo $value;*/
function array_split($array, $parts){
    return array_chunk($array, ceil(count($array) / $parts));
}
/*$x=0;
while($r = mysql_fetch_assoc($extract))
{
	$new[]=$r['clgname1'];
	$x++;
	
}*/
 $array= array_chunk($cbit, ceil(count($cbit) / $x));
for($i=0;$i<$x;$i++){
	$arr[]=array_sum($array[$i]);
}
/*foreach ($arr as $value){
echo $value;
echo "<br>";
}*/
arsort($arr);
echo "<font size=5>";
foreach($arr as $key=>$val){
echo $clg1[$key];
echo "&nbsp";
echo $val;
echo "<br><br><br><br>";
}
echo "</font>";
//print_r($_SESSION['hi']);
//foreach( $_SESSION['hi'] as $val){
//echo $val;
//echo "<br>";}

/*foreach($new as $index=>$value)
{
$write=mysql_query("UPDATE scores SET clgname='$new1[$index]' WHERE id='i'");
}*/

/*foreach($new as $index=>$value)
$write=mysql_query("INSERT INTO scores(clgname,result) VALUES('$new[$index]','$arr[$index]')");*/
?>