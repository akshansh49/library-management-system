<html>
<head>
	<title>
		Welcome page
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	body { background-color:rgb(209,183,245); }
	#hh3 { letter-spacing:4px ;
		 font-size:80px ;
		 font-weight:bold;
		 text-align:center ;
		 color:rgb(0,0,255);
		 text-decoration:underline;
		 border-left: 400px solid  yellow;
		 border-right: 400px solid  yellow;
		}
	#div1
	      {
		border: 10px solid blue ;
		border-radius: 8px ;
		margin:15px 80px ; 
	       }
	#tablemain
	{
	border-bottom:5px solid blue ;
	}
	img{border:3px solid yellow;
	    border-radius:8px;}
	#td1
	{
	letter-spacing:2px ;
	text-align:center;
	padding:21px ;
	background-color:orange;
	font-weight:bold;
	font-size:20px;
	width:19%;
	}
	#div2{ border : 10px dotted blue ;}
	#mtext{color:red;
		font-weight:bold;
		font-size:20px;}
	#headings1{color:blue;
		  font-size:40px;
		  font-weight:bold;
		}
	ol { background: #3399ff;
    		padding: 20px;}
	ol li {background: pink;
   		 margin: 5px;}
* {
    box-sizing: border-box;
}
.header {
    border: none;
    padding: 15px;
}
.headings {
	margin-top:15px;
    width: 50%;
    float: left;
    padding: 15px;
    border-right: 3px dotted blue;
}
.dropbtn
{
padding:16px;
font-size:16px;
background-color:orange;
cursor:pointer;
border: none !important;
}
.dropdown
{
position:relative;
display:inline-block;
}
.dropdown-content
{
display:none;
position:absolute;
background-color:#f9f9f9;
}
.dropdown:hover .dropdown-content
{
display:block;
}

a:link {color: blue;   text-decoration: none;}
a:visited {color: black;  text-decoration: none;}
a:hover {color: cyan;  text-decoration: underline;}
a:active {color: red;  text-decoration: underline;}
</style>
</head>
<body>
	<h2 id ="hh3">LIBRARY</h2>
	<div id="div1">
		<table id ="tablemain" >
			<tr>
				<td id="td1"><a href= "http://localhost/series/firstfile/test.php" target="_self">Home</a></td>
				<td id="td1">
				<div class="dropdown">
				<button
				class="dropbtn"><b>About us</b></button>
				<div class="dropdown-content">
				<a href="http://localhost/series/firstfile/intro.php">Introduction</a>
				<a href="http://localhost/series/firstfile/mission.php">Mission</a>
				<a href="http://localhost/series/firstfile/rules.php">Rules</a>
				<a href="http://localhost/series/firstfile/time.php">Timings</a>
				</div>
				</div>	
				</td>
				<td id="td1"><a href= "http://localhost/series/firstfile/welcme.php" target="_blank">Contact us</a></td>
				<td id="td1"><a href= "http://localhost/series/firstfile/register_page.php" target="_blank">Register</a></td>
				<td id="td1"><a href= "http://localhost/series/firstfile/login.php" target="_blank">Login</td>
			</tr>
		</table>
	</div>
	