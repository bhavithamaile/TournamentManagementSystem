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
session_destroy();
header("Location:base.php");
?> 