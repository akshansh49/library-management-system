<?php
$dbhost='127.0.0.1';
$dbuser='root';
$password='rootpassword';
$conn=mysql_connect($dbhost,$dbuser,"");
if(!$conn)
{
	die("Could not connect:".mysql_error());
}
mysql_select_db('dbms_proj');
?>
<html>
<script>
function deselect()
{
	return false;
}
</script>
<body>
<h1><center><b>Math Quiz</b></center></h1>
<br><br>
<form action="labTest.php" method="post" name="myForm">
<ol>
<li>
<input type="checkbox" name="first">What is 3X2?<br>
<select value="Choose an answer" name='ques1'>
<option>12</option>
<option>6</option>
<option>3</option>
</select>
</li>
<li>
<input type="checkbox" name="second">What is 6X9?<br>
<select value="Choose an answer" name='ques2'>
<option>54</option>
<option>6</option>
<option>3</option>
</select>
</li>
<li>
<input type="checkbox" name="third">What is 0X0?<br>
<select value="Choose an answer" name='ques3'>
<option>12</option>
<option>6</option>
<option>0</option>
</select>
</li>
<li>
<input type="checkbox" name="fourth">What is 10X5?<br>
<select value="Choose an answer" name='ques4'>
<option>---</option>
<option>12</option>
<option>6</option>
<option>50</option>
</select>
</li>
<li>
<input type="checkbox" name="fifth">What is 2X1?<br>
<select value="Choose an answer" name='ques5'>
<option>2</option>
<option>6</option>
<option>3</option>
</select>
</li>
<br>
<input type="submit" value="submit">
<input type="reset" value="reset">	
</ol>
</form>
</body>
</html>
<?php

if(isset($_POST['ques1']))
{
$choice1=$_POST['ques1'];
$sql1="SELECT * FROM quiz WHERE answer='$choice1' and ques_no='1'";
$result1=mysql_query($sql1,$conn);
if(mysql_num_rows($result1))
{
	echo "Answer 1 is correct<br>";
}
else
{
	echo "answer 1 is incorrect<br>";
}
}
if(isset($_POST['ques2']))
{
$choice2=$_POST['ques2'];
$sql2="SELECT * FROM quiz WHERE answer='$choice2' and ques_no='2'";
$result2=mysql_query($sql2,$conn);
if(mysql_num_rows($result2))
{
	echo "Answer 2 is correct<br>";
}
else
{
	echo "answer 2 is incorrect<br>";
}
}
if(isset($_POST['ques3']))
{
$choice3=$_POST['ques3'];
$sql3="SELECT * FROM quiz WHERE answer='$choice3' and ques_no='3'";
$result3=mysql_query($sql3,$conn);
if(mysql_num_rows($result3))
{
	echo "Answer 3 is correct<br>";
}
else
{
	echo "answer 3 is incorrect<br>";
}
}
if(isset($_POST['ques4']))
{
$choice4=$_POST['ques4'];
$sql4="SELECT * FROM quiz WHERE answer='$choice4' and ques_no='4'";
$result4=mysql_query($sql4,$conn);
if(mysql_num_rows($result4))
{
	echo "Answer 4 is correct<br>";
}
else
{
	echo "answer 4 is incorrect<br>";
}
}
if(isset($_POST['ques5']))
{
$choice5=$_POST['ques5'];
$sql5="SELECT * FROM quiz WHERE answer='$choice5' and ques_no='5'";
$result5=mysql_query($sql1,$conn);
if(mysql_num_rows($result5))
{
	echo "Answer 5 is correct<br>";
}
else
{
	echo "answer 5 is incorrect<br>";
}
}
?>