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
td
  {
    font-size:20px;
    line-height:1.5em;
  }
.bodies
{
  background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
  align-self: center;
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

  #tablemain{
  border:5px solid grey ;
  border-radius: 8px;
  }

  #td1
{
  text-align:center;
  background-color:red;
  font-weight:bold;
  font-size:20px;
  width:50%;
  margin-left:1000px;
  display: :inline-block;
}

#hh31
{border-left:20px solid red;
border-right:20px solid red;
}


 * {
    box-sizing: border-box;
}
#author_book
{
  width:100%;
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
#txt
{color:red;
background-color:pink;
border-radius:8px;
font-size:20px;
margin-left:100px;
  margin-right:960px;
  margin-bottom:10px;
  margin-top:-40px;
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
#div1
{
  margin-left:320px;
  margin-right:300px;
  margin-top:40px;
}
#div2
{
  margin-left:1000px;
  margin-top:-95px;
  margin-right:100px;
}
#span
{
  color: red;
}
p
  {
    text-decoration:underline;
    background-color: pink;
    margin-right: 200px;
    margin-left: 200px;
    border: 1px solid red;
    border-radius: 10px;
    margin-bottom: 100px;
  }
#table
  {
    margin-top: 30px;
    background-color:pink;
    border-width:5;
    border-style:groove;
    border-radius:10px;
    padding: 10px;
  }
#button
  {
    width:100%;
    background-color:cyan;
    border-color:red;
    border-width:5px;
    transition:ease 0.5s;
    display: inline-block;
  }
#button:hover
{
  background-color: red;
  color:black;
}
#div1
{
  margin-left:100px;
}
#div3
{
  margin-top:-40px;
}
</style>
</head>

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
<div class="bodies">
<div id="php">
<?php
echo nl2br("Welcome \n".$_SESSION['fname']."!!!");
?>
</div>
<body onload="startTime()">

<div id="txt"></div>

<div id="div1">

    <table id ="tablemain" >
          <td id="td1"><a href= "http://localhost/series/firstfile/login_data.php" target="_self" id ="a1"><pre>Back</pre></a></td>
      </table>    
</div> 
<div id="div2">
<table id="tablemain">
        <td id="td1"><a href= "http://localhost/series/firstfile/LogOut.php" target="_self" id ="a1"><pre>    LogOut    </pre></a></td>
    </table>
    <br><br><br><br><br>
    </div>
    <div id="div3">
<form action="issueBook.php" method="POST">
<center>
<table id="table">
<tr>
<td><label for="name_book">Name of the Book</label><span id="span">*</span>:</td>
<td>
<select id="author_book" name="name_book" align="center" value="Hello">
<?php
$dbhost='127.0.0.1';
$dbuser='root';
$password='rootpassword';
$conn=mysql_connect($dbhost,$dbuser,"");
if(!$conn)
{
  die('Could not connect:'.mysql_error());
}
  mysql_select_db('dbms_proj');

$name_book=$_POST['name_book'];
$sql = "SELECT DISTINCT(book_title) FROM bookDetails";
$result = mysql_query($sql,$conn);
while($row=mysql_fetch_array($result))
{ 
  ?>
<option><?php echo $row['book_title'] ;?></option>
  <?php
}
?>
</select>
</td>
</tr>
<tr>
<td colspan="2"><center><button id="button"><font size="10"><input id="a" type="submit" value="Submit"></font></button></center></td>
</tr>
</table>
</center>
</form>
<?php
if(isset($_POST['name_book']))
{
  $book=$_POST['name_book'];
  $sql="SELECT * FROM bookDetails WHERE book_title='$book'";
  mysql_select_db('dbms_proj');
  if(isset($sql))
  {
    $run_query=mysql_query($sql,$conn);
    if(mysql_num_rows($run_query))
    {
      echo "<script>window.open('table_book.php','_self');</script>";
      $_SESSION['name_book']=$_POST['name_book'];
    }
    else
    {
      echo "<script>alert('No such book found in our library');</script>";
    }
    mysql_close();
  }
}
?>
<center>
<br><br><br>
<p>Note: Please make sure your details are correct before submitting form and that all fields marked with <span id="span">*</span> are completed!.</p>
</center>
</div>
</div>
</html>
<?php
}
else
{
  echo "<script>window.open('log.php','_self');</script>";
}
?>

<!--
<?php
//session_start();
//if(isset($_SESSION['fname']))
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
td
  {
    font-size:20px;
    line-height:1.5em;
  }
.bodies
{
  background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
  align-self: center;
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

  #tablemain{
  border:5px solid grey ;
  border-radius: 8px;
  }

  #td1
{
  text-align:center;
  background-color:red;
  font-weight:bold;
  font-size:20px;
  width:50%;
  margin-left:1000px;
  display: :inline-block;
}

#hh31
{border-left:20px solid red;
border-right:20px solid red;
}


 * {
    box-sizing: border-box;
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
#txt
{color:red;
background-color:pink;
border-radius:8px;
font-size:20px;
margin-left:100px;
  margin-right:960px;
  margin-bottom:10px;
  margin-top:-40px;
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
#div1
{
  margin-left:320px;
  margin-right:300px;
  margin-top:40px;
}
#div2
{
  margin-left:1000px;
  margin-top:-95px;
  margin-right:100px;
}
#span
{
  color: red;
}
p
  {
    text-decoration:underline;
    background-color: pink;
    margin-right: 200px;
    margin-left: 200px;
    border: 1px solid red;
    border-radius: 10px;
    margin-bottom: 100px;
  }
#table
  {
    margin-top: 30px;
    background-color:pink;
    border-width:5;
    border-style:groove;
    border-radius:10px;
    padding: 10px;
  }
#button
  {
    width:100%;
    background-color:cyan;
    border-color:red;
    border-width:5px;
    transition:ease 0.5s;
    display: inline-block;
  }
#button:hover
{
  background-color: red;
  color:black;
}
#div1
{
  margin-left:100px;
}
#div3
{
  margin-top:-40px;
}
</style>
</head>

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
<div class="bodies">
<div id="php">
<?php
//echo nl2br("Welcome \n".$_SESSION['fname']."!!!");
?>
</div>
<body onload="startTime()">

<div id="txt"></div>

<div id="div1">

    <table id ="tablemain" >
          <td id="td1"><a href= "http://localhost/series/firstfile/login_data.php" target="_self" id ="a1"><pre>Back</pre></a></td>
      </table>    
</div> 
<div id="div2">
<table id="tablemain">
        <td id="td1"><a href= "http://localhost/series/firstfile/LogOut.php" target="_self" id ="a1"><pre>    LogOut    </pre></a></td>
    </table>
    <br><br><br><br><br>
    </div>
    <div id="div3">
<form action="issueBook.php" method="POST">
<center>
<table id="table">
<tr>
<td><label for="name_book">Name of the Book</label><span id="span">*</span>:</td>
<td><input type="text" id="author_book" name="name_book" align="center" required></td>
</tr>
<tr>
<td colspan="2"><center><button id="button"><font size="10"><input id="a" type="submit" value="Submit"></font></button></center></td>
</tr>
</table>
</center>
</form>
<?php

   /* $dbhost='127.0.0.1';
$dbuser='root';
$password='rootpassword';
$conn=mysql_connect($dbhost,$dbuser,"");
if(!$conn)
{
  die('Could not connect:'.mysql_error());
}
if(isset($_POST['name_book']))
{
  $book=$_POST['name_book'];
  $sql="SELECT * FROM bookDetails WHERE book_title='$book'";
  mysql_select_db('dbms_proj');
  if(isset($sql))
  {
    $run_query=mysql_query($sql,$conn);
    if(mysql_num_rows($run_query))
    {
      echo "<script>window.open('table_book.php','_self');</script>";
      $_SESSION['name_book']=$_POST['name_book'];
    }
    else
    {
      echo "<script>alert('No such book found in our library');</script>";
    }
    mysql_close();
  }
}*/
?>
<center>
<br><br><br>
<p>Note: Please make sure your details are correct before submitting form and that all fields marked with <span id="span">*</span> are completed!.</p>
</center>
</div>
</div>
</html>
<?php
}
//else
{
  //echo "<script>window.open('log.php','_self');</script>";
}
?>

-->
