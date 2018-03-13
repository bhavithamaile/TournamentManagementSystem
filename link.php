<html>
<head>
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}
}
</style>
</style>
</head>

</html>
<?php
session_start();



if(isset($_SESSION['username']))
{
echo "welcome ".$_SESSION['username']."!<br>";

echo "<a href ='logout.php'>logout</a>";
}
else
	die("you must log in");

?>