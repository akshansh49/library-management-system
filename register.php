<html>
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
	
	p
	{
		text-decoration:underline;
	}
	
	span
	{
		color:red;
	}

	#button
	{
		width:100%;
		background-color:cyan;
		border-color:red;
		border-width:5px;
		transition:ease 0.5s;
	}
	
	#button:hover
	{
		background-color:red;
		color:black;
	}

	#a
	{
		font-size:20px;
		background-color: Transparent;
    	background-repeat:no-repeat;
    	border: none;
    	cursor:pointer;
    	overflow: hidden;
    	outline:none
	}

	#hh31
	{
		border-left:20px solid red;
		border-right:20px solid red;
	}

	#hh3 
	{ 
		letter-spacing:4px ;
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

	#h2
	{
		background-color:pink;
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

	p
	{
		background-color:pink;
		border-radius:8px;
		margin-left:200px;
		margin-right:180px;
	}
</style>
<script src="jquery-3.1.1.js"></script>
<script>
	function nameValidation(inputId,inputName,inputLname,inputNum,inputtel,inputPass)
	{	
		var id=/^[0-9]+$/;
		if(!inputId.value.match(id))
		{
			alert("User ID must contain numbers only");
			return false;
		}
		var name= /^[a-zA-Z]+$/;
		if(!inputName.value.match(name))
		{
			alert("Please enter only alphabets in the name");
			return false;
		}
		var lname=/^[a-zA-z]+$/;
		if(!inputLname.value.match(lname))
		{
			alert("Please enter only alphabets int the last name");
			return false;
		}
		var tel=/[0-9]+$/;
		if(!inputNum.value.match(tel))
		{
			alert("Telephone Number must contain only numerical values");
			return false;
		}
		var pst=/[0-9]+$/;
		if(!inputtel.value.match(pst))
		{
			alert("Post code must only contain numerical values");
			return false;
		}
		if(inputtel.value.length!=10)
		{
			alert("Phone number should have atleast 10 digits");
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

<body id="body" bgcolor="cyan">
	<center>
		<h1 id="hh3">
		<div id="hh31">LIBRARY</div>
		</h1>
	</center>
	<center>
		<h2 id="h2">CREATE YOUR LIBRARY ACCOUNT</h2>
	</center>
	<form action="insert.php" method="POST"	name="register" onsubmit="return nameValidation(document.register.user_id,document.register.fname,document.register.lname,document.register.tel,document.register.tel,document.register.password);" id="myForm">
	<center>
	<table id="table">
	<tbody>
			<tr>
			<td><label for="user_id">User ID:</label><span id="span">*</span>:</td>
			<td><input type="user_id" id="user_id" name="user_id" align="center" required></td>
			</tr>
			<td><label for="fname">Name:</label><span id="span">*</span>:</td> 
			<td> <input type="fname" id="Name" name="fname" align="center" required></td>
			</tr>
 			<tr>
 			<td><label for="lname">Surname</label><span id="span">*</span>:</td> 
 			<td><input type="lname" id="Surname" name="lname" align="center" required></td>
 			</tr>
			<tr>
			<td><label for="password">Password</label><span id="span">*</span>:</td> 
			<td><input type="password" id="password" name="password" align="center" required></td>
			</tr>
			<tr>
 			<td><label for="dob">Date of Birth</label><span id="span">*</span>:</td> 
 			<td><input type="dob" id="dob" name="dob" align="center" required></td>
 			</tr>
 			<tr>
 			<td>Login as<span id="span">*</span>:</td>	
 			<td>	<select name="insert">
 					<option>EMPLOYEE</option>
 					<option>STUDENT</option>
 					</select></td>
 			</tr>
 			<tr>
 			<td><label for="email">Email</label> <span id="span">*</span>:</td> 
 			<td><input type="email" id="email" name="mail" align="center" required></td>
 			</tr>
 			<tr>
 			<td>Telephone:</td> 
 			<td><input type="telephone" name="tel" align="center" required></td>
 			</tr>
 			<br>
 			<tr><td colspan="2"><center><button id="button"><font size="10"><input id="a" type="submit" value="Submit"></font></button></center></td></tr>
 			</tbody>
 	</table>
 	</center>
	</form>
	<br><br>
<p>Note: Please make sure your details are correct before submitting form and that all fields marked with <span id="span">*</span> are completed!.</p>
</body> 
</html>
