 <html lang="en">

<head>
  <title>
    Welcome page
  </title>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
    height:400;
    align:left;
  }
  </style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<style>
  
body { background-color:cyan; }

#hh3 { letter-spacing:4px ;

   font-size:80px ;
   font-family: Lucida;
   font-weight:bold;
   text-align:center ;
    
   color:black;
   text-decoration:underline;
   background-color:pink;
   border-top:10px solid red;
   border-bottom:10px solid red;
   border-left: 300px solid  grey;
   border-right: 300px solid  grey;
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
  
  width:25%;

  
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
  
#ol1 { background: #3399ff;

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

#nothing{}
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

dropdown-content a:hover {background-color: grey}

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
#a1{
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
.a:hover{
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
margin-top: 100px;
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


  #div1
{border: 10px solid grey ;

    border-radius: 8px ;
  
  margin-left: 90px ;
  margin-right:90px;
  margin-top:15px;
  margin-bottom:15px;}
</style>

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
<h2 id ="hh3"><div id="hh31">LIBRARY</div></h2> 
<div id="txt" style="margin-left: 70px;margin-top: 50px"></div>
<!--==============================================================================================================-->
<div class="btn-group" style="margin-left:72px;margin-top:20px">
  <a style="width:228; color: black;padding:20px; background-color:pink; border:5px solid red;""href="http://localhost/series/firstfile/display.php" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span><b> Home</b></a>
  <div class="btn-group">
    <button style="width:228;color: black; border:5px solid red;padding:20px; background-color:pink;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-certificate"></span>
    <b> About Us</b> <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a style="width:228;color: black;border:5px solid red; padding:20px; background-color:pink;" href="http://localhost/series/firstfile/intro.php"><i class="material-icons">&#xe873;</i><b> Introduction</b></a></li>
      <li><a style="width:228;color: black;border:5px solid red; padding:20px; background-color:pink;" href="http://localhost/series/firstfile/mission.php"><span class="glyphicon glyphicon-road"></span><b> Mission</b></a></li>
    <li><a style="width:228;color: black;border:5px solid red; padding:20px; background-color:pink;" href="http://localhost/series/firstfile/rules.php"><span class="glyphicon glyphicon-asterisk"></span><b> Rules</b></a></li>
    <li><a style="width:228;color: black;border:5px solid red; padding:20px;background-color:pink;" href="http://localhost/series/firstfile/time.php"><span class="glyphicon glyphicon-time"></span><b> Timings</b></a></li>
    </ul>
  </div>
  <a style="width:228;color: black;border:5px solid red; padding:20px; background-color:pink;" href="http://localhost/series/firstfile/contact_us.php" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span><b> Contact Us</b></a>
  <a style="width:228;color: black;border:5px solid red; padding:20px; background-color:pink;" href="http://localhost/series/firstfile/register.php" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span><b> Register</b></a>
  <a style="width:228;color: black;border:5px solid red; padding:20px; background-color:pink;" href="http://localhost/series/firstfile/log.php" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a>
</div>
</div>
    <div class="container">
  <div style="border:5px solid red ;" id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol id="nothing" class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="ghi.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="library_pataskala_026.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="abc.jpg" alt="Flower" width="600" height="345">
      </div>

      <div class="item">
        <img src="library.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>
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
  <ol id="ol1">
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
<br><td><a href="http://localhost/series/firstfile/photos.php" target="_blank" style="margin-left: 100px"><img class="img-circle"  src="abc.jpg" width="490" height="300"></img></a><br><br></td>

</body>
</html>
