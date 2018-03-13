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
/**
 *
 * Create a round robin of teams or numbers
 *
 * @param    array    $teams
 * @return    $array
 *
 */
 echo "<center><br><br><br><font size='5' color='black'>";
 function roundRobin( array $teams ){

    if (count($teams)%2 != 0){
        array_push($teams,"bye");
    }
    $away = array_splice($teams,(count($teams)/2));
    $home = $teams;
    for ($i=0; $i < count($home)+count($away)-1; $i++)
    {
        for ($j=0; $j<count($home); $j++)
        {
            $round[$i][$j]["Home"]=$home[$j];
            $round[$i][$j]["Away"]=$away[$j];
        }
        if(count($home)+count($away)-1 > 2)
        {
            $s = array_splice( $home, 1, 1 );
            $slice = array_shift( $s  );
            array_unshift($away,$slice );
            array_push( $home, array_pop($away ) );
        }
    }
    return $round;
}
/*$members = array('team1','team2','team3','team4', 'team5', 'team6', 'team7', 'team8', 'team9');*/
$members=$_SESSION['d'];
// do the rounds
$rounds = roundRobin($members);

$table = "<table>\n";
foreach($rounds as $round => $games){
    $table .= "<tr><th>Round: ".($round+1)."</th><th></th><th>Away</th></tr>\n";
    foreach($games as $play){
       $table .= "<tr><td>".$play["Home"]."</td><td>-v-</td><td>".$play["Away"]."</td></tr>\n";
    }
}
$table .= "</table>\n";

echo $table;
echo "<br><html></center><center><a href='scores.php'>Update scores</a></center></html>"; 
echo "</font>";
?>
