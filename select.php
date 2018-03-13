<?php

require(connectdb.php);
$extract=mysql_query("SELECT * FROM college");
$numrows=mysql_num_rows($extract);
echo "<form action='fixtures.php' method='POST'>";


while($row=mysql_fetch_assoc($extract))
{
	$name=$row['name'];
	
echo "<option>$name</option>";

}
echo "</select> </form>";


?>
