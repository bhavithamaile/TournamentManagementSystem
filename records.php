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
		/*<br><br><br><center><h2><a href='2016.php'>2016</a><br><br><br>
					<a href='2015.php'>2015</a><br><br><br>
					<a href='2014.php'>2014</a><br><br><br>
					<a href='2013.php'>2013</a><br><br><br>
					<a href='2012.php'>2012</a><br><br><br>
		</h2></center>*/
		 /*"<table {
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
}*/


echo "<table><tr><th>GAME</th>
				 <th>2016</th>
				 <th>2015</th>
				<th>2014</th>
				<th>2013</th>
				<th>2012</th>
			</tr>
			<tr><th>BADMINTON</th>
				 <th>IT</th>
				 <th>CSE</th>
				<th>IT</th>
				<th>ECE</th>
				<th>EEE</th>
			</tr>
			<tr><th>CHESS</th>
				 <th>MECH</th>
				 <th>IT</th>
				<th>CIVIL</th>
				<th>MECH</th>
				<th>IT</th>
			</tr>
			<tr><th>BASKETBALL</th>
				 <th>CIVIL</th>
				 <th>BIOTECH</th>
				<th>CIVIL</th>
				<th>CSE</th>
				<th>ECE</th>
			</tr>
			<tr><th>VOLLEYBALL</th>
				 <th>IT</th>
				 <th>IT</th>
				<th>PRODUCTION</th>
				<th>CIVIL</th>
				<th>CHEMICAL</th>
			</tr>
			<tr><th>CRICKET</th>
				 <th>CSE</th>
				 <th>CHEMICAL</th>
				<th>ECE</th>
				<th>EEE</th>
				<th>CIVIL</th>
			</tr>
			<tr><th>THROWBALL</th>
				 <th>CHEMICAL</th>
				 <th>IT</th>
				<th>IT</th>
				<th>MECH</th>
				<th>CSE</th>
			</tr>
			<tr><th>CARROMS</th>
				 <th>ECE</th>
				 <th>ECE</th>
				<th>EEE</th>
				<th>CIVIL</th>
				<th>PRODUCTION</th>
			</tr>
			<tr><th>TENNIS</th>
				 <th>EEE</th>
				 <th>ECE</th>
				<th>BIOTECH</th>
				<th>CHEMICAL</th>
				<th>IT</th>
			</tr>";
?>