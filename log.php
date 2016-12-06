<html>
<?php
session_start();
?>
<style>
h1
{	
	border-right: 20px solid red;
	border-left: 20px solid red;
	background-color:pink;
	text-decoration:underline;
}
td
{
font-size:20px;
line-height:1.5em;
}
#table
{
background-color:pink;
border-width:5;
border-style:groove;
border-radius:10px;
}
.bodies
    {
      background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
      align-self: center;
    }
p
{
text-decoration:underline;
}
span
{
color:red;
}
#button
{background-color:cyan;
border-width:5px;
border-color:red;
width:100%
}
#button:hover
{background-color:red;
color:black;
}
#a
{font-size:15px;
background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none
}
#td
{line-height:100px;
}
#hh3 { letter-spacing:4px ;

 	 font-size:80px ;
	
	 font-weight:bold;
	 text-align:center ;
		
	 color:black;
	 text-decoration:underline;
	 background-color:pink;
	 border-top:10px solid red;
	 border-bottom:10px solid red;
	 border-left: 350px solid  grey;
	 border-right: 350px solid  grey;
}
#hh31
{border-left:20px solid red;
border-right:20px solid red;
}
#h2
{background-color:pink;
border-color:red;
border-radius:50%;
border-width:10px;
margin-left:100px;
margin-right:100px;
font-size:50px;
}
#body
{
border-left:solid grey 50px;
border-right:solid grey 50px;
}
#div3
{border-left:10px;
border-right:10px;
}
p
{background-color:pink;
border-radius:8px;
margin-left:200px;
margin-right:180px;
}
</style>
<script>
function nameValidation(inputName,inputPass)
	{	
		var name= /^[a-zA-Z]+$/;
		if(!inputName.value.match(name))
		{
			alert("Please enter only alphabets in the name");
			return false;
		}
		var pas=inputPass.value;
		if(pas.length<6)
		{
			alert("Password must be more than 6 characters");
			return false;
		}
	}
</script>
<div class="bodies">
<body id="body" bgcolor="cyan"><div id="div3">
<center><h1 id="hh3"><div id="hh31">LIBRARY</div></h1></center>
<center><h2 id="h2">SIGN IN</h2></center>
	<form action="log.php" method="POST" name="log" onsubmit="return nameValidation(document.register.fname,document.register.password);" id="myForm">
	<center><br><br><br><br><br><br><br><br><br><br><br><br>
	<table id="table">
	<tbody>
			<tr>
			<td><label for="Username">Username:</label><span id="span">*</span>:</td> 
			<td> <input type="username" id="Username" name="fname"  align="center"></td>
			</tr>
			<tr>
			<td	><label for="password">Password</label><span id="span">*</span>:</td> 
			<td><input type="password" id="password" name="password" align="center"></td>
			</tr>
			<tr>
			<td colspan="2"><button id="button"><input id="a" type="submit" value="Submit"></button></td>
			</tr>
 			</tbody>
 	</table>
 	</center>
	</form><br><br><br><br><br><br><br>
<p>Note: Please make sure your details are correct before submitting form and that all fields marked with <span id="span">*</span> are completed!.</p>
</div></body> 
<?php
   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser,"");
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    
   
  if(isset($_POST['fname'])&&isset($_POST['password']))
  {	
  	$name=$_POST['fname'];
  	$pass=$_POST['password'];
      $sql ="SELECT * FROM register where name='$name' and pass='$pass'";
      if(isset($sql))
      {		
          mysql_select_db('dbms_proj');
          $retval = mysql_query( $sql, $conn );
          if(mysql_num_rows($retval))
          {
              echo "<script>window.open('login_data.php','_self')</script>";
              $_SESSION['fname']=$name;
          }
          else
          {
            echo "<script>alert('Incorrect password or username')</script>";
            exit();
          }
      mysql_close($conn);
 }
}
?>
</html>
