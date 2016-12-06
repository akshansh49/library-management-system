<?php 
session_start();
if(isset($_SESSION['fname']))
{
?>
<html>

<head>
  <title>
    Welcome page
  </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
#php
{
  background:pink;
  color:red;
  margin-right:90px;
  margin-left:990px;
  font-size: 20px;
  border-radius:8px;
  margin-top:40px;
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
<div id="php">
<?php
echo nl2br("Welcome \n".$_SESSION['fname']."!!!");
?>
</div>
<body onload="startTime()">

<div id="txt"></div>

<div id="div1">

    <table id ="tablemain" ><tr>
          <td id="td1"><a href= "http://localhost/series/firstfile/display.php" target="_self" id ="a1"><pre>Back</pre></a></td>

          <td id="td1"><div class="dropdown" >
<a href="#" id ="a1"><pre> About us  </pre></a></b><div class="dropdown-content">
<a href="http://localhost/series/firstfile/intro.php" id ="a1">Search By Book Name</a>
<a href="http://localhost/series/firstfile/mission.php" id ="a1">Search By Author Name</a>
<a href="http://localhost/series/firstfile/rules.php" id ="a1">Search By Publisher Name</a>
</div></div>        </td>
        <td id="td1"><a href= "http://localhost/series/firstfile/logOut.php" target="_blank" id ="a1"><pre>LogOut</pre></td>
      </tr>
    </table>
            <?php
            mysql_select_db('dbms_proj');
  }
  ?>

    </div>
    </body>
    </html>