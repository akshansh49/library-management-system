<?php 
session_start();
if(isset($_SESSION['fname']))
{
?>
<html>
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
background-color:pink;
border-radius:8px;
font-size:20px;
margin-left:100px;
  margin-right:960px;
  margin-bottom:10px;
  margin-top:-50px;
}

input[type=text]:focus {
    width: 50%;
}
#php
{
  background:pink;
  color:red;
  margin-right:90px;
  margin-left:990px;
  font-size: 20px;
  border-radius:8px;
  margin-top:100px;
}
#div_body
{ 
    
  margin-left:125px;
  margin-right:125px;
}
#table_body
{ 
  background-color: pink;
  border:10px solid red;
  border-style:groove;
  border-radius:8px;

}
#row:hover
{
  background-color: cyan;
  transition: ease-in 0.5s;
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
    else if(h>17)
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
          <td id="td1"><a href= "http://localhost/series/firstfile/issueBook.php" target="_self" id ="a1"><pre>   IssueBook  </pre></a></td>
          <td id="td1"><a href= "http://localhost/series/firstfile/returnBook.php" target="_self" id ="a1"><pre>   Return Book  </pre></a></td>
        <td id="td1"><a href= "http://localhost/series/firstfile/fine_due.php" target="_self" id ="a1"><pre>Fine Due</pre></a></td>
        <td id="td1"><a href= "http://localhost/series/firstfile/history.php" target="_self" id ="a1"><pre>History</pre></a></td>
        <td id="td1"><a href= "http://localhost/series/firstfile/LogOut.php" target="_self" id ="a1"><pre>   LogOut   </pre></a></td>
      </tr>
    </table>
    <?php
    $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser,"");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   mysql_select_db('dbms_proj');
    $name_user=$_SESSION['fname'];
    $sql="SELECT * FROM register WHERE name='$name_user'";
    $result=mysql_query($sql,$conn);
    while($row=mysql_fetch_array($result)){
    ?>
    </div>
    <br><br>
    <div id="div_body">
    <table id="table_body" border=1;>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>User ID:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $row['user_id'] ?></td>
    </tr>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>Name:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $_SESSION['fname'] ?></td>
    </tr>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>Surname:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $row['surname'] ?></td>
    </tr>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>Date of Birth:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $row['dob'] ?></td>
    </tr>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>You are an:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $row['login_as'] ?></td>
    </tr>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>E-Mail:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $row['email'] ?></td>
    </tr>
    <tr id="row">
    <td style="width:500px;padding:20px;border-width:5px;font-size: 20px;font-weight: bold;"><pre>Mobile Number:</pre></td>
    <td style="width:500px;padding:20px;border-width:5px;width: 25%;font-weight: bold;font-family: Helvetica;"><?php echo $row['telephone'] ?></td>
    </tr>
    </table>
    </div>
    <?php
  }
  mysql_close();
  ?>

</html>
<?php
}
else
{
  echo "<script>window.open('log.php','_self');</script>";
}
?>