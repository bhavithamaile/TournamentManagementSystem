<?php
session_start();

$points=$_POST['points'];

/*foreach ($points as $val)
echo $val;*/
echo "<h1>Round-2</h1><hr>";
$ppl=$_SESSION['new'];
$c=count($ppl);

	for($i=0;$i<$c;$i++)
	{	
		if($points[$i]=="0"){
			unset($ppl[$i]);
			//$ppl=array_values($ppl);
		//$ppl=array_splice($ppl,$i,1);
		
		}
		
	}
	/*$i=1;
		foreach ($points as $val)
		{
			if($val=='0')
			{
				unset($ppl[$i]);				
			}
			$i++;
		}*/
		if(count($ppl)%2!=0)
		{array_push($ppl,'bye');}
		$i=0;
	foreach ($ppl as $val)
	{
		
echo $val;
$i++;
echo "<input type='number' name='points[]'>";
	echo "&nbsp";
	if($i%2!=0)
	{echo "vs";}
	echo "&nbsp";
	if($i%2==0)
	{echo "<br>";}

	}
?>