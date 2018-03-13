<?php
echo "<center><h1>TEST FOR 30 MARKS</center></h1>";
echo "<form action='testcheck.php' method='POST'>";
echo "<h3>1.What will be output if you will execute following c code?<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspchar arr[7]='Network';<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspprintf('%s',arr);}<br><br></h3>
		<font size='4'><input type='radio' name='a1' value='Network'>Network<br><br>
		<input type='radio' name='a1' value='N'>N<br><br>
		<input type='radio' name='a1' value='network'>network<br><br>
		<input type='radio' name='a1' value='Garbage value'>Garbage value<br><br>
		<input type='radio' name='a1' value='Compilation error'>Compilation error<br><br><br><br></font>
		<h3>2.What will be output if you will execute following c code?<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
			&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbspchar arr[11]='The African Queen';<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbspprintf('%s',arr);}<br><br></h3>
		<font size='4'><input type='radio' name='a2' value='The African Queen'>The African Queen<br><br>
		<input type='radio' name='a2' value='The'>The<br><br>
		<input type='radio' name='a2' value='Queen'>Queen<br><br>
		<input type='radio' name='a2' value='null'>null<br><br>
		<input type='radio' name='a2' value='Compilation error'>Compilation error<br><br><br><br></font>
		<h3>3.What will be output if you will execute following c code?<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
			&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbspchar arr[20]='MysticRiver';<br><br>
			&nbsp&nbsp&nbsp&nbsp&nbspprintf('%d',sizeof(arr));}<br><br></h3>
		<font size='4'><input type='radio' name='a3' value='20'>20<br><br>
		<input type='radio' name='a3' value='11'>11<br><br>
		<input type='radio' name='a3' value='12'>12<br><br>
		<input type='radio' name='a3' value='22'>22<br><br>
		<input type='radio' name='a3' value='24'>24<br><br><br><br></font>
		<h3>4.What will be output if you will execute following c code?<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspint const SIZE=5;<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspint expr;<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspdouble value[SIZE]={2.0,4.0,6.0,8.0,10.0};<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspexpr=1|2|3|4;<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspprintf('%f',value[expr]);}<br><br></h3>
		<font size='4'><input type='radio' name='a4' value='2.000000'>2.000000<br><br>
		<input type='radio' name='a4' value='4.000000'>4.000000<br><br>
		<input type='radio' name='a4' value='6.000000'>6.000000<br><br>
		<input type='radio' name='a4' value='8.000000'>8.000000<br><br>
		<input type='radio' name='a4' value='Compilation error'>Compilation error<br><br><br><br></font>
		<h3>5.What will be output if you will execute following c code?<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspenum power{<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspDalai,<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspVladimir=3,<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspBarack,<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspHillary<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp};<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspfloat leader[Dalai+Hillary]={1.f,2.f,3.f,4.f,5.f};<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspenum power p=Barack;<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbspprintf('%0.f',leader[p>>1+1]);}<br><br></h3>
		<font size='4'><input type='radio' name='a5' value='1'>1<br><br>
		<input type='radio' name='a5' value='2'>2<br><br>
		<input type='radio' name='a5' value='3'>3<br><br>
		<input type='radio' name='a5' value='5'>5<br><br>
		<input type='radio' name='a5' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>6.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#define var 3<br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspchar *cricket[var+~0]={'clarke','kallis'};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspchar *ptr=cricket[1+~0];<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%c',*++ptr);  <br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
		<font size='4'><input type='radio' name='a6' value='k'>k<br><br>
		<input type='radio' name='a6' value='a'>a<br><br>
		<input type='radio' name='a6' value='l'>l<br><br>
		<input type='radio' name='a6' value='i'>i<br><br>
		<input type='radio' name='a6' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>7.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#define var 3<br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspchar data[2][3][2]={0,1,2,3,4,5,6,7,8,9,10,11};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%o',data[0][2][1]);<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
		<font size='4'><input type='radio' name='a7' value='5'>5<br><br>
		<input type='radio' name='a7' value='6'>6<br><br>
		<input type='radio' name='a7' value='7'>7<br><br>
		<input type='radio' name='a7' value='8'>8<br><br>
		<input type='radio' name='a7' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>8.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#define var 3<br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspshort num[3][2]={3,6,9,12,15,18};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d   %d',*(num+1)[1],**(num+2));<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
		<font size='4'><input type='radio' name='a8' value='12  15'>12  15<br><br>
		<input type='radio' name='a8' value='12  12'>12  12<br><br>
		<input type='radio' name='a8' value='15  15'>15  15<br><br>
		<input type='radio' name='a8' value='15  12'>15  12<br><br>
		<input type='radio' name='a8' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>9.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#define var 3<br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspchar *ptr='cquestionbank';<br><br>

   &nbsp&nbsp&nbsp&nbsp&nbsp printf('%d',-3[ptr]); <br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
		<font size='4'><input type='radio' name='a9' value='100'>100<br><br>
		<input type='radio' name='a9' value='-100'>-100<br><br>
		<input type='radio' name='a9' value='101'>101<br><br>
		<input type='radio' name='a9' value='-101'>-101<br><br>
		<input type='radio' name='a9' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>10.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsplong  myarr[2][4]={0l,1l,2l,3l,4l,5l,6l,7l};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%ld\t',myarr[1][2]);<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%ld%ld\t',*(myarr[1]+3),3[myarr[1]]);<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%ld%ld%ld\t' ,*(*(myarr+1)+2),*(1[myarr]+2),3[1[myarr]]);<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a10' value='6   66   777 '>6   66   777 <br><br>
		<input type='radio' name='a10' value='6   77   667'>6   77   667<br><br>
		<input type='radio' name='a10' value='5   66   777'>5   66   777<br><br>
		<input type='radio' name='a10' value='7   77   666  '>7   77   666  <br><br>
		<input type='radio' name='a10' value='6   67   667'>6   67   667<br><br><br>	<br></font>

";	
echo "<h3>11.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp int array[2][3]={5,10,15,20,25,30};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint (*ptr)[2][3]=&array;<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d\t',***ptr);<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d\t',***(ptr+1)); <br><br>
	&nbsp&nbsp&nbsp&nbsp&nbspprintf('%d\t',**(*ptr+1));<br><br>
	&nbsp&nbsp&nbsp&nbsp&nbspprintf('%d\t',*(*(*ptr+1)+2));<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a11' value='5   Garbage value   20   30	'>5   Garbage value   20   30	<br><br>
		<input type='radio' name='a11' value='5    15    20    25'>5    15    20    25<br><br>
		
		<input type='radio' name='a11' value='10   20    30    30'>10   20    30    30 <br><br>
		<input type='radio' name='a11' value='5    15    20    30'>5    15    20    30<br><br>
		<input type='radio' name='a11' value='Compilation error'>Compilation error<br><br><br>	<br></font>

";		
echo "<h3>12.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp static int a=2,b=4,c=8;<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint static int *arr1[2]={&a,&b};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspstatic int *arr2[2]={&b,&c};
<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint* (*arr[2])[2]={&arr1,&arr2};<br><br>
	&nbsp&nbsp&nbsp&nbsp&nbspprintf('%d %d\t',*(*arr[0])[1],  *(*(**(arr+1)+1)));<br><br>
	

    &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a12' value='2  4	'>2  4	<br><br>
		<input type='radio' name='a12' value='4  2	'>4  2	<br><br>
		<input type='radio' name='a12' value='4  8'>4  8<br><br>
		<input type='radio' name='a12' value='8  4'>8  4<br><br>
		<input type='radio' name='a12' value='8  2'>8  2<br><br><br>	<br></font>

";	
echo "<h3>13.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#include<math.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbspdouble myfun(double);
&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp double(*array[3])(double);<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint array[0]=exp;<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsparray[1]=sqrt;
<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsparray[2]=myfun;   printf('%.1f\t',(*array)((*array[2])((**(array+1))(4))));<br><br>

	

    &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br>
	&nbsp&nbsp&nbsp&nbsp&nbspdouble myfun(double d){<br><br>
	 &nbsp&nbsp&nbsp&nbsp&nbspd-=1;<br><br>
	  &nbsp&nbsp&nbsp&nbsp&nbsp return d;<br><br>
	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a13' value='1.4'>1.4<br><br>
		<input type='radio' name='a13' value='2.8'>2.8<br><br>
		<input type='radio' name='a13' value='4.2'>4.2<br><br>
		<input type='radio' name='a13' value='3.0'>3.0<br><br>
		<input type='radio' name='a13' value='2.7'>2.7<br><br><br>	<br></font>

";	
echo "<h3>14.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#include<math.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsptypedef struct{<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp char *name;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp double salary;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp }job;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp static job a={'TCS',15000.0};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspstatic job b={'IBM',25000.0};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspstatic job c={'Google',35000.0};
<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint x=5;<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspjob * arr[3]={&a,&b,&c};<br><br>
	&nbsp&nbsp&nbsp&nbsp&nbspjob printf('%s  %f\t',(3,x>>5-4)[*arr]);  <br><br>
	

    &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br>
	&nbsp&nbsp&nbsp&nbsp&nbspdouble myfun(double d){<br><br>
	 &nbsp&nbsp&nbsp&nbsp&nbspd-=1;<br><br>
	  &nbsp&nbsp&nbsp&nbsp&nbsp return d;<br><br>
	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a14' value='Google 35000.000000'>Google 35000.000000<br><br>
		<input type='radio' name='a14' value='TCS  15000.000000'>TCS  15000.000000<br><br>
		<input type='radio' name='a14' value='IBM  25000.000000'>IBM  25000.000000<br><br>
		<input type='radio' name='a14' value='null   15000.000000'>null   15000.000000<br><br>
		<input type='radio' name='a14' value='Google   null'>Google   null<br><br><br>	<br></font>

";	
echo "<h3>15.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbspunion group{<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspchar xarr[2][2];<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspchar yarr[4];<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp};<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp union group x={'A','B','C','D'};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%c',x.xarr[x.yarr[2]-67][x.yarr[3]-67]);<br><br>

	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a15' value='A'>A<br><br>
		<input type='radio' name='a15' value='B'>B<br><br>
		<input type='radio' name='a15' value='C'>C<br><br>
		<input type='radio' name='a15' value='D'>D<br><br>
		<input type='radio' name='a15' value='null'>null<br><br><br>	<br></font>

";
echo "<h3>16.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp int a=5,b=10,c=15;<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint *arr[3]={&a,&b,&c};<br><br>
	    &nbsp&nbsp&nbsp&nbsp&nbsp printf('%d',*arr[*arr[1]-8]);<br><br>
	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a16' value='5'>5<br><br>
		<input type='radio' name='a16' value='10'>10<br><br>
		<input type='radio' name='a16' value='18'>18<br><br>
		<input type='radio' name='a16' value='Garbage value'>Garbage value	<br><br>
		<input type='radio' name='a16' value='Compilation error'>Compilation error<br><br><br>	<br></font>

";
echo "<h3>17.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp int arr[][3]={{1,2},{3,4,5},{5}};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d %d %d',sizeof(arr),arr[0][2],arr[1][2]);<br><br>

	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a17' value='6  0 4'>6  0 4<br><br>
		<input type='radio' name='a17' value='6  1 5'>6  1 5<br><br>
		<input type='radio' name='a17' value='18 0 5'>18 0 5<br><br>
		<input type='radio' name='a17' value='18 1 5'>18 1 5<br><br>
		<input type='radio' name='a17' value='Compilation error'>Compilation error<br><br><br>	<br></font>

";
echo "<h3>18.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp int xxx[10]={5};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d %d',xxx[1],xxx[9]);<br><br>

	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a18' value='0  5'>0  5<br><br>
		<input type='radio' name='a18' value='5  5'>5  5<br><br>
		<input type='radio' name='a18' value='5  0'>5  0<br><br>
		<input type='radio' name='a18' value='0  0'>0  0<br><br>
		<input type='radio' name='a18' value='Compilation error'>Compilation error<br><br><br>	<br></font>

";
echo "<h3>19.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#define WWW -1<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspenum {cat,rat};<br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp int Dhoni[]={2,'b',0x3,01001,'\x1d','\111',rat,WWW};<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbspint i;<br><br>
	    &nbsp&nbsp&nbsp&nbsp&nbspfor(i=0;i<8;i++)<br><br>
		  &nbsp&nbsp&nbsp&nbsp&nbsp printf(' %d',Dhoni[i]);<br><br>

	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a19' value='2 98 3 513 29 73 0 -1'>2 98 3 513 29 73 0 -1<br><br>
		<input type='radio' name='a19' value='2 98 3 513 30 73 1 -1'>2 98 3 513 30 73 1 -1<br><br>
		<input type='radio' name='a19' value='2 99 3 513 29 73 1 -1'>2 99 3 513 29 73 1 -1<br><br>
		<input type='radio' name='a19' value='2 98 3 513 29 73 1 -1'>2 98 3 513 29 73 1 -1<br><br>
		<input type='radio' name='a19' value='Compilation error'>Compilation error<br><br><br>	<br></font>

";
echo "<h3>20.What will be output if you will execute following c code?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspvoid main(){<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp long double a;<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp signed char b;<br><br>
	    &nbsp&nbsp&nbsp&nbsp&nbsp int arr[sizeof(!a+b)];<br><br>
		  &nbsp&nbsp&nbsp&nbsp&nbsp printf('%d',sizeof(arr));<br><br>

	  &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
			<font size='4'><input type='radio' name='a20' value='8'>8<br><br>
		<input type='radio' name='a20' value='9'>9<br><br>
		<input type='radio' name='a20' value='1'>1<br><br>
		<input type='radio' name='a20' value='4'>4<br><br>
		<input type='radio' name='a20' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>21.  What will be the output of the program ? <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspint main()<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspint a[5] = {5, 1, 15, 20, 25};<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspint i, j, m;<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspi = ++a[1];<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp j = a[1]++;<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspm = a[i++];<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d, %d, %d', i, j, m);<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspreturn 0;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
<font size='4'><input type='radio' name='a21' value='2, 1, 15'>2, 1, 15<br><br>
		<input type='radio' name='a21' value='1, 2, 5'>1, 2, 5<br><br>
		<input type='radio' name='a21' value='3, 2, 15'>3, 2, 15<br><br>
		<input type='radio' name='a21' value='2, 3, 20'>2, 3, 20<br><br>
		<input type='radio' name='a21' value='Compilation error'>Compilation error<br><br><br>	<br></font>
		<h3>22.  
What will be the output of the program ? 
&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspint main()<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp    static int a[2][2] = {1, 2, 3, 4};<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp   int i, j;<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  static int *p[] = {(int*)a, (int*)a+1, (int*)a+2};<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  for(i=0; i<2; i++)<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp {<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp     for(j=0; j<2; j++)<br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp  {<br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp      printf('%d, %d, %d, %d\n', *(*(p+i)+j), *(*(j+p)+i), <br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp                              *(*(i+p)+j), *(*(p+j)+i));<br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp  }<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp}<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp return 0;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
<font size='4'><input type='radio' name='a22' value='1, 1, 1, 1 2, 3, 2, 3 3, 2, 3, 2 4, 4, 4, 4'>1, 1, 1, 1 2, 3, 2, 3 3, 2, 3, 2 4, 4, 4, 4<br><br>
		<input type='radio' name='a22' value='1, 2, 1, 2 2, 3, 2, 3 3, 4, 3, 4 4, 2, 4, 2'>1, 2, 1, 2 2, 3, 2, 3 3, 4, 3, 4 4, 2, 4, 2<br><br>
		<input type='radio' name='a22' value='1, 1, 1, 1 2, 2, 2, 2 2, 2, 2, 2 3, 3, 3, 3'>1, 1, 1, 1 2, 2, 2, 2 2, 2, 2, 2 3, 3, 3, 3<br><br>
		<input type='radio' name='a22' value='1, 2, 3, 4 2, 3, 4, 1 3, 4, 1, 2 4, 1, 2, 3'>1, 2, 3, 4 2, 3, 4, 1 3, 4, 1, 2 4, 1, 2, 3<br><br>
		<input type='radio' name='a22' value='Compilation error'>Compilation error<br><br><br>	<br></font>
	<h3>23.What will be the output of the program ? <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspint main()<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp   void fun(int, int[]);<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  int arr[] = {1, 2, 3, 4};<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  int i;<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  fun(4, arr);<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp for(i=0; i<4; i++)<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp    printf('%d,', arr[i]);<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspreturn 0;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspvoid fun(int n, int arr[])<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp   int *p=0;<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp   int i=0;<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  while(i++ < n)<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp      p = &arr[i];<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp *p=0;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
<font size='4'><input type='radio' name='a23' value='2, 3, 4, 5'>2, 3, 4, 5<br><br>
		<input type='radio' name='a23' value='1, 2, 3, 4'>1, 2, 3, 4<br><br>
		<input type='radio' name='a23' value='0, 1, 2, 3'>0, 1, 2, 3<br><br>
		<input type='radio' name='a23' value='3, 2, 1 0'>3, 2, 1 0<br><br>
		<input type='radio' name='a23' value='Compilation error'>Compilation error<br><br><br>	<br></font>
<h3>24.What will be the output of the program ? <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>
&nbsp&nbsp&nbsp&nbsp&nbspvoid fun(int **p);<br><br>

&nbsp&nbsp&nbsp&nbsp&nbspint main()<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  int a[3][4] = {1, 2, 3, 4, 4, 3, 2, 8, 7, 8, 9, 0};<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  int *ptr;<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp ptr = &a[0][0];<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp fun(&ptr);<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspreturn 0;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br>
&nbsp&nbsp&nbsp&nbsp&nbspvoid fun(int **p)<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp    printf('%d\n', **p);<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
<font size='4'><input type='radio' name='a24' value='1'>1<br><br>
		<input type='radio' name='a24' value='2'>2<br><br>
		<input type='radio' name='a24' value='3'>3<br><br>
		<input type='radio' name='a24' value='4'>4<br><br>
		<input type='radio' name='a24' value='Compilation error'>Compilation error<br><br><br>	<br></font>
<h3>25. 
What will be the output of the program ? <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h><br><br>

&nbsp&nbsp&nbsp&nbsp&nbspint main()<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp{<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp   static int arr[] = {0, 1, 2, 3, 4};<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  int *p[] = {arr, arr+1, arr+2, arr+3, arr+4};<br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp  int **ptr=p;<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp ptr++;<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp printf('%d, %d, %d\n', ptr-p, *ptr-arr, **ptr);<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp *ptr++;<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp printf('%d, %d, %d\n', ptr-p, *ptr-arr, **ptr);<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp *++ptr;<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp printf('%d, %d, %d\n', ptr-p, *ptr-arr, **ptr);<br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp ++*ptr;<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspprintf('%d, %d, %d\n', ptr-p, *ptr-arr, **ptr);<br><br>
    &nbsp&nbsp&nbsp&nbsp&nbspreturn 0;<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp}<br><br></h3>
<font size='4'><input type='radio' name='a25' value='0, 0, 0 1, 1, 1 2, 2, 2 3, 3, 3'>0, 0, 0 1, 1, 1 2, 2, 2 3, 3, 3<br><br>
		<input type='radio' name='a25' value='1, 1, 2 2, 2, 3 3, 3, 4 4, 4, 1'>1, 1, 2 2, 2, 3 3, 3, 4 4, 4, 1<br><br>
		<input type='radio' name='a25' value='1, 1, 1 2, 2, 2 3, 3, 3 3, 4, 4'>1, 1, 1 2, 2, 2 3, 3, 3 3, 4, 4<br><br>
		<input type='radio' name='a25' value='0, 1, 2 1, 2, 3 2, 3, 4 3, 4, 5'>0, 1, 2 1, 2, 3 2, 3, 4 3, 4, 5<br><br>
		<input type='radio' name='a25' value='Compilation error'>Compilation error<br><br><br>	<br></font>";
 echo "<h3>26.A pointer to a block of memory is effectively same as an array</h3><br><br>
<font size='4'><input type='radio' name='a26' value='true'>true<br><br>
		<input type='radio' name='a26' value='false'>false<br><br></font>";
		echo "<h3>27.Does this mentioning array name gives the base address in all the contexts?</h3><br><br>
<font size='4'><input type='radio' name='a27' value='yes'>yes<br><br>
		<input type='radio' name='a27' value='no'>no<br><br></font>";
		echo "<h3>28.	
Is there any difference int the following declarations?<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp int fun(int arr[]);<br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp int fun(int arr[2]);</h3><br><br>
<font size='4'><input type='radio' name='a28' value='yes'>yes<br><br>
		<input type='radio' name='a28' value='no'>no<br><br></font>";
		echo "<h3>29.Are the expressions arr and &arr same for an array of 10 integers?</h3><br><br>
<font size='4'><input type='radio' name='a29' value='yes'>yes<br><br>
		<input type='radio' name='a29' value='no'>no<br><br></font>";
		echo "<h3>30.Which of the following statements mentioning the name of the array begins DOES NOT yield the base address?<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp1:	When array name is used with the sizeof operator.<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp2:	When array name is operand of the & operator.<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp3: When array name is passed to scanf() function.<br><br>

    &nbsp&nbsp&nbsp&nbsp&nbsp4:	When array name is passed to printf() function.</h3><br><br>
	 
			<font size='4'><input type='radio' name='a30' value='1'>1<br><br>
		<input type='radio' name='a30' value='1,2'>1,2<br><br>
		<input type='radio' name='a30' value='2'>2<br><br>
		<input type='radio' name='a30' value='2,4'>2,4<br><br>
		<input type='radio' name='a30' value='3'>3<br><br><br>	<br></font> ";
		echo "<input type='submit' name='submit' value='submit'></form>";
		
	/*echo"	<!DOCTYPE html>
<html>
<body>

<button onclick="myFunction()">SUBMIT</button></form>

<p id="demo"></p>

<script>
function myFunction() {
    if (confirm("Are you sure you want to submit!") == true) {
		window.location("testcheck.php");
    } else {
		//window.location("test.php");
		return false;
    }
}
</script>

</body>
</html>";*/
?>