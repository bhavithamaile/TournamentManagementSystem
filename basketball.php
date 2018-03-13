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
<center>
<h1>Instructions</h1><br></center>
<font size='6' color='black'>
1.Each question carries one mark.<br>
2.No negative marks.Try to attempt all the questions.<br>
3.You will be eligible to register only if you score atleast 70% in this quiz.<br>
4.Good luck.<br><hr>


</head>

</html>
<?php
echo "<font size='5' color='black'><form action='bascheck.php' method='POST'>1: In which country is basketball a major sport?<br><br>";
echo "<input type='radio' name='ans1' value='Canada'  >Canada<br>";
echo "<input type='radio' name='ans1' value='United States of America' >United States of America<br>";
echo "<input type='radio' name='ans1' value='United Kingdom' >United Kingdom<br>";
echo "<input type='radio' name='ans1' value='None of the above' >None of the above<br>";

echo "<br>";
echo "2: What is the name of the governing body in the world top basket ball league?<br><br>";
echo "<input type='radio' name='ans2' value='MLB'  >MLB<br>";
echo "<input type='radio' name='ans2' value='NHL' >NHL<br>";
echo "<input type='radio' name='ans2' value='NBA' >NBA<br>";
echo "<input type='radio' name='ans2' value='None of the above' >None of the above<br>";
echo "<br>";
echo "3: Is there any contact allowed between players in this sport?<br><br>";
echo "<input type='radio' name='ans3' value='Yes' >Yes<br>";
echo "<input type='radio' name='ans3' value=' No' >No<br>";
echo "<input type='radio' name='ans3' value=' both' >both<br>";
echo "<input type='radio' name='ans3' value='None of the above' >None of the above<br>";
echo "<br>";
echo "4: What is it called when a player scores a point?<br><br>";
echo "<input type='radio' name='ans4' value='Goal'  >Goal<br>";
echo "<input type='radio' name='ans4' value='Touchdown' >Touchdown<br>";
echo "<input type='radio' name='ans4' value='Home-run' >Home-run<br>";
echo "<input type='radio' name='ans4' value='A Basket' >A Basket<br>";
echo "<br>";

echo "5: How many points is a shot worth when inside the oppositions semi-circle?<br><br>";
echo "<input type='radio' name='ans5' value='1' >1<br>";
echo "<input type='radio' name='ans5' value='2' >2 <br>";
echo "<input type='radio' name='ans5' value='3' >3<br>";
echo "<input type='radio' name='ans5' value='None of the above' >None of the above<br>";
echo "<br>";
echo "6:How many points are awarded for a score from outside the oppositions semi-circle??<br><br>";
echo "<input type='radio' name='ans6' value='1' >1<br>";
echo "<input type='radio' name='ans6' value='2' >2 Cup<br>";
echo "<input type='radio' name='ans6' value='3' >3<br>";
echo "<input type='radio' name='ans6' value='None of the above' >None of the above<br>";
echo "<br>";

echo "7: When in possession of the ball, what must a player do?<br><br>";
echo "<input type='radio' name='ans7' value='Stand still'  >Stand still<br>";
echo "<input type='radio' name='ans7' value='Run with the ball' >Run with the ball<br>";
echo "<input type='radio' name='ans7' value='Bounce the ball while running' >Bounce the ball while running<br>";
echo "<input type='radio' name='ans7' value='None of the above' >None of the above<br>";
echo "<br>";
echo "8:What happens if a player fails to dribble while in moving with the ball?<br><br>";
echo "<input type='radio' name='ans8' value='Possession is given to the opposing team'  >Possession is given to the opposing team<br>";
echo "<input type='radio' name='ans8' value='Nothing' >Nothing<br>";
echo "<input type='radio' name='ans8' value='The player is sent back to his own end' > The player is sent back to his own end<br>";
echo "<input type='radio' name='ans8' value='None of the above' >None of the above<br>";
echo "<br>";

echo "9:How is a game started?<br><br>";
echo "<input type='radio' name='ans9' value='Kick-off'  >Kick-off<br>";
echo "<input type='radio' name='ans9' value='The ball is bounced by the referee inbetween one player from each team' >The ball is bounced by the referee inbetween one player from each team<br>";
echo "<input type='radio' name='ans9' value='The ball is thrown up in the air by the referee inbetween one-player from each team, and they have to try and knock it to their team-mates' >The ball is thrown up in the air by the referee inbetween one-player from each team, and they have to try and knock it to their team-mates<br>";
echo "<input type='radio' name='ans9' value='None of the above' >None of the above<br>";
echo "<br>";
echo "10: How many parts to a basketball game is there?<br><br>";
echo "<input type='radio' name='ans10' value='2'  >2<br>";
echo "<input type='radio' name='ans10' value='3' >3<br>";
echo "<input type='radio' name='ans10' value='4' >4<br>";
echo "<input type='radio' name='ans10' value='1' >1<br>";


echo "<center><input type='submit' name='submit' value='submit'></form></center></form>";
