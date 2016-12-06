 <html>

<head>
	<title>
		Welcome page
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	
body { background-color:cyan; }

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

	#div1
{border: 10px solid grey ;

		border-radius: 8px ;
	
	margin-left: 90px ;
	margin-right:90px;
	margin-top:15px;
	margin-bottom:15px;}

	#tablemain{
	border:5px solid grey ;
	}

	img{border:3px solid grey;
	}

	#td1
{
	
	text-align:center;


	background-color:grey;

	font-weight:bold;

	font-size:20px;
	
	width:11.11%;

	
}
#button
{background-color:pink;
border:none;
color:black;
padding:15px 32px;
text-align:left;
text-decoration:none;
display:inline-block;
font-size:30px;
}
#hh31
{border-left:20px solid red;
border-right:20px solid red;
}
#div2{ border : 10px dotted grey ;}

#mtext{color:pink;
	
	font-weight:bold;
	
	font-size:20px;}

#headings1{
	color:black;
	background-color:pink;
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
.header
 {
    border-top:solid red 10px;
    border-bottom:solid red 10px;
    border-left:solid red 10px;
    border-right:solid red 10px;
    padding: 15px;
    background-color:pink;
}
.headings
 {
	margin-top:15px;
  width: 50%;
    float: left;

    padding: 15px;
   border-right: 5px dotted grey;
}


.dropdown {
}

.dropdown-content {
        position:absolute;
    display: none;
    background-color: green;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    border:2px solid cyan;
    display: block;
}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
    display: block;
}
#img
{margin-left:90px;
border-color:red;
border-style:groove;
border-radius:8px;
border-width:10px;}
}
.dropdown:hover .dropbtn {
    background-color: red;
}
#a1:link, a:visited {
    background-color: pink;
    color: black;
    width:100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-top:5px solid red;
    border-left:5px solid red;
    border-right:5px solid red;
    border-bottom:5px solid red;
    transition: ease-in 0.5s;
}

#a1:hover, a:active {
    background-color: cyan;
}
#headlines
{width:100%;
table-layout:fixed;
}
#txt
{color:red;
margin-left:100px;
background-color:pink;
margin-right:980px;
border-radius:8px;
font-size:20px;
transition: ease 0.25s;
}
#search
{margin-left:100px;
}
.input[type=text] {
    width: 130px;
}
input[type=text]:focus {
    width: 50%;
}
#button2
{
background-color:pink;
border:none;
color:black;
padding:15px 32px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:30px;
margin-left:100px;
}
</style>
</head>

<body>
	<h2 id ="hh3"><div id="hh31">LIBRARY</div></h2>	
	<script src="jquery-3.1.1.js"></script>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var mom;
    m = checkTime(m);
    s = checkTime(s);
    if(h>12&&h<17)
    mom="GOOD AFTERNOON!!";
    else if(h>=17)
    mom="GOOD EVENING!!";
    else
    mom="GOOD MORNING!!";
    document.getElementById('txt').innerHTML =
    mom + "<br>" + h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
    
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
</script>
</head>

<body onload="startTime()">

<div id="txt"></div>

<div id="div1">

		<table id ="tablemain" ><tr>
					<td id="td1"><a href= "http://localhost/series/firstfile/display.php" target="_self" id ="a1"><pre>Home</pre></a></td>

					<td id="td1"><div class="dropdown" >
<a href="#" id ="a1"><pre>About us</pre></a></b><div class="dropdown-content">
<a href="http://localhost/series/firstfile/intro.php" id ="a1">Introduction</a>
<a href="http://localhost/series/firstfile/mission.php" id ="a1">Mission</a>
<a href="http://localhost/series/firstfile/rules.php" id ="a1">Rules</a>
<a href="http://localhost/series/firstfile/time.php" id ="a1">Timings</a>
</div></div>				</td>
				<td id="td1"><a href= "http://localhost/series/firstfile/contact_us.php" target="_self" id ="a1"><pre>Contact us</pre></a></td>
				<td id="td1"><a href= "http://localhost/series/firstfile/register.php" target="_blank" id ="a1"><pre>Register</pre></a></td>
				<td id="td1"><a href= "http://localhost/series/firstfile/log.php" target="_blank" id ="a1"><pre>Login</pre></td>
			</tr>
		</table>
		<img src="library_pataskala_026.jpg" style="height:290px;width:1064px;"></img>
        </div>
        <table id="headlines">
        <tbody>
<div id="div2"></div>
<col align="justify">
<tr>
	<td align="center">
	<div class="header">
	<div id="headings1">
	<b><button id="button">Headlines</font></button>  
	</div></div>
	 </td>          
	 <td align="center">   
	<div class="header">
	<div id="headings1">
	<button id="button">Photo Gallery</button></b>
	</td>
	</tr>
	</div></div>	
</tbody>
</table>
<div id="div2"></div>
<div class="headings"> 
	<ol>
		<li>
			<a href="http://timesofindia.indiatimes.com/world/pakistan/Stop-Baloch-atrocities-or-face-sanctions-European-Union-to-Pakistan/articleshow/54484297.cms" target="_blank" id ="a1">Stop Baloch atrocities or face sanctions</a></li>
		</li>
		<li>
			<a href="http://timesofindia.indiatimes.com/world/pakistan/Pakistan-warns-India-against-giving-asylum-to-Baloch-leader-Brahamdagh-Bugti/articleshow/54483839.cms" target="_blank" id ="a1">Pak warns India against giving asylum to Bugti</a>
		</li>
		<li>
			<a href="http://timesofindia.indiatimes.com/india/Samsung-Note-2-catches-fire-on-flight-to-Chennai-DGCA-asks-flyers-to-be-careful-with-all-Samsung-Note-devices/articleshow/54481593.cms" target="_blank" id ="a1">Samsung Note 2 catches fire on Chennai flight</a>
		</li>	
		<li>
			<a href="http://timesofindia.indiatimes.com/top-stories/India-third-in-ICC-ODI-standings-Kohli-second-in-batting-chart/articleshow/54483757.cms" target="_blank" id ="a1">India third in ICC ODI standings</a>
		</li>
		<li>
			<a href="http://timesofindia.indiatimes.com/india/GST-threshold-fixed-at-Rs-20-lakh-rate-to-be-decided-in-October/articleshow/54483263.cms" target="_blank" id ="a1">GST exemption threshold fixed at Rs20 lakh</a>
		</li>
		<li>
			<a href="http://timesofindia.indiatimes.com/entertainment/hindi/bollywood/news/MNS-leader-threatens-Pakistani-actors-Get-out-in-48-hours-or-we-will-push-you-out/articleshow/54476749.cms" target="_blank"  id ="a1">Leave India in 48 hours: MNS to Pak actors</a>
		</li>
		<li>
		<a href="http://timesofindia.indiatimes.com/india/Sahara-apologizes-for-counsels-remark-SC-agrees-to-hear-Subrata-Roys-bail-plea/articleshow/54479433.cms" target="_blank" id ="a1">Sahara apologizes to SC for counsel's remark</a>
		</li>

	</ol>
	</div></td>
<br><td><a href="http://localhost/series/firstfile/photos.php" target="_blank" ><img id="img" src="abc.jpg" width="490" height="300"></img></a><br><br></td>
</body>
</html>
